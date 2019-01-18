<?php
	 
	$mysqli = mysqli_connect('localhost', 'root', '', 'im');

	(string) $i = $_REQUEST['dispatch'];
	$q1 = "SHOW FULL COLUMNS FROM `$i`";
	//var_dump($q1);
	$query1 = mysqli_query($mysqli, $q1);
	//var_dump($query1);
	$result1 = mysqli_fetch_all($query1, MYSQLI_ASSOC);
	//echo "<pre>";
	//var_dump($result1);
	/*for ($y = 0; $y < count($result1); $y++) {
		echo $result1[$y]['Field']."<br>";
	}*/
	//echo "</pre>";
	$query2 = mysqli_query($mysqli, "SELECT * FROM `$i`");
	$result2 = mysqli_fetch_all($query2, MYSQLI_ASSOC);

?>

<h2>Таблица: <?php echo $_REQUEST['dispatch']; ?></h2>
  <table class="table_basket" style="border: 1px solid #000;">
    <tr>
    	<?php
    		for ($y = 0; $y < count($result1); $y++) {
				echo "<th>".$result1[$y]['Field']."</th>";
			}
    	?>
    </tr>
	
    <?php 
        $i = 1;
        foreach ($result2 as $key => $value) {
          	echo "<tr>";
        	for ($y = 0; $y < count($result1); $y++) {
        		(string) $a = $result1[$y]['Field'];
        		//var_dump($a);
				echo "<td>".$value[$a]."</td>";
			}
			/*echo "<pre>";
	          var_dump($value);
	          echo "</pre>";*/
	         echo "</tr>";
        }
    ?>
    
  </table>