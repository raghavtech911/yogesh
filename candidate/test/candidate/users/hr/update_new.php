<?php require_once 'test2.php'; ?>
<?php 
if(isset($_POST['btn_assign_update'])){

    $technical_assign = htmlspecialchars($_POST['technical_hr_assign']); 
    $hr_update_assign = htmlspecialchars($_POST['hr_update_comment']);  


        $update =" UPDATE tech_candidates SET tech_can_technical_assign = '$technical_assign',tech_can_hr_comment = '$hr_update_assign' WHERE tech_can_id = '$val' ";

            $res = mysqli_query($conn,$update);
            if($res > 0){
            echo "Added";
            header('location: hrindex.php');
            } 
  }
?>

<div class="right_col" role="main">
 
  <div class="container col-lg-9">
    <div id="Add-New">
      <form method="post" action="users/basic/basic_logic.php" id="basic_form"> 
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
                  <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" value="<?php echo $fullnamenew; ?>" />
                </div>
              </div>
              
              <div class="form-group col-lg-4 exp-row">
                <div class="input-group ">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                  <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email" onkeyup="checkemail();" maxlength="40" required value="<?php echo $emailnew;?>" />
                </div>
                <small id="email_status" class="text-danger"></small>
                <!-- <span class="text-danger"><?php echo $emailError; ?></span> -->
              </div>
            </div>
              
            <div class="">
              <div class="form-group col-lg-4 exp-row">
                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                  <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter Your Mobile" maxlength="13" pattern="[+91][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" title="Please enter 10 digit phone number! example: 9876543210" required value="<?php echo $mobilenew;?>" onkeypress="return event.charCode >= 46 && event.charCode <= 57 && event.charCode != 47 || event.charCode <= 9"/> 
                </div>
              </div>

              <div class="form-group col-lg-4 exp-row">
                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-education"></span></span>
                  <select class="form-control selectpicker" title="Qualification..." name="qualification" id="qualification">
                    <optgroup label="B.E.">
                      <option value="computer_science" 
                              <?php if( $qualificationnew == 'computer_science' ) { echo "selected='selected'"; }?> >Computer Science
                      </option>
                      <option value="civil" 
                              <?php if( $qualificationnew == 'civil' ) { echo "selected='selected'"; }?> >Civil
                      </option>
                      <option value="mechanical" 
                              <?php if( $qualificationnew == 'mechanical' ) { echo "selected='selected'"; }?> >Mechanical
                      </option>
                    </optgroup>
                    <optgroup label="MBA">
                      <option value="financial-management" 
                              <?php if( $qualificationnew == 'financial_management' ) { echo "selected='selected'"; }?> >Financial Management
                      </option>
                      <option value="hr_management" 
                              <?php if( $qualificationnew == 'hr_management' ) { echo "selected='selected'"; }?> >HR Management
                      </option>
                      <option value="marketing_management" 
                              <?php if( $qualificationnew == 'marketing_management' ) { echo "selected='selected'"; }?> >Marketing management
                      </option>
                    </optgroup>
                  </select>
                </div>
              </div>
            </div>

            <div class="">
              <div class="form-group col-lg-4 exp-row">
                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-check"></span></span>
                  <select class="form-control selectpicker" title="Apply for profile..." name="appliedposition" id="appliedposition">
                    <option value="php_developer" 
                            <?php if( $appliedpositionnew == 'php_developer' ) { echo "selected='selected'"; }?> >PHP Developer
                    </option>
                    <option value="ui_designer"
                            <?php if( $appliedpositionnew == 'ui_designer' ) { echo "selected='selected'"; }?> >UI Designer
                    </option>
                    <option value="graphic_designer"
                            <?php if( $appliedpositionnew == 'graphic_designer' ) { echo "selected='selected'"; }?> >Graphic Designer
                    </option>
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
                  <input type="text" name="date" id="date" class="form-control" placeholder="YYYY-MM-DD h:m" value="<?php echo date("Y-m-d h:i:s");?>" /> 
                </div>
              </div>
            </div>

            <div class="">
              <div class="col-lg-4 form-group exp-row">
                <label class="col-lg-4 control-label label-pad" for="Gender">Gender</label>
                <div class="col-md-8">
                  <label class="radio-inline col-md-4 ">
                    <input checked="checked" data-val="true" data-val-required="Gender is required." id="gender" name="gender" type="radio" value="male" <?php echo ($gendernew == 'male')? 'checked' : '' ?> required>
                    Male
                  </label>
                  <label class="radio-inline col-md-4 pad-left-20">
                    <input id="gender" name="gender" type="radio" value="female" <?php echo ($gendernew == 'female')? 'checked' : '' ?> required>
                    Female
                  </label>
                </div>
              </div>

              <div class="col-lg-4 form-group exp-row">
                <label class="col-lg-4 control-label label-pad" for="marital_status">Marital Status</label>
                <div class="col-md-8">
                  <label class="radio-inline col-md-4">
                    <input checked="checked" data-val="true" data-val-required="Marital-Status is required." id="marital_status" name="marital_status" type="radio" value="unmarried" <?php echo ($marital_status_new == 'unmarried')? 'checked' : '' ?> required>
                    Unmarried
                  </label>
                  <label class="radio-inline col-md-4 pad-left-20">
                    <input id="marital_status" name="marital_status" type="radio" value="married" <?php echo ($marital_status_new == 'married')? 'checked' : '' ?> required>
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
              <input id="id_radio1" type="radio" name="name_radio1" value="value_radio1" checked="checked"/>
        
              <span class="title-head">Fresher</span>
              <input id="id_radio2" type="radio" name="name_radio1" value="value_radio2" />
              </h3>
            </div>
            <!--End Radio button for Experience and Fresher-->

            <!--Start Experience input-->

                        

            <div class="" id="div1">
              <div class="row">
                <div class="repeater_container">
                  <div class="repeater input-group">

                    <?php 
                    // echo "<pre>";
                    // print_r (json_decode($exp_fetch)) . "<br><br>";
                    // print_r (json_decode($fresher_fetch)); 
                    // echo "</pre>";
                    $exparr =   json_decode($exp_fetch,true) ;
                    $fresherarr = json_decode($fresher_fetch);

                    $explen = count(json_decode($exp_fetch));
                    $fresherlen = count(json_decode($fresher_fetch));

                    // echo "<br>".$explen;
                    // echo "<br>".$fresherlen ."<br>";

                    // echo "<pre>";
                    // print_r($exparr);
                    // echo "</pre>";

                    // echo $exparr[0]['company'];
                    ?>

                    <?php for($i=0; $i<$explen; $i++) { ?>
                    <div class="col-lg-5">
                        <div class="input-group exp-row">
                          <input type="text" class="form-control exp-text exp-company" placeholder="Name of Company" maxlength="50" value="<?php echo $exparr[$i]['company']; ?>" /> 
                        </div>
                    </div>

                    <div class=" col-lg-4">
                      <div class="input-group exp-row">
                        <input type="text" class="form-control exp-text exp-designation" placeholder="Designation" maxlength="50" value="<?php echo $exparr[$i]['desg']; ?>" /> 
                      </div>
                    </div>

                    <div class="col-lg-2">
                      <div class="input-group exp-row">
                        <input type="text" step="any" title="Please enter valid year! example: 1 or 1.5" class="form-control exp-text exp-ym" placeholder="Experience(Years)" value="<?php echo $exparr[$i]['ym']; ?>" />
                      </div>
                    </div>

                    <?php if($i<1){?>
                    <div class="col-sm-1">
                      <div class="input-group-btn">
                        <button class="btn btn-success" id="add-new-row" type="button" onclick="education_fields();">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                      </div>
                    </div>
                    <?php }else{?>
                    <div class="col-sm-1">
                      <div class="input-group-btn">
                        <button class="btn btn-danger" id=remove-new-row" type="button" onclick="remove_education_fields();">
                        <span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                      </div>
                    </div>
                    <?php }?>
                    <?php } ?>

                  </div>
                </div>
                <input type="hidden" id="exp-data" name="exp_fields" />
                <div class="clear"></div>
                <div id="education_fields"></div>
              </div>
            </div>
            <!--End Experience input start-->

            <!--Start Fresher input-->
            <div class="" id="div2" style="display: none">
              <div class="row">
                <div class="repeater_container_fresher">
                  <div class="repeater_fresher input-group">
                    
                    <div class="col-lg-5">
                      <div class="input-group exp-row">
                        <input type="text" class="form-control fresher-text name-institute" placeholder="Name of the institute" maxlength="50" />
                      </div>
                    </div>

                    <div class=" col-lg-4 ">
                      <div class="input-group exp-row">
                        <input type="text" class="form-control fresher-text training-technology" placeholder="Training on technology" maxlength="50" /> 
                      </div>
                    </div>

                    <div class="col-lg-2">
                      <div class="input-group exp-row">
                        <input type="text" step="any" title="" class="form-control fresher-text passout-year" placeholder="Pass out year" />
                      </div>
                    </div>

                    <div class="col-sm-1">
                      <div class="input-group-btn">
                        <button class="btn btn-success" type="button" id="add-new-fresher-row" onclick="fresher_education_fields();">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                       </div>
                    </div>

                  </div>
                </div>
                <input type="hidden" id="fresher-data" name="fresher_fields" />
                <div class="clear"></div>
                <div id="fresher_education_fields"></div>
              </div>
            </div>
            <!--End Fresher input-->

            <!--Start Expected period-->
            <div class="">
              <div class="row form-group ">
                <div class="col-md-4 col-md-offset-5">
                  <div class="input-group exp-row">
                    <input type="text" name="day_month" id="day_month" class="form-control" placeholder="Notice period (Day/Month)" maxlength="50" value="<?php echo $notice_period; ?>" />
                  </div>
                </div>
                
                <div class="col-md-2">
                  <div class="input-group">
                  <select class="form-control" id="notice_period" name="notice_period">
                    <option value="day" <?php if( $notice_type == 'day' ) { echo "selected='selected'"; }?> >Day</option>
                    <option value="month" <?php if( $notice_type == 'month' ) { echo "selected='selected'"; }?> >Month</option>
                  </select>  
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
                        <select class="form-control input-sm" id="tech_can_training" name="tech_can_training" required >
                          <option value="yes" <?php if( $training_period_new == 'yes' ) { echo "selected='selected'"; }?> >Yes</option>
                          <option value="no" selected='selected' <?php if( $training_period_new == 'no' ) { echo "selected='selected'"; }?> >No</option>
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
                        <select class="form-control input-sm" id="tech_can_bond" name="tech_can_bond" required >
                          <option value="yes" <?php if( $bond_new == 'yes' ) { echo "selected='selected'"; }?> >Yes</option>
                          <option value="no" <?php if( $bond_new == 'no' ) { echo "selected='selected'"; }?> >No</option>
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
                        <select class="form-control input-sm" id="tech_can_court" name="tech_can_court" required>
                          <option value="yes" <?php if( $court_case_new == 'yes' ) { echo "selected='selected'"; }?> >Yes</option>
                          <option value="no" <?php if( $court_case_new == 'no' ) { echo "selected='selected'"; }?> >No</option>
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
                        <select class="form-control input-sm " id="tech_can_multishifts" name="tech_can_multishifts" required>
                          <option value="yes" <?php if( $multishift_new == 'yes' ) { echo "selected='selected'"; }?> >Yes</option>
                          <option value="no" <?php if( $multishift_new == 'no' ) { echo "selected='selected'"; }?> >No</option>
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
                      <input type="text" name="tech_can_skills" class="form-control" placeholder="skills" maxlength="50" value="<?php echo $skillsnew; ?>" required />
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
                      <label for="Current CTC">Current CTC</label>
                      </div>
                      <div class="col-md-5 col-sm-5 input-group">
                      <input type="text" name="tech_can_currentctc" class="form-control" placeholder="Current CTC" maxlength="50" value="<?php echo $current_ctc_new ; ?>" required />
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
                      <label for="Expected CTC">Expected CTC</label>
                      </div>
                      <div class="col-md-5 col-sm-5 input-group">
                      <input type="text" name="tech_can_expectedctc" class="form-control" placeholder="Expected CTC" maxlength="50" value="<?php echo $expected_ctc_new ; ?>" required />
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
                              <input checked="checked" data-val="true" data-val-required="required." id="hear-about" name="tech_can_hearabout" type="radio" value="friend" <?php echo ($hear_about_company_new == 'friend')? 'checked' : '' ?> >
                              Friend
                          </label>

                          <label class="radio-inline">
                              <input id="tech_can_hearabout" name="tech_can_hearabout" type="radio" value="website" <?php echo ($hear_about_company_new == 'website')? 'checked' : '' ?> >
                              Website
                          </label>
                          
                          <label class="radio-inline">
                              <input id="watch-me" name="tech_can_hearabout" type="radio" value="other" <?php echo ($hear_about_company_new == 'other')? 'checked' : '' ?> >
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
                      <label for="technical-comment">Technical Comment</label>
                      </div>
                      <div class="col-md-5 col-sm-5 input-group">
                      <input type="text" name="techview_update_comment" class="form-control" placeholder="Technical Comment" maxlength="50"  required />
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
                      <label for="Hr Comment">Hr Comment</label>
                      </div>
                      <div class="col-md-5 col-sm-5 input-group">
                      <!-- <input type="text" name="tech_can_hr_comment" class="form-control" placeholder="Hr Comment" maxlength="50"  required /> -->
                      <textarea class="form-control" name="hr_update_comment" id="hr_update_comment" placeholder="Hr Comment"></textarea>
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
                       <label for="technical_hr_assign">Technical Assign</label>
                      </div>
                      <div class="col-md-5 col-sm-5 input-group">
                        <div class="select-control">
                        <select class="input-group form-control" id="technical_hr_assign" name="technical_hr_assign">
                         <option value="">Assign technical!</option>
                        <?php 
                        $sql = "SELECT tech_users_id, tech_users_username FROM tech_users WHERE tech_users_role = 2";
                        $result = $conn->query($sql);
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        $checked = ($assign_new == $row['tech_users_id']) ? 'selected' : '';
                          ?>
                        <option value="<?php echo $row['tech_users_id']; ?>" <?php echo $checked; ?>>
                        <?php echo $row["tech_users_username"]; ?>
                        </option>

                        <?php }?>
                        </select> 
                        </div>
                        <span class="form-group col-md-5" style="float: right;">
                          <button type="submit" class="btn btn-block btn-default" name="btn_assign_update">Update</button>
                        </span>
                      </div>
                    </span>
                  </div>
                </div>
              </div>  
            </div>
          </div>


          <!--End general information-->           
                  
          <div class="form-group">
            <hr />
          </div>

          <div class="form-group col-md-4 col-md-offset-8">
            <button type="submit" class="btn btn-block btn-primary" name="btn-submit">Submit</button>
          </div>      
      </form>
    </div>
  </div>
</div>
