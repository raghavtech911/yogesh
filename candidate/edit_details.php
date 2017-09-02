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
		include 'users/basic/basic__update.php'; 
	}else if($role == 1){ ?>
    <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
            <?php include 'common/left-menu.php'; ?>          
        </div>

        <?php include 'common/top-bar.php'; ?>         

        <!-- page content -->
        <?php include 'users/hr/edit_details.php'; ?>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            <!-- Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a> -->
          </div>
          <div class="clearfix"></div>
        </footer> 
        <!-- /footer content -->
      </div>
    </div> 
    <?php
  }else if($role == 2){ 
    include 'users/tech/home.php';
  }else{
		header("Location: index.php");
    	exit;	
	}
?>
<?php include 'common/footer.php'; ?>
