<?php 
  session_start();
  
  $role = "";
  if(isset($_SESSION['user'])){
  	$role = $_SESSION['user']['tech_users_role'];
  }else{
    header("Location: index.php");
    exit;
  }
?>
<?php include '../../common/header.php'; ?>
<?php 
	if($role == 0){
		include 'users/basic/list.php'; 
	}else{
		header("Location: index.php");
    	exit;	
	}
?>
<?php include '../../common/footer.php'; ?>
