<?php 
  session_start();
  
  $role = "";
  if(isset($_SESSION['user'])){
  	$role = $_SESSION['user']['tech_users_role'];
  }else{
    header("Location: index.php");
    exit;
  }
  include 'core.class.php';
  $core = new CanCore();
?>
<?php include 'common/header.php'; ?>
<?php 
	if($role == 0){
		include 'users/basic/home.php'; 
	}else if($role == 1){
    include 'users/hr/home.php'; 
  }else if($role == 2){
    include 'users/tech/home.php'; 
  }else{
		header("Location: index.php");
    	exit;	
	}
?>
<?php include 'common/footer.php'; ?>
