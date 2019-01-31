<?php

	class Categories
	{
		//вывод всех категорий
		public function getCategories() {
			global $mysqli;
			$query = mysqli_query($mysqli, "SELECT * FROM `categories`");
			$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
			return $result;
		}
		//формирование массива, удобного для обработки подуровней каталога
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
		//поиск товара в таблице
		public function getIdParent($parent_id) {
			global $mysqli;
		    $q = "SELECT * FROM `categories` WHERE `parent_id` = '$parent_id'";
		    $query = mysqli_query($mysqli, $q);
		    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
		    return $result; 
		}
		//построение многоуровневого каталога товаров
		public function outTree($parent_id = 0, $level = 0) {
		   global $category_arr;
		    if ($level != 0) {
		        $level_up = $level-1;
		    } else {
		        $level_up = 0;
		    }
		    if (isset($category_arr[$parent_id])) { 
		        if (isset($category_arr[$parent_id])) { 
			        echo '<ul>';
			        foreach ($category_arr[$parent_id] as $value) {
		           		echo "<li><a href='index.php?dispatch=products&idCategory=". $value["category_id"]."'>". $value["name"]."</a>"; 
		            	$level = $level + 1; 
		            	$this->outTree($value["category_id"], $level); 
		            	echo "</li>";
		            	$level = $level - 1; 		        
		        	} 
		        	echo "</ul>";
	   			}  
			}     
		} 

		//построение многоуровневого каталога товаров с товаром
		public function outTreeProducts($parent_id = 0, $level = 0) {
		   global $category_arr;
		    if ($level != 0) {
		        $level_up = $level-1;
		    } else {
		        $level_up = 0;
		    }
		    if (isset($category_arr[$parent_id])) { 
			        echo '<ul>';
			        
			        foreach ($category_arr[$parent_id] as $value) {
		           		echo "<li><a href='index.php?dispatch=products&idCategory=". $value["category_id"]."'>". $value["name"]."</a>"; 
		           		if ($this->getIssetParent($value["category_id"]) == 0){
		           			echo " = ".$this->getIssetParent($value["category_id"]);
		           			$this->getIdParent($value["category_id"]);
		           		}
		            	$level = $level + 1; 
		            	$this->outTreeProducts($value["category_id"], $level); 
		            	echo "</li>";
		            	$level = $level - 1; 		        
		        	} 
		        	echo "</ul>";
			}     
		} 
		//вывод кол-ва дочерних подуровней в каталоге
		public function getIssetParent($category_id) {
			global $mysqli;
		    $q = "SELECT count(*) FROM `categories` WHERE `parent_id` = '$category_id'";
		    $query = mysqli_query($mysqli, $q);
		    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
		    return $result[0]['count(*)'];
		}


			

	}

?>