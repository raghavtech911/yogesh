<?php
   
    require_once 'dbconnect.php';
      
  $p = $_SESSION['me'];

/*************************/

  
  $name = $email = $mobile =  $qualification = $appliedposition = $date = $gender = $marital_status = $company_name_row1 = $company_name_row2 = $company_name_row3 = $designation_row1 = $designation_row2 = $designation_row3 = $total_exp_row1 = $total_exp_row2 = $total_exp_row3 = $skills = $current_ctc = $expected_ctc = '';


  if(isset($_GET['tech_can_id'])){
    $val=$_GET['tech_can_id'];
    $_SESSION['val'] = $val;

   $result = mysqli_query($conn,"SELECT  a.*,
    b.tech_can_meta_value as training_period,
    c.tech_can_meta_value as bond,
    d.tech_can_meta_value as court_case,
    e.tech_can_meta_value as multishift,
    f.tech_can_meta_value as skills,
    g.tech_can_meta_value as current_ctc,
    h.tech_can_meta_value as expected_ctc,
    i.tech_can_meta_value as hear_about_company,
    j.tech_can_meta_value as total_experience,
    k.tech_can_meta_value as notice_period
    
    FROM tech_candidates as a,
    tech_candidate_meta as b,
    tech_candidate_meta as c,
    tech_candidate_meta as d,
    tech_candidate_meta as e,
    tech_candidate_meta as f,
    tech_candidate_meta as g,
    tech_candidate_meta as h,
    tech_candidate_meta as i,
    tech_candidate_meta as j,
    tech_candidate_meta as k

    where a.tech_can_id = $val AND
    a.tech_can_id = b.tech_can_id AND
    a.tech_can_id = c.tech_can_id AND
    a.tech_can_id = d.tech_can_id AND
    a.tech_can_id = e.tech_can_id AND
    a.tech_can_id = f.tech_can_id AND
    a.tech_can_id = g.tech_can_id AND
    a.tech_can_id = h.tech_can_id AND 
    a.tech_can_id = i.tech_can_id AND
    a.tech_can_id = j.tech_can_id AND
    a.tech_can_id = k.tech_can_id AND

    b.tech_can_meta_key = 'traing_period' AND
    c.tech_can_meta_key = 'bond' AND
    d.tech_can_meta_key = 'court_case' AND
    e.tech_can_meta_key = 'multishift' AND
    f.tech_can_meta_key = 'skills' AND
    g.tech_can_meta_key = 'current_ctc' AND
    h.tech_can_meta_key = 'expected_ctc' AND
    i.tech_can_meta_key = 'hear_about_company' AND
    j.tech_can_meta_key = 'total_experience' AND
    k.tech_can_meta_key = 'notice_period' GROUP BY tech_can_id ");

// $fullnamenew = $emailnew = $mobilenew = $gendernew = $qualificationnew = $appliedpositionnew = $marital_status_new = $datenew =  $skillsnew = $current_ctc_new = $expected_ctc_new = $hear_about_company_new = $training_period_new =  $bond_new = $court_case_new =  $multishift_new = $assign_new = $hr_comment_new = $tech_comment_new = $status_new ='';
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

              $fullnamenew = $row['tech_can_fullname'];
              $emailnew = $row['tech_can_email'];
              $mobilenew = $row['tech_can_mobile'];
              $gendernew = $row['tech_can_gender'];
              $qualificationnew = $row['tech_can_qualification'];
              $appliedpositionnew = $row['tech_can_appliedposition'];
              $marital_status_new = $row['tech_can_maritalstatus'];
              $datenew = $row['tech_can_dor'];
              $skillsnew = $row['skills'];
              $current_ctc_new = $row['current_ctc'];
              $expected_ctc_new = $row['expected_ctc'];
              $hear_about_company_new = $row['hear_about_company'];
              $training_period_new = $row['training_period'];
              $bond_new = $row['bond'];
              $court_case_new = $row['court_case'];
              $multishift_new = $row['multishift'];
              $assign_new = $row['tech_can_technical_assign'];
              $hr_comment_new = $row['tech_can_hr_comment'];
              $tech_comment_new = $row['tech_can_technical_comment'];
              $status_new = $row['tech_can_status'];
              $notice_period = $row['notice_period'];
    }
  }

    $notice_fetch = explode(',', $notice_period);

    if(isset($_POST['btn_update'])){

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

    if(isset($_POST["company_name_row"]) && is_array($_POST["company_name_row"])){
            $company_name_row1 = json_encode($_POST["company_name_row"]);
            //echo $j1;
            //print_r(json_decode($j1)) ;
    }

    if(isset($_POST["designation_row"]) && is_array($_POST["designation_row"])){
        $designation_row1 = json_encode($_POST["designation_row"]);
        //echo $j2;
        //print_r(json_decode($j2)) ;
    }

    if(isset($_POST["total_exp_row"]) && is_array($_POST["total_exp_row"])){
        $total_exp_row1 = json_encode($_POST["total_exp_row"]);
        //echo $j3;
        //print_r(json_decode($j3)) ;
    }

    if(isset($_POST["name_of_institute"]) && is_array($_POST["name_of_institute"])){
        $name_of_institute = json_encode($_POST["name_of_institute"]);
        //echo $j1;
        //print_r(json_decode($j1)) ;
    }

    if(isset($_POST["training_on_technology"]) && is_array($_POST["training_on_technology"])){
        $training_on_technology = json_encode($_POST["training_on_technology"]);
        //echo $j2;
        //print_r(json_decode($j2)) ;
    }

    if(isset($_POST["pass_out_year"]) && is_array($_POST["pass_out_year"])){
        $pass_out_year = json_encode($_POST["pass_out_year"]);
        //echo $j3;
        //print_r(json_decode($j3)) ;
    }

    $skills = trim($_POST['skills']);
    $skills = strip_tags($skills);
    $skills = htmlspecialchars($skills);

    $current_ctc = trim($_POST['current_ctc']);
    $current_ctc = strip_tags($current_ctc);
    $current_ctc = htmlspecialchars($current_ctc);

    $expected_ctc = trim($_POST['expected_ctc']);
    $expected_ctc = strip_tags($expected_ctc);
    $expected_ctc = htmlspecialchars($expected_ctc);

    $technical_assign = htmlspecialchars($_POST['technical_hr_assign']); 
    $hr_update_assign = htmlspecialchars($_POST['hr_update_comment']);   

    $tech_can_training = htmlspecialchars($_POST['tech_can_training']);
    $tech_can_bond = htmlspecialchars($_POST['tech_can_bond']);
    $tech_can_court = htmlspecialchars($_POST['tech_can_court']);
    $tech_can_multishifts = htmlspecialchars($_POST['tech_can_multishifts']);
    $tech_can_skills = htmlspecialchars($_POST['tech_can_skills']);
    $tech_can_currentctc = htmlspecialchars($_POST['tech_can_currentctc']);
    $tech_can_expectedctc = htmlspecialchars($_POST['tech_can_expectedctc']);
    $tech_can_hearabout = htmlspecialchars($_POST['tech_can_hearabout']);

       
    $total_experience = $total_exp_row1;
    $notice_period = $_POST['day_month']. ','.$_POST['notice_period'];
  
        $update =" UPDATE tech_candidates SET tech_can_fullname = '$name', tech_can_email = '$email',tech_can_mobile = '$mobile',tech_can_gender = '$gender',tech_can_qualification = '$qualification',tech_can_appliedposition = '$appliedposition',tech_can_maritalstatus = '$marital_status',tech_can_dor = '$date',tech_can_technical_assign = '$technical_assign',tech_can_hr_comment = '$hr_update_assign' WHERE tech_can_id = '$val' ";

        $res = mysqli_query($conn,$update);
              if($res > 0){
              echo "Added";
              //header('location: hrindex.php');
              }

      $metakeyval = array("total_experience"=>"$total_experience", "traing_period"=>"$tech_can_training", "bond"=>"$tech_can_bond", "court_case"=>"$tech_can_court", "multishift" =>"$tech_can_multishifts", "skills"=>"$tech_can_skills", "current_ctc"=>"$tech_can_currentctc", "expected_ctc"=>"$tech_can_expectedctc", "hear_about_company"=>"$tech_can_hearabout", "notice_period"=>"$notice_period");

      foreach ($metakeyval as $key => $value) {
          
        $sql_update = "UPDATE tech_candidate_meta SET tech_can_meta_value = '$value' WHERE tech_can_meta_key = '$key' AND tech_can_id = '$val' ";

           $res_meta_update = mysqli_query($conn,$sql_update);
              if($res_meta_update > 0){
              echo "Added";
              }
      }

/*update experience*/

      $sqlexp=mysqli_query($conn,"SELECT tech_can_exp_id FROM tech_can_exp WHERE tech_can_id ='$val'");
      while ($row = mysqli_fetch_array($sqlexp, MYSQLI_ASSOC)) {
      $tech_exp_id[] = $row['tech_can_exp_id'];
      }
    if(isset($company_name_row1) && isset($designation_row1) && isset($total_experience)){

            $up_exp_row1 = "UPDATE tech_can_exp 
            SET        
            tech_can_exp_nameofcompany = '$company_name_row1',
            tech_can_exp_designation = '$designation_row1',
            tech_can_exp_years = '$total_experience' WHERE tech_can_exp_id = '$tech_exp_id[0]' AND tech_can_id = '$val' ";

            $res_row1 = mysqli_query($conn,$up_exp_row1);
              if($res_row1 > 0){
              echo "Added";
              }

    }

      //header('location: form_basic.php');
}
    
?>