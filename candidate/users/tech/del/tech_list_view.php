<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    require_once 'dbconnect.php';
   
    if( !isset($_SESSION['user']) ){
      header("Location: newindex.php");
    }
 

/*************************/

  if(isset($_GET['tech_can_id'])){
    $val=$_GET['tech_can_id'];

    //$result = mysqli_query($conn,"SELECT * FROM tech_candidates where tech_can_id = '$val' ");
   $result = mysqli_query($conn,"
    SELECT  a.*,
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

              //if the update button is clicked
              //if(isset($_POST['up_btn-sunmit'])){
               // $up_name =  htmlspecialchars($_POST['up_name']);
               // $up_email = htmlspecialchars($_POST['up_email']);
               // $up_mobile = htmlspecialchars($_POST['up_mobile']);
              //  $up_gender = htmlspecialchars($_POST['up_gender']);
              //  $up_date = htmlspecialchars($_POST['up_date']);
                //$up_appliedposition = htmlspecialchars($_POST['up_appliedposition']);
                //$up_qualification = htmlspecialchars($_POST['up_qualification']);
                //$up_marital_status = htmlspecialchars($_POST['up_marital_status']);
              
              /*
              $sqli = "UPDATE tech_candidates SET tech_can_fullname = '$up_name',tech_can_email = '$up_email',tech_can_mobile = '$up_mobile', tech_can_gender = '$up_gender' WHERE tech_can_id = '$val' ";
          
              $res = mysqli_query($conn,$sqli);
              if($res > 0){
              echo "Added";
              header('location: userlist.php');
              }
        
              else{
              echo "No Data"; 
      }*/  
          
      //}

    }
    $notice_fetch = explode(',', $notice_period);

    if(isset($_POST['btn_techassign_update'])){

    $techview_update_comment = htmlspecialchars($_POST['techview_update_comment']); 
    


        $update =" UPDATE tech_candidates SET tech_can_technical_comment = '$techview_update_comment' WHERE tech_can_id = '$val' ";

            $res = mysqli_query($conn,$update);
            if($res > 0){
            echo "Added";
            header('location: techindex.php');
            } 
  }

}
    
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $_SESSION['user']; ?></title>
<!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  /> -->
<!-- <link rel="stylesheet" href="stylee.css" type="text/css" /> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!-- <script src='jquery.autosize.js'></script> -->

<link rel="stylesheet" type="text/css" href="stylee.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker-standalone.css" />
<script src="https://cdn.jsdelivr.net/momentjs/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

<script src="validate.js"></script> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/autosize.js/4.0.0/autosize.min.js"></script>
<script type="text/javascript">
  $(function(){
  $('#techview_update_comment').autosize();
  });
</script>

<script type="text/javascript">
      $("input[name='tech_can_hearabout']").click(function () {
      $('#show-me').css('display', ($(this).val() === 'other') ? 'block':'none');
      });


      //active nav link select start
        
      $(".nav li ").on("click", function() {
      $(".nav li ").removeClass("active");
      $(this).addClass("active");
      });  
      //active nav link select end
</script>
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#view_details">View Details</a></li>
            <li><a href="techindex.php">Home</a></li>
          </ul>
          <!--Tab menu
          <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
          <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
          </ul>
          -->
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?php echo $_SESSION['user']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
  
    </nav> 

	<div id="wrapper">

	<div class="container">
      <!--Tab start-->
      <div class="tab-content">
          <div id="view_details" class="tab-pane fade in active">
          <form method="post" action="" id="basic_form">
          
          <div class="col-lg-12">
            <hr />
          </div>
<!--Start Details here-->
          <div class="page-header"><!--class = page-header-->
            <h3>Registered Details for User: <strong><?php echo $fullnamenew;?></strong></h3>
          </div>
        
        <div class="row">
        <div class="col-lg-12">
          <div class="form-group">

              <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
              <input type="text" name="name" class="form-control" placeholder="Enter Name" maxlength="50" disabled value="<?php echo $fullnamenew;?>"  />
                </div>
                <!--<span class="text-danger"><?php //echo $nameError; ?></span>-->
            </div>
            
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
              <input type="email" name="email" class="form-control" placeholder="Enter Your Email" maxlength="40"     disabled value="<?php echo $emailnew;?>" /> 
                </div>
                <!--<span class="text-danger"><?php //echo $emailError; ?></span>-->
            </div>
            
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
              <input type="text" name="mobile" class="form-control" placeholder="Enter Your Mobile" maxlength="10" disabled value="<?php echo $mobilenew;?>" />
                </div>
                <!--<span class="text-danger"><?php //echo $emailError; ?></span>-->
            </div>

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-education"></span></span>
              <input type="text" name="qualification" class="form-control" placeholder="Educational Qualification" maxlength="50" disabled value="<?php echo $qualificationnew; ?>" /> 
                </div>
                <!--<span class="text-danger"><?php //echo $nameError; ?></span>-->
            </div>

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-check"></span></span>
              <input type="text" name="appliedposition" class="form-control" placeholder="Apply For Position" maxlength="50" disabled value="<?php echo $appliedpositionnew; ?>" /> 
                </div>
                <!--<span class="text-danger"><?php //echo $nameError; ?></span>-->
            </div>

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
              <input type="text" name="date" class="form-control" placeholder="Enter Date" disabled value="<?php echo $datenew ?>"/> 
                </div>
                <!--<span class="text-danger"><?php //echo $nameError; ?></span>-->
            </div>

            <div class="col-lg-6 form-group">
            <label class="col-lg-2 control-label" for="Gender">Gender</label>
            <div class="col-md-9">
                <label class="radio-inline">
                    <input checked="checked" data-val="true" data-val-required="Gender is required." id="gender" name="gender" type="radio" disabled value="male" <?php echo ($gendernew == 'male')? 'checked' : '' ?> >
                    Male
                </label>
                <label class="radio-inline">
                    <input id="gender" name="gender" type="radio" disabled value="female" <?php echo ($gendernew == 'female')? 'checked' : '' ?> >
                    Female
                </label>
            </div>
            </div>

            <div class="col-lg-6 form-group">
            <label class="col-lg-3 control-label" for="marital_status">Marital Status</label>
            <div class="col-md-9">
                <label class="radio-inline">
                    <input checked="checked" data-val="true" data-val-required="Marital-Status is required." id="Marital-Status" name="marital_status" type="radio" disabled value="married" <?php echo ($marital_status_new == 'married')? 'checked' : '' ?> >
                    Married
                </label>
                <label class="radio-inline">
                    <input id="Marital-Status" name="marital_status" type="radio" disabled value="unmarried" <?php echo ($marital_status_new == 'unmarried')? 'checked' : '' ?> >
                    Unmarried
                </label>

            </div>
            </div>
<!--End Details here-->
            <div class="col-lg-12">
              <hr />
            </div>
<!--Start  Experience-->
            <div class="page-header">
            <h3>Experience</h3>
            </div>

            <?php
            if(isset($_GET['tech_can_id'])){
              $v=$_GET['tech_can_id'];

              $expsql = "SELECT tech_can_exp_nameofcompany , tech_can_exp_designation , tech_can_exp_years FROM tech_can_exp where tech_can_exp.tech_can_id = '$v' ";

              $expsql_result = mysqli_query($conn, $expsql);
             while ($row = mysqli_fetch_array($expsql_result, MYSQLI_ASSOC)) {
              $i = 0; $j = 0; $k = 0;
              $copmpany_ft[$i] = $row['tech_can_exp_nameofcompany'];
              $designation_ft[$j] = $row['tech_can_exp_designation'];
              $years_ft[$k] = $row['tech_can_exp_years'];

         
              //$i++; $j++; $k++;
         ?>
               
            <!--Experience input start-->
            <div class="col-lg-12 form-group form-inline text-center">
              <div class="col-lg-3 input-group">
              <input type="text" name="company_name_row1" class="form-control" placeholder="Name of Company" maxlength="50" disabled value="<?php echo $copmpany_ft[$i]; ?>" /> <!--value="<?php //echo $name ?>"-->
                </div>
                <!--<span class="text-danger"><?php //echo $nameError; ?></span>-->

                <div class="col-lg-3 input-group">
              <input type="text" name="designation_row1" class="form-control" placeholder="Designation" maxlength="50"  disabled value="<?php echo $designation_ft[$j]; ?>" /> <!--value="<?php //echo $name ?>"-->
                </div>
                <!--<span class="text-danger"><?php //echo $nameError; ?></span>-->

                <div class="col-lg-3 input-group">
              <input type="number" name="total_exp_row1" class="form-control" placeholder="Total Experience ( In Years)" min="0"  max="100" disabled value="<?php echo $years_ft[$k]; ?>" /> <!--value="<?php //echo $total ?>"-->
                </div>
                <!--<span class="text-danger"><?php //echo $nameError; ?></span>-->
            </div>

             <?php 
          }
            } 

            ;?>
            
            <!--Expected period start-->
                  <div class="form-group form-inline col-md-12 text-center">
                    <div class="input-group col-md-1">
                      <label class="input-group form-group form-inline" for="minimum-month">Notice period</label>  
                    </div>
                    
                    <div class="input-group col-md-2">
                      <input type="text" name="day_month" id="day_month" class="form-control" placeholder="day/month" maxlength="50" value="<?php echo $notice_fetch[0]; ?>" disabled />
                    </div>
                    

                  <div class="input-group col-md-1.5">
                    <select class="input-group form-control" id="notice_period" name="notice_period" disabled>
                      <option value="day" <?php if( $notice_fetch[1] == 'day' ) { echo "selected='selected'"; }?> >Day</option>
                      <option value="month" <?php if( $notice_fetch[1] == 'month' ) { echo "selected='selected'"; }?> >Month</option>
                    </select>  
                  </div>  
                  </div>  
            <!--Expected period end-->
            
<!--End Experience-->

              
            <div class="col-lg-12">
              <hr />
            </div>
<!--Start general information-->
            <div class="page-header">
            <h3>General Information</h3>
            </div>

            <!--Row 1 start-->
            <div class="form-group form-inline text-center">
              <div class="input-group col-md-2">
                <label for="tech_can_training">Training for 1-3 months</label>
                <select class="form-control" id="tech_can_training" name="tech_can_training" disabled>
                <option value="yes" <?php if( $training_period_new == 'yes' ) { echo "selected='selected'"; }?> >Yes</option>
                <option value="no" <?php if( $training_period_new == 'no' ) { echo "selected='selected'"; }?> >No</option>
                </select>
              </div>

              <div class="input-group col-md-2">
                <label for="tech_can_bond">Minimum period of working</label>
                <select class="form-control" id="tech_can_bond" name="tech_can_bond" disabled>
                <option value="yes" <?php if( $bond_new == 'yes' ) { echo "selected='selected'"; }?> >Yes</option>
                <option value="no" <?php if( $bond_new == 'no' ) { echo "selected='selected'"; }?> >No</option>
                </select>
              </div>

              <div class="input-group col-md-2">
                <label for="tech_can_court">Court of law</label>
                <select class="form-control" id="tech_can_court" name="tech_can_court" disabled>
                <option value="yes" <?php if( $court_case_new == 'yes' ) { echo "selected='selected'"; }?> >Yes</option>
                <option value="no" <?php if( $court_case_new == 'no' ) { echo "selected='selected'"; }?> >No</option>
                </select>
              </div>

              <div class="input-group col-md-2">
                <label for="tech_can_multishifts">Multi-shift</label>
                <select class="form-control" id="tech_can_multishifts" name="tech_can_multishifts" disabled>
                <option value="yes" <?php if( $multishift_new == 'yes' ) { echo "selected='selected'"; }?> >Yes</option>
                <option value="no" <?php if( $multishift_new == 'no' ) { echo "selected='selected'"; }?> >No</option>
                </select>
              </div>  
            </div>
            <!--Row 1 End-->

            <!--Row 2 Start-->
            <div class="form-group form-inline text-center">
              <div class="input-group col-md-3">
                <input type="text" name="tech_can_skills" class="form-control" placeholder="skills" maxlength="50"    disabled value="<?php echo $skillsnew; ?>" />
              </div>

              <div class="input-group col-md-3">
                <input type="number" min="0" max="999999999" name="tech_can_currentctc" class="form-control" placeholder="Current CTC" maxlength="50" disabled value="<?php echo $current_ctc_new ; ?>" />
              </div>

              <div class="input-group col-md-3">
                <input type="number" min="0" max="999999999" name="tech_can_expectedctc" class="form-control" placeholder="Expected CTC" maxlength="50" disabled value="<?php echo $expected_ctc_new ; ?>" />
              </div>
            </div>
            <!--Row 2 End-->

            <!--Row 3 Start--><!--Start where did you hear about us -->
            <div class="form-group form-inline text-center" >
            <label class="control-label" for="tech_can_hearabout">where did you hear about us?</label>
            <div>
                <label class="radio-inline">
                    <input checked="checked" data-val="true" data-val-required="Data required." id="tech_can_hearabout" name="tech_can_hearabout" type="radio" disabled value="friend" 
                    <?php echo ($hear_about_company_new == 'friend')? 'checked' : '' ?> >
                    Friend
                </label>
                <label class="radio-inline">
                    <input id="tech_can_hearabout" name="tech_can_hearabout" type="radio" disabled value="website" 
                    <?php echo ($hear_about_company_new == 'website')? 'checked' : '' ?> >
                    Website
                </label>
                <label class="radio-inline">
                    <input id="watch-me" name="tech_can_hearabout" type="radio" disabled value="other"
                     <?php echo ($hear_about_company_new == 'other')? 'checked' : '' ?>
                     >
                    Other
                </label>
            </div>
            </div>


               <!--TechAssign and hr comment start-->
                 <!--    <div class="form-group form-inline col-md-12 "> -->

                      <div class="form-group form-inline col-md-12 ">
                    <div class="input-group col-md-2">
                      <label class="input-group form-group form-inline" for="hr-comment">HR Comment</label>
                    </div>

                    <div class="input-group col-md-9">
                    <input type="text" name="hr_update_comment" class="form-control" placeholder="Hr Comment" maxlength="50"  disabled value="<?php echo $hr_comment_new; ?>" />
                    </div>
                    </div>

                      <div class="form-group form-inline col-md-12 ">
                    <div class="input-group col-md-2">
                      <label class="input-group form-group form-inline" for="tech-assign">Technical Assign</label>  
                    </div>
                    
                    <div class="input-group col-md-9">
                    <textarea class="form-control" name="techview_update_comment" id="techview_update_comment" rows="3" placeholder="Technical Comment" ><?php echo $tech_comment_new; ?> </textarea>
                    </div>

                    <div class="form-group col-md-1.3">
                      <button type="submit" class="btn btn-block btn-primary" name="btn_techassign_update">Update</button>
                    </div>
                    
                    </div>
                    <!-- </div> -->
                    <!--TechAssign and hr comment end-->
              <!--TechAssign and hr comment start--
                    <div class="form-group form-inline col-md-12 ">

                    <div class="input-group col-md-2">
                      <label class="input-group form-group form-inline" for="minimum-month">Technical Comment</label>  
                    </div>
                    <div class="input-group col-md-9">
                    <input type="text" name="hr_update_comment" class="form-control" placeholder="Technical Comment" maxlength="50"  disabled value="<?php echo $tech_comment_new; ?>" />
                    </div>
                   </div>
                    
                    <div class="form-group form-inline col-md-12 ">
                    <div class="input-group col-md-2">
                      <label class="input-group form-group form-inline" for="minimum-month">HR Comment</label>
                    </div>

                    <div class="input-group col-md-9">
                    <input type="text" name="hr_update_comment" class="form-control" placeholder="Hr Comment" maxlength="50"  disabled value="<?php echo $hr_comment_new; ?>" />
                    </div>
                    </div>
                    <!--TechAssign and hr comment end-->


            <!--
              <div class="input-group col-lg-4 col-lg-offset-4 centered" id='show-me' style='display:none'>
                <input type="text" name="tech_can_hearabout" class="form-control" placeholder="Other" maxlength="50"/>
              </div>
            </div>
            </div>  -->

            <!--dynamic text box
            <form id='form-id'>
              <input id='watch-me' name='hear_about_company' type='radio' value="other" />Other
              <br />
                  <input name='test' type='radio' value="b" />
              <br />
              <input name='test' type='radio' value="c" />
            </form>
            <div class="input-group text-center col-lg-4" id='show-me' style='display:none'>
                <input type="text" name="other" class="form-control" placeholder="Other" maxlength="50"/>
            </div>
            dynamic text box-->

            <!--
              <div class="input-group text-center">
                <input type="text" name="other" class="form-control" placeholder="Other" maxlength="50"/>
              </div>
            </div>

            <div class="form-group form-inline text-center">
              <label class="col-md-12 control-label" for="multi-shift">where did you hear about us?</label>
              <div class="input-group col-md-10">
                <label class="radio-inline">
                  <input type="radio" value="friend">Friend
                </label>
                  
                <label class="radio-inline">
                  <input type="radio" value="website">Website
                </label>
                
                <label class="radio-inline">
                  <input type="radio" value="other">Other
                </label>
              </div>
              start other text field--><!--
              <div class="input-group col-md-4">
                <input type="text" name="other" class="form-control" placeholder="Other" maxlength="50"/>
              </div>
              <end other text field-->
            </div>
            <!--Row 3 End--><!--End where did you hear about us-->
<!--End general information-->           
            <div class="form-group">
              <hr />
            </div>

            
            
            <div class="col-lg-12">
              <hr />
            </div>

            <!-- <div class="form-group">
              <a href="tech_list_update.php?tech_can_id=<?php echo $val;?>"><button type="button" class="btn btn-block btn-primary" name="btn-sunmit">Want to edit details?</button></a>
            </div> -->
      
      </div>
      </form>
      </div>
      <div id="home" class="tab-pane fade">
          
          

          </div>
      
        </div>

      <!--Tab end-->
    
    </div>
    </div>
    <script type="text/javascript">
      $("input[name='tech_can_hearabout']").click(function () {
      $('#show-me').css('display', ($(this).val() === 'other') ? 'block':'none');
      });


      //active nav link select start
        
      $(".nav li ").on("click", function() {
      $(".nav li ").removeClass("active");
      $(this).addClass("active");
      });  
      //active nav link select end
    </script>
</body>
</html>
