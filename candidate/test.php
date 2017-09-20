<?php

	include 'core.class.php';
    $core = new CanCore();
	if(isset($_POST['test'])){   
	$test =$_POST['test'];
	$query = "SELECT * FROM tech_settings_meta WHERE tech_settings_meta_key = 'graduation'";
        $result = mysqli_query($this->connection, $query);
		$count = mysqli_num_rows($result);

		if($graduation_list){
			return $graduation_list;
		}else{
			return false;
		}
	}
?>