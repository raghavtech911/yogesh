<div class="right_col" role="main">
  <?php
    if(isset($_GET['tech_can_id'])){
      $val=$_GET['tech_can_id'];

      $row = $core->basic_view_data($val);
      if(!$row){
        printf("Error: %s\n", mysqli_error($core->connection));
        exit();
      }

      $result1 = $core->technical_assign_fetch();
      // if(!$result1){
      //   printf("Error: %s\n", mysqli_error($core->connection));
      //   exit();
      // }

      $tech_assign_name = $core->technical_assigned_name($val);
      // if(!$tech_assign_name){
      //   printf("Error: %s\n", mysqli_error($core->connection));
      //   exit();
      // }

      $exparr =   json_decode($row['exp'],true) ;
      $fresherarr = json_decode($row['fresher'],true);

      $explen = count(json_decode($row['exp']));
      $fresherlen = count(json_decode($row['fresher']));

      $ex = ''; $fr = '';
      foreach ($row as $key => $value) {
        if($key=='exp'){ 
          if($explen > 0 && !empty($exparr[0]['company'])){
            $ex = $key;
          }
        }
        if($key=='fresher'){ 
          if($fresherlen > 0 && !empty($fresherarr[0]['institute'])){
            $fr = $key;
          }
        }
      }
    
      if(isset($_POST['btn_assign_update'])){

        if(isset($_POST['user'])){
          $status = $core->updateUserData($_POST['user'],$val);
          if($status){
            echo "<script>alert('Data Updated'); document.location='dashboard.php'</script>";
          }else{
            echo '<script>alert("Updated Failed");</script>';
          
          }
        }
      }

      $post = $core->position_view_data();
      $post = json_decode($post,true);
      $poslength = count($post);
     
      $graduation_list = $core->graduation_List();
      $graduation_list_length = count($graduation_list);
    }
  ?>
 
  <div class="container col-lg-9">
    <div id="Add-New">
      <form method="post" action="" id="basic_form"> 
        <div class="row">
          <!--Container main col-4 -->
          <!--Start Add Details here-->
          <div class="col-lg-4">
            <div class="">
              <h3 class="title-head">Add Details Here</h3>
            </div>
                  
            <div class="">
              <div class="form-group col-lg-4 exp-row">
                <div class="input-group ">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                  <input type="text" name="user[name]" id="name" class="form-control" placeholder="Enter Name" value="<?php echo $row['tech_can_fullname']; ?>" pattern="[a-zA-Z ]{2,}" title="Alphabets only! Please enter more than two letters" required/>
                </div>
              </div>
              
              <div class="form-group col-lg-4 exp-row">
                <div class="input-group ">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                  <input type="email" name="user[email]" id="email" class="form-control" placeholder="Enter Your Email" onkeyup="checkemail();" maxlength="40" required value="<?php echo $row['tech_can_email'];?>" />
                </div>
                <small id="email_status" class="text-danger"></small>
                <!-- <span class="text-danger"><?php echo $emailError; ?></span> -->
              </div>
            </div>
              
            <div class="">
              <div class="form-group col-lg-4 exp-row">
                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                  <input type="text" name="user[mobile]" id="mobile" class="form-control" placeholder="Enter Your Mobile" pattern="[+][9][1][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" maxlength="13" title="Please enter 10 digit phone number! example: 9876543210" required value="<?php echo $row['tech_can_mobile'];?>" onkeypress="return event.charCode >= 46 && event.charCode <= 57 && event.charCode != 47 || event.charCode <= 9"/> 
                </div>
              </div>

              <div class="form-group col-lg-4 exp-row">
                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-education"></span></span>
                  <select class="form-control selectpicker" title="Qualification..." name="user[qualification]" id="qualification" required>
                    <?php 
                      foreach ($graduation_list as $key => $value) {
                        $len = count($value); ?>
                        <optgroup label="<?php echo $key;?>">
                        <?php
                        for($l=0; $l<$len; $l++){ ?>
                        <option value="<?php echo $value[$l];?>" <?php if( $row['tech_can_qualification'] == $value[$l] ) { echo "selected='selected'"; }?>><?php echo $value[$l];?></option>
                        <?php 
                        } 
                      }
                    ?>
                  </select>
                </div>
              </div>
            </div>

            <div class="">
              <div class="form-group col-lg-4 exp-row">
                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-check"></span></span>
                  <select class="form-control selectpicker" title="Apply for profile..." name="user[appliedposition]" id="appliedposition" required>
                    <?php for($k=0; $k<$poslength; $k++) { ?>
                      <option value="<?php echo $post[$k]['position'];?>" <?php if( $row['tech_can_appliedposition'] == $post[$k]['position'] ) { echo "selected='selected'"; }?> ><?php echo $post[$k]['position'];?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>

               <!-- <div class="form-group col-lg-4 exp-row">
                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                  <input type="date" name="dob" id="datepicker" class="form-control" placeholder="Date of birth"  /> 
                </div>
                <!<span class="text-danger"><?php //echo $dateError; ?></span>
              </div> --> 

              <div class="form-group dateContainer col-lg-4 exp-row">
                <div class="input-group date" id="datetimePicker">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                  <input type="text" name="user[date]" id="date" class="form-control" placeholder="YYYY-MM-DD h:m" value="<?php echo date("Y-m-d h:i:s");?>" /> 
                </div>
              </div>
            </div>

            <div class="">
              <div class="col-lg-4 form-group exp-row">
                <label class="col-lg-4 control-label label-pad" for="Gender">Gender</label>
                <div class="col-md-8">
                  <label class="radio-inline col-md-4 ">
                    <input id="gender" name="user[gender]" type="radio" value="male" <?php echo ($row['tech_can_gender'] == 'male')? 'checked' : '' ?> required>
                    Male
                  </label>
                  <label class="radio-inline col-md-4 pad-left-20">
                    <input id="gender" name="user[gender]" type="radio" value="female" <?php echo ($row['tech_can_gender'] == 'female')? 'checked' : '' ?> required>
                    Female
                  </label>
                </div>
              </div>

              <div class="col-lg-4 form-group exp-row">
                <label class="col-lg-4 control-label label-pad" for="marital_status">Marital Status</label>
                <div class="col-md-8">
                  <label class="radio-inline col-md-4">
                    <input id="marital_status" name="user[marital_status]" type="radio" value="unmarried" <?php echo ($row['tech_can_maritalstatus'] == 'unmarried') ? 'checked' : '' ?> required>
                    Unmarried
                  </label>
                  <label class="radio-inline col-md-4 pad-left-20">
                    <input id="marital_status" name="user[marital_status]" type="radio" value="married" <?php echo ($row['tech_can_maritalstatus'] == 'married') ? 'checked' : '' ?> required>
                    Married
                  </label>
                </div>
              </div>
            </div>
          </div>
          <!--End Add Details here-->
          <!--Container main col-4 -->
                            
          <!--Container main col-8 -->
          <div class="col-lg-8" id="">
            <!--Start Radio button for Experience and Fresher-->
            <div class="row">
              <h3>
              <span class="title-head">Experience</span>
              <input id="id_radio1" type="radio" name="user[exp_type]" value="exp" <?php echo ($ex == 'exp') ? 'checked' : '' ?> />
        
              <span class="title-head">Fresher</span>
              <input id="id_radio2" type="radio" name="user[exp_type]" value="fresher" <?php echo ($fr == 'fresher') ? 'checked' : '' ?> />
              </h3>
            </div>
            <!--End Radio button for Experience and Fresher-->

            <!--Start Experience input-->

            <div class="" id="div1" style="display: none;">
              <div class="row">
                <ul class="repeater_container ">
                  <?php for($i=0; $i<$explen; $i++) { ?>
                  <li class="repeater input-group exp-row">  
                    <div class="col-lg-4">
                        <div class="input-group exp-row">
                          <input type="text" class="form-control exp-text exp-company" id="exp-company" placeholder="Name of Company" maxlength="50" pattern="[a-zA-Z. ]{2,}" title="Alphabets only! Please enter more than two letters" value="<?php echo $exparr[$i]['company']; ?>" /> 
                        </div>
                    </div>

                    <div class=" col-lg-4">
                      <div class="input-group exp-row">
                        <input type="text" class="form-control exp-text exp-designation" id="exp-designation" placeholder="Designation" maxlength="50"  pattern="[a-zA-Z. ]{2,}" title="Alphabets only! Please enter more than two letters" value="<?php echo $exparr[$i]['desg']; ?>"/> 
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="input-group">
                      <input type="number" step="any" min="0" title="Please enter valid year! example: 1 or 1.5" class="form-control exp-text exp-ym" placeholder="Experience" id="exp-ym" value="<?php echo $exparr[$i]['ym']; ?>"/>
                      <span class="input-group-btn">
                      <select class="form-control exp-exp exp-text" id="notice_period" style="width: auto; padding-left: 5px;padding-right: 0px;">
                        <option value="year" <?php if( $exparr[$i]['exp'] == 'year' ) { echo "selected='selected'"; }?>>Year</option>
                        <option value="month" <?php if( $exparr[$i]['exp'] == 'month' ) { echo "selected='selected'"; }?>>Month</option>
                      </select>
                      </span>
                      </div>  
                    </div>

                    <div class="col-sm-1" id="remove_li">
                      <div class="input-group-btn">
                        <button class="btn btn-danger" type="button" id="remove-new-row"> 
                          <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> 
                        </button>
                      </div>
                    </div>
                    
                  </li>
                  <?php } ?>
                </ul>

                <div class="col-sm-1" style="float:right;" id="add_li">
                  <div class="input-group-btn">
                    <!-- <button class="btn btn-success" type="button" onclick="education_fields();">  -->
                    <button class="btn btn-success" type="button" id="add-new-row"> 
                      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
                    </button>
                  </div>
                </div>

                <input type="hidden" id="exp-data" value='<?php echo $row["exp"]; ?>' name="user[meta][exp]" />
                <div class="clear"></div>
                <!-- <div id="education_fields"></div> -->
              </div>
            </div>
            <!--End Experience input start-->

            <!--Start Fresher input-->
            <div class="" id="div2" style="display: none;">
              <div class="row">
                <ul class="repeater_container_fresher">
                  <?php for($j=0; $j<$fresherlen; $j++) { ?>
                  <li class="repeater_fresher input-group exp-row">
                    <div class="col-lg-4">
                      <div class="input-group exp-row">
                        <input type="text" class="form-control fresher-text name-institute" id="name-institute" placeholder="Name of the institute" maxlength="50" pattern="[a-zA-Z. ]{2,}" title="Alphabets only! Please enter more than two letters" value="<?php echo $fresherarr[$j]['institute']; ?>" />
                      </div>
                    </div>

                    <div class=" col-lg-4 ">
                      <div class="input-group exp-row">
                        <input type="text" class="form-control fresher-text training-technology" id="training-technology" placeholder="Training on technology" maxlength="50" pattern="[a-zA-Z. ]{2,}" title="Alphabets only! Please enter more than two letters" value="<?php echo $fresherarr[$j]['technology']; ?>" /> 
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="input-group exp-row">
                        <input type="number" title="Please enter a valid year!" class="form-control fresher-text passout-year" id="passout-year" placeholder="Pass out year" value="<?php echo $fresherarr[$j]['passout']; ?>" />
                      </div>
                    </div>

                    <div class="col-sm-1" id="remove_li">
                      <div class="input-group-btn">
                        <button class="btn btn-danger" type="button" id="remove-new-fresher-row"> 
                          <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> 
                        </button>
                      </div>
                    </div>
                  </li>
                  <?php }?>
                </ul>

                <div class="col-sm-1" style="float:right;" id="add_li_fresher">
                  <div class="input-group-btn">
                    <button class="btn btn-success" type="button" id="add-new-fresher-row"> 
                      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
                    </button>
                  </div>
                </div>

                <input type="hidden" id="fresher-data" name="user[meta][fresher]"" />
                <div class="clear"></div>
                <!-- <div id="fresher_education_fields"></div> -->
              </div>
            </div>

            <!--End Fresher input-->

            <!--Start Expected period-->
            <div class="">
              <div class="row form-group ">
                <div class="col-md-4 col-md-offset-4">
                  <div class="input-group">
                    <span class="input-group-addon span-notice"><span>Notice</span></span>
                    <select class="form-control" name="user[meta][notice_period]" id="day_month" required >
                      <?php for($k=1; $k<=50; $k++) { ?>
                      <option value="<?php echo $k;?>" <?php if( $row['notice_period'] == $k ) { echo "selected='selected'"; }?> ><?php echo $k;?></option>
                      <?php } ?>
                    </select>
      
                    <span class="input-group-btn">
                    <select class="form-control" id="notice_period" name="user[meta][notice_type]" style="width: auto;">
                      <option value="day" <?php if( $row['notice_type'] == 'day' ) { echo "selected='selected'"; }?> >Day</option>
                      <option value="month" <?php if( $row['notice_type'] == 'month' ) { echo "selected='selected'"; }?> >Month</option>
                    </select> 
                    </span>
                  </div>  
                </div> 
              </div>
            </div>
            <!--End Expected period-->
          </div>
          <!--/Container main col-8 -->

          <!--Start general information-->
          <div class="col-lg-12">
            <div class="">
              <h3 class="title-head">General Information</h3>
            </div>
                           
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="form-group">
                    <span>
                      <div class="col-md-7 col-sm-7">
                      <label for="tech_can_training" >Training for 1-3 months</label>
                      </div>
                      <div class="col-md-5 col-sm-5 input-group">
                        <div class="select-control">
                        <select class="form-control input-sm" id="tech_can_training" name="user[meta][tech_can_training]" required >
                          <option value="yes" <?php if( $row['tech_can_training'] == 'yes' ) { echo "selected='selected'"; }?> >Yes</option>
                          <option value="no" selected='selected' <?php if( $row['tech_can_training'] == 'no' ) { echo "selected='selected'"; }?> >No</option>
                        </select>
                        </div>
                      </div>
                    </span>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="form-group">
                    <span>
                      <div class="col-md-7 col-sm-7 col-xs-7">
                      <label for="tech_can_bond" >Minimum period</label>
                      </div>
                      <div class="col-md-5 col-sm-5 input-group">
                        <div class="select-control">
                        <select class="form-control input-sm" id="tech_can_bond" name="user[meta][tech_can_bond]" required >
                          <option value="yes" <?php if( $row['tech_can_bond'] == 'yes' ) { echo "selected='selected'"; }?> >Yes</option>
                          <option value="no" <?php if( $row['tech_can_bond'] == 'no' ) { echo "selected='selected'"; }?> >No</option>
                        </select>
                        </div>
                      </div>
                    </span>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="form-group">
                    <span>
                      <div class="col-md-7 col-sm-7">
                      <label for="tech_can_court" >Court of law</label>
                      </div>
                      <div class="col-md-5 col-sm-5 input-group">
                        <div class="select-control">
                        <select class="form-control input-sm" id="tech_can_court" name="user[meta][tech_can_court]" required>
                          <option value="yes" <?php if( $row['tech_can_court'] == 'yes' ) { echo "selected='selected'"; }?> >Yes</option>
                          <option value="no" <?php if( $row['tech_can_court'] == 'no' ) { echo "selected='selected'"; }?> >No</option>
                        </select>
                        </div>
                      </div>
                    </span>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="form-group">
                    <span>
                      <div class="col-md-7 col-sm-7">
                      <label for="tech_can_multishifts" >Multi-shift</label>
                      </div>
                      <div class="col-md-5 col-sm-5 input-group">
                        <div class="select-control">
                        <select class="form-control input-sm " id="tech_can_multishifts" name="user[meta][tech_can_multishifts]" required>
                          <option value="yes" <?php if( $row['tech_can_multishifts'] == 'yes' ) { echo "selected='selected'"; }?> >Yes</option>
                          <option value="no" <?php if( $row['tech_can_multishifts'] == 'no' ) { echo "selected='selected'"; }?> >No</option>
                        </select>
                        </div>
                      </div>
                    </span>
                  </div>
                </div>
              </div>     
                        
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="form-group">
                    <span>
                      <div class="col-md-7 col-sm-7">
                      <label for="skills">skills</label>
                      </div>
                      <div class="col-md-5 col-sm-5 input-group">
                      <input type="text" name="user[meta][tech_can_skills]" id="tags" class="form-control" placeholder="skills" maxlength="50" value="<?php echo $row['tech_can_skills']; ?>" required pattern="[a-zA-Z, -_]{1,}" title="Alphabets only!"/>
                      </div>
                    </span>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="form-group">
                    <span>
                      <div class="col-md-7 col-sm-7">
                      <label for="Current CTC">Current CTC (Per Annum)</label>
                      </div>
                      <div class="col-md-5 col-sm-5 input-group">
                      <input type="text" name="user[meta][tech_can_currentctc]" id="current_ctc" class="form-control" placeholder="Current CTC" maxlength="50" value="<?php echo $row['tech_can_currentctc'] ; ?>" required pattern="[0-9]{1,}" title="Digits only!" />
                      </div>
                    </span>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="form-group">
                    <span>
                      <div class="col-md-7 col-sm-7">
                      <label for="Expected CTC">Expected CTC (Per Annum)</label>
                      </div>
                      <div class="col-md-5 col-sm-5 input-group">
                      <input type="text" name="user[meta][tech_can_expectedctc]" id="expected_ctc" class="form-control" placeholder="Expected CTC" maxlength="50" value="<?php echo $row['tech_can_expectedctc'] ; ?>" required pattern="[0-9]{1,}" title="Digits only!" />
                      </div>
                    </span>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="form-group">
                    <span>
                      <div class="col-md-7 col-sm-7">
                      <label for="tech_can_hearabout">where did you hear about us?</label>
                      </div>
                      <div class="col-md-5 col-sm-5 input-group">
                        <span>
                          <label class="radio-inline">
                              <input id="hear-about" name="user[meta][tech_can_hearabout]" type="radio" value="friend" <?php echo ($row['tech_can_hearabout'] == 'friend')? 'checked' : '' ?> >
                              Friend
                          </label>

                          <label class="radio-inline">
                              <input id="tech_can_hearabout" name="user[meta][tech_can_hearabout]" type="radio" value="website" <?php echo ($row['tech_can_hearabout'] == 'website')? 'checked' : '' ?> >
                              Website
                          </label>
                          
                          <label class="radio-inline">
                              <input id="watch-me" name="user[meta][tech_can_hearabout]" type="radio" value="other" <?php echo ($row['tech_can_hearabout'] == 'other')? 'checked' : '' ?> >
                              Other
                          </label>
                          
                          <!-- <div class="col-md-5 col-sm-5 exp-row input-group" id='show-me' style="display:none;">
                            <input type="text" type="hidden" name="tech_can_hearabout" class="form-control" placeholder="Other" maxlength="50"/>
                          </div> -->
                        </span>
                      </div>
                    </span>
                  </div>
                </div>
              </div>  

              <div class="form-group">
                <hr />
              </div>

              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="form-group">
                    <span>
                      <div class="col-md-7 col-sm-7">
                      <label for="technical-comment">Technical Assigned</label>
                      </div>
                      <div class="col-md-3 col-sm-3 input-group">
                      <input type="text" name="techview_update_comment" class="form-control" placeholder="" maxlength="50"  required value="<?php echo $tech_assign_name; ?>" disabled/>
                      </div>
                    </span>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="form-group">
                    <span>
                      <div class="col-md-7 col-sm-7">
                      <label for="technical-comment">Technical Comment</label>
                      </div>
                      <div class="col-md-5 col-sm-5 input-group">
                      <input type="text" name="techview_update_comment" class="form-control" placeholder="" maxlength="50"  required value="<?php echo $row['tech_can_technical_comment']; ?>" disabled/>
                      </div>
                    </span>
                  </div>
                </div>
              </div>

              <!-- <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="form-group">
                    <span>
                      <div class="col-md-7 col-sm-7">
                      <label for="Hr Comment">Hr Comment</label>
                      </div>
                      <div class="col-md-5 col-sm-5 input-group">
                      <input type="text" name="tech_can_hr_comment" class="form-control" placeholder="Hr Comment" maxlength="50"  required />
                      <textarea class="form-control" name="user[hr_update_comment]"  pattern="[a-zA-Z. ]{2,}" title="Alphabets only!" id="hr_update_comment" placeholder="Hr Comment"><?php //echo $row['tech_can_hr_comment']; ?></textarea>
                      </div>
                    </span>
                  </div>
                </div>
              </div> -->

            </div>
          </div>
          <!--End general information-->           
                  
          <div class="form-group">
            <hr />
          </div>
          <div class="form-group col-md-4 col-md-offset-8">
            <button type="submit" class="btn btn-block btn-primary" name="btn_assign_update">Update</button>
          </div>     
      </form>
    </div>
  </div>
</div>
