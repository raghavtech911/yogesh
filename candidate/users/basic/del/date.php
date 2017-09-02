<?php
    session_start();
    require_once 'dbconnect.php';
    session_start();
      if( !isset($_SESSION['userhr']) ){
     header("Location: newindex.php");
     }
    

    /*************************/
$td = '';
  if(isset($_GET['tech_can_id'])){
    $val=$_GET['tech_can_id'];

    $result1 = mysqli_query($conn,"SELECT * FROM tech_candidates where tech_can_id = '$val'  ");

	while ($row = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
     ;
   	
   	$tid = $row['tech_can_fullname'];

   	echo $tid;

}
              $sqli = "UPDATE tech_candidates SET tech_can_status = 1 WHERE tech_can_id = '$val' ";
          
              $res = mysqli_query($conn,$sqli);
              if($res > 0){

              echo "Added";
               
              header('location: hrindex.php' );
              }
        
              else{
              echo "No Data";
}

//   	header('Location: hrindex.php');

}
?>

