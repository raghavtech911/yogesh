<?php
    session_start();
    if(isset($_SESSION['user'])){
      $role = $_SESSION['user']['tech_users_role'];
    }else{
      header("Location: index.php");
      exit;
    }

    include 'core.class.php';
    $can = new CanCore();

    $error = false;
    $emailError = '';
    
    // clean user inputs to prevent sql injections
    $name = trim($_POST['name']);
    $name = strip_tags($name);
    $name = htmlspecialchars($name);

    $email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    $mobile = trim($_POST['mobile']);
    $mobile = strip_tags($mobile);
    $mobile = htmlspecialchars($mobile);

    $qualification = trim($_POST['qualification']);
    $qualification = strip_tags($qualification);
    $qualification = htmlspecialchars($qualification);

    $appliedposition = trim($_POST['appliedposition']);
    $appliedposition = strip_tags($appliedposition);
    $appliedposition = htmlspecialchars($appliedposition);

    $date = trim($_POST['date']);
    $date = strip_tags($date);
    $date = htmlspecialchars($date);

    $gender = trim($_POST['gender']);
    $gender = strip_tags($gender);
    $gender = htmlspecialchars($gender);

    $marital_status = trim($_POST['marital_status']);
    $marital_status = strip_tags($marital_status);
    $marital_status = htmlspecialchars($marital_status);

    $exp_fields = $_POST['exp_fields'];
  
    $fresher_fields = $_POST['fresher_fields'];

    if(empty($fresher_fields)){
        $fresher_fields = '[{"institute":"","technology":"","passout":""}]';
    }

    if(empty($exp_fields)){
        $exp_fields = '[{"company":"","desg":"","ym":""}]';
    }

    $technical_assign = 3;
    $technical_comment = 'No comments!';
    $hr_comment = 'No comments!';
    $can_status = 0;
    
    $notice_period = $_POST['day_month']. ','.$_POST['notice_period'];

    $tech_can_training = htmlspecialchars($_POST['tech_can_training']);
    $tech_can_bond = htmlspecialchars($_POST['tech_can_bond']);
    $tech_can_court = htmlspecialchars($_POST['tech_can_court']);
    $tech_can_multishifts = htmlspecialchars($_POST['tech_can_multishifts']);
    $tech_can_skills = htmlspecialchars($_POST['tech_can_skills']);
    $tech_can_currentctc = htmlspecialchars($_POST['tech_can_currentctc']);
    $tech_can_expectedctc = htmlspecialchars($_POST['tech_can_expectedctc']);
    $tech_can_hearabout = htmlspecialchars($_POST['tech_can_hearabout']);
        
    /*check record in db*/
   
    $query = "SELECT tech_can_email FROM tech_candidates WHERE tech_can_email ='$email' ";
    $check = mysqli_query($can->connection, $query);
    $num_rows = mysqli_num_rows($check);
  
    if($num_rows > 0){
        $error = true;
        $emailError = "Email already Registered";
    }
       
    /*check record in db*/

    else if (!empty($name) && !empty($email) && !empty($mobile) && !empty($qualification) && !empty($appliedposition) && !empty($date) 
            && !empty($gender) && !empty($marital_status)){
          
          $query1 = "INSERT INTO  tech_candidates( 
                                  tech_can_fullname,
                                  tech_can_email,
                                  tech_can_mobile,
                                  tech_can_gender,
                                  tech_can_qualification,
                                  tech_can_appliedposition,
                                  tech_can_maritalstatus,
                                  tech_can_dor,
                                  tech_can_technical_assign,
                                  tech_can_technical_comment,
                                  tech_can_hr_comment,
                                  tech_can_status)
                          VALUES  ('$name','$email','$mobile','$gender',
                                  '$qualification','$appliedposition',
                                  '$marital_status','$date','$technical_assign',
                                  '$technical_comment','$hr_comment','$can_status' ) ";
          
          $res1=mysqli_query($can->connection, $query1);
          
          $lastuser = mysqli_insert_id($can->connection);
          
          $query2 = "INSERT INTO  tech_candidate_meta(
                                  tech_can_id,
                                  tech_can_meta_key,
                                  tech_can_meta_value)
                    
                          VALUES  ('$lastuser','traing_period','$tech_can_training'),
                                  ('$lastuser','bond','$tech_can_bond'),
                                  ('$lastuser','court_case','$tech_can_court'),
                                  ('$lastuser','multishift','$tech_can_multishifts'),
                                  ('$lastuser','skills','$tech_can_skills'),
                                  ('$lastuser','current_ctc','$tech_can_currentctc'),
                                  ('$lastuser','expected_ctc','$tech_can_expectedctc'),
                                  ('$lastuser','hear_about_company','$tech_can_hearabout'),
                                  ('$lastuser','notice_period','$notice_period'),
                                  ('$lastuser','Experience','$exp_fields'),
                                  ('$lastuser','Fresher','$fresher_fields')
                                  ";
          $res2=mysqli_query($can->connection, $query2);

          echo '<script type="text/javascript">';
          echo 'alert("Data saved successfully!"); window.location = "../../dashboard.php";';
          echo '</script>';
                 
    } else{
          header('location: ../../dashboard.php');
          echo "unable to add data!";
    }

?>