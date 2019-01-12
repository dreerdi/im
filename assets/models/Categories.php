<?php

	class Categories
	{
		
		public function getCategories() {
			global $mysqli;
			$query = mysqli_query($mysqli, "SELECT * FROM `categories`");
			$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
			return $result;
		}

		public function getMenuCategories() {
			global $mysqli;
		    $q = "SELECT * FROM `categories`";
		    $query = mysqli_query($mysqli, $q);
		    $result = array(); 
		    while ($row = mysqli_fetch_assoc($query)) { 
		        $result[$row["parent_id"]][] = $row; 
		    } 
		    return $result; 
		}  

		public function outTree($parent_id = 0, $level = 0) {
		   global $category_arr;
		    if ($level != 0) {
		        $level_up = $level-1;
		    } else {
		        $level_up = 0;
		    }
		    if (isset($category_arr[$parent_id])) { 
		        if (isset($category_arr[$parent_id])) { 
			        echo '<ul class="menuCategories menuCategories'.$level_up.$level.'">';
			        foreach ($category_arr[$parent_id] as $value) {
		           		echo "<li>". $value["name"]."</li>"; 
		            	$level = $level + 1; 
		            	$this->outTree($value["category_id"], $level); 
		            	$level = $level - 1; 		        
		        	} 
		        	echo "</ul>";
	   			}  
			} 
    
		} 


			

	}

?>