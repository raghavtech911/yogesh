<?php
  session_start();
  if(isset($_SESSION['user'])){
    $role = $_SESSION['user']['tech_users_role'];
  }else{
    header("Location: index.php");
    exit;
  }

  if(isset($_GET['tech_can_id'])){
    $val=$_GET['tech_can_id'];
    include '../../core.class.php';
    $core = new CanCore();
    $status = $core->rejectUser($val);
    if($status){
      echo '<script>alert("User Rejected");</script>';
      header('location: ../../dashboard.php' );
    }else{
      echo '<script>alert("Failed");</script>';
    }
  }
?>

