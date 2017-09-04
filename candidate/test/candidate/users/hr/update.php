<div class="right_col" role="main">
      <?php require_once 'test2.php'; ?>
      <div class="container col-lg-9">
        <!--Tab start-->
        <div class="tab-content">
          <!--Tab 1 data start-->
          <div id="Add-New" class="tab-pane fade in active">

            <form method="post" action="users/basic/basic_logic.php" id="basic_form"> 
              <!-- <div class="col-lg-12 page-header">
              </div> -->
              
              <!--Start Details here-->
              <div class="row">
              <div class="col-lg-4">
              <div class="">
                <h3 class="section-title">Add Details Here</h3>
              </div>
              
              <div class="">
                
                <div class="">
                  <div class="form-group col-lg-4 exp-row">
                    <div class="input-group ">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                      <input type="text" name="name" id="name" class="form-control" value="<?php echo $fullnamenew; ?>" placeholder="Enter Name"/>
                    </div>
                    <!--<span class="text-danger"><?php //echo $nameError; ?></span>-->
                  </div>
                  
                  <div class="form-group col-lg-4 exp-row">
                    <div class="input-group ">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                      <input type="email" name="email" id="email" class="form-control" value="<?php echo $emailnew;?>" placeholder="Enter Your Email" onkeyup="checkemail();" maxlength="40" required />
                    </div>
                    <small id="email_status" class="text-danger"></small>
                    <!-- <span class="text-danger"><?php echo $emailError; ?></span> -->
                  </div>
                </div>
                  
                  <div class="">
                  <div class="form-group col-lg-4 exp-row">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                      <input type="text" name="mobile" id="mobile" class="form-control" value="<?php echo $mobilenew;?>" placeholder="Enter Your Mobile" maxlength="13" pattern="[+91][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" title="Please enter 10 digit phone number! example: 9876543210" required value="+91" onkeypress="return event.charCode >= 46 && event.charCode <= 57 && event.charCode != 47 || event.charCode <= 9"/> 
                    </div>
                  </div>

                  <div class="form-group col-lg-4 exp-row">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-education"></span></span>
                      <!-- <input type="text" name="qualification" class="form-control" placeholder="Educational Qualification" maxlength="50" pattern="[a-zA-Z0-9.]{1,}" title="Alphabets/Digits only! Please enter more than three letters" required /> -->
                      <select class="form-control selectpicker" title="Qualification..." name="qualification" id="qualification">
                      <optgroup label="B.E.">
                        <option value="computer_science" 
                                <?php if( $court_case_new == 'computer_science' ) { echo "selected='selected'"; }?> >Computer Science
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
                                <?php if( $qualificationnew == 'financial-management' ) { echo "selected='selected'"; }?> >Financial Management
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
                      <!-- <input type="text" name="appliedposition" class="form-control" placeholder="Apply For Position" maxlength="50" pattern="[a-zA-Z0-9 ]{1,}" title="Alphabets/Digits only! Please enter more than three letters" required /> --> 
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
                    <label class="col-lg-2 control-label" for="Gender">Gender</label>
                    <div class="col-md-9">
                      <label class="radio-inline">
                          <input checked="checked" data-val="true" data-val-required="Gender is required." id="gender" name="gender" type="radio" value="male" <?php echo ($gendernew == 'male')? 'checked' : '' ?> required>
                          Male
                      </label>
                      <label class="radio-inline">
                          <input id="gender" name="gender" type="radio" value="female" <?php echo ($gendernew == 'female')? 'checked' : '' ?> required>
                          Female
                      </label>
                    </div>
                  </div>

                  <div class="col-lg-4 form-group exp-row">
                    <label class="col-lg-4 control-label" for="marital_status" style="padding: 0px;">Marital Status</label>
                    <div class="col-md-7">
                      <!-- <label class="radio-inline"> -->
                          <input checked="checked" data-val="true" data-val-required="Marital-Status is required." id="marital_status" name="marital_status" type="radio" value="married" <?php echo ($marital_status_new == 'married')? 'checked' : '' ?> required>
                          Married
                      <!-- </label> -->
                      <!-- <label class="radio-inline"> -->
                          <input id="marital_status" name="marital_status" type="radio" value="unmarried" <?php echo ($marital_status_new == 'unmarried')? 'checked' : '' ?> required>
                          Unmarried
                      <!-- </label> -->
                    </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  <!--End Details here-->
                  
                  <!-- <div class="col-lg-12 page-header">
                  </div> -->
                  <!--div 1 start-->
                  
                  <!--Start  Experience-->

                  <div class="" style="padding-top: 20px;">
                    <h4><span class="section-title">Experience</span><label><input id="id_radio1" type="radio" name="name_radio1" value="value_radio1" checked="checked"/></label>
              
                    <span class="section-title">Fresher</span><label><input id="id_radio2" type="radio" name="name_radio1" value="value_radio2" /></label></h4>
                  </div>

                  <div class="col-lg-8" id="div1">
                  <!--Experience input start-->
                  <div class="row form-group">
                        <div class="col-lg-5">
                            <div class="input-group exp-row">
                            <input type="text" name="company_name_row[]" id="company_name_row[]" class="form-control" placeholder="Name of Company" maxlength="50"  /> 
                            </div>
                        </div>
                        <div class=" col-lg-4">
                            <div class="input-group exp-row">
                            <input type="text" name="designation_row[]" id="designation_row[]" class="form-control" placeholder="Designation" maxlength="50"  /> 
                          </div>
                        </div>
                        <div class="col-lg-2 ">
                            <div class="input-group exp-row">
                            <input type="text" step="any" name="total_exp_row[]" title="Please enter valid year! example: 1 or 1.5" class="form-control" placeholder="Experience(Years)"/>
                            </div>
                        </div>

                        <div class="col-sm-1">
                            <div class="input-group-btn">
                                <button class="btn btn-success" type="button"  onclick="education_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                             </div>
                        </div>
                        <div class="clear"></div>
                        <div id="education_fields"></div>
                  </div>

              </div>

        <!--div 1 end-->


                    <!--div 2 start-->
                                    
                  <!--Start  Experience--> 
                  <!--Experience input start-->
                  <div class="col-lg-8" id="div2" style="display: none">
                    <div class="row form-group">
                      <div class="col-lg-5">
                      <div class="input-group exp-row">
                        <input type="text" name="name_of_institute[]" class="form-control" placeholder="Name of the institute" maxlength="50"  /> 
                      </div>
                      </div>

                      <div class=" col-lg-4 ">
                      <div class="input-group exp-row">
                        <input type="text" name="training_on_technology[]" class="form-control" placeholder="Training on technology" maxlength="50"  /> 
                      </div>
                      </div>

                      <div class="col-lg-2">
                      <div class="input-group exp-row">
                        <input type="text" step="any" name="pass_out_year[]" title="" class="form-control" placeholder="Pass out year" />
                      </div>
                      </div>

                      <div class="col-sm-1">
                        <div class="input-group-btn">
                            <button class="btn btn-success" type="button"  onclick="fresher_education_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                         </div>
                      </div>
                      <div class="clear"></div>
                      <div id="fresher_education_fields"></div>
                    </div>
                  </div>
                  <!--div 2 end-->

                  <!--Expected period start-->
                  <div class="col-lg-8">
                    <div class="row form-group ">
                      <!-- <div class="col-md-1 col-md-offset-4">
                      <div class="input-group" >
                        <label class="" for="minimum-month">Notice period</label>  
                      </div>
                      </div> -->
                      
                      <div class="col-md-4 col-md-offset-5">
                      <div class="input-group exp-row">
                        <input type="text" name="day_month" id="day_month" class="form-control" placeholder="Notice period (Day/Month)" maxlength="50"/>
                      </div>
                      </div>
                      
                      <div class="col-md-2">
                      <div class="input-group">
                      <select class="input-group form-control" id="notice_period" name="notice_period">
                        <option value="day" >Day</option>
                        <option value="month">Month</option>
                      </select>  
                      </div>
                      </div>
                    </div>
                  </div>
                  <!--Expected period end-->
                  <!--End Experience-->
                  
                  <!-- <div class="col-lg-12 page-header">
                  </div>
                   -->
                  <!--Start general information-->
                  <div class="col-lg-8">
                  <div class="">
                    <h3 class="section-title">General Information</h3>
                  </div>
                  
                  <!--Row 1 start-->
                  <div class="row">
                  <div class="form-group text-center">
                    <div class="col-md-3">
                    <div class="input-group exp-row">
                      <!-- <label for="tech_can_training">Training for 1-3 months</label> -->
                      <span class="">Training 1-3 months</span><!--input-group-addon-->
                      <select class="form-control" id="tech_can_training" name="tech_can_training" required>
                        <option value="yes" <?php if( $training_period_new == 'yes' ) { echo "selected='selected'"; }?> >Yes</option>
                        <option value="no" <?php if( $training_period_new == 'no' ) { echo "selected='selected'"; }?> >No</option>
                      </select>
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="input-group exp-row">
                      <!-- <label for="tech_can_bond">Minimum period</label> -->
                      <span class="">Minimum period</span>
                      <select class="form-control" id="tech_can_bond" name="tech_can_bond" required>
                        <option value="yes" <?php if( $bond_new == 'yes' ) { echo "selected='selected'"; }?> >Yes</option>
                        <option value="no" <?php if( $bond_new == 'no' ) { echo "selected='selected'"; }?> >No</option>
                      </select>
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="input-group exp-row">
                      <!-- <label for="tech_can_court">Court of law</label> -->
                      <span class="">Court of law</span>
                      <select class="form-control" id="tech_can_court" name="tech_can_court" required>
                        <option value="yes" <?php if( $court_case_new == 'yes' ) { echo "selected='selected'"; }?> >Yes</option>
                        <option value="no" <?php if( $court_case_new == 'no' ) { echo "selected='selected'"; }?> >No</option>
                      </select>
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="input-group exp-row">
                      <!-- <label for="tech_can_multishifts">Multi-shift</label> -->
                      <span class="">Multi-shift</span>
                      <select class="form-control" id="tech_can_multishifts" name="tech_can_multishifts" required>
                        <option value="yes" <?php if( $multishift_new == 'yes' ) { echo "selected='selected'"; }?> >Yes</option>
                        <option value="no" <?php if( $multishift_new == 'no' ) { echo "selected='selected'"; }?> >No</option>
                      </select>
                    </div>
                    </div>  
                  </div>
                  </div>
                  <!--Row 1 End-->

                  <!--Row 2 Start--><br>
                  <div class="row text-center">
                    <div class="form-group">
                    <div class="col-md-4">
                    <div class="input-group exp-row">
                      <input type="text" name="tech_can_skills" class="form-control" placeholder="skills" maxlength="50" value="<?php echo $skillsnew; ?>" required />
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="input-group exp-row">
                      <input type="text" name="tech_can_currentctc" class="form-control" placeholder="Current CTC" maxlength="50" value="<?php echo $current_ctc_new ; ?>" required />
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="input-group exp-row">
                      <input type="text" name="tech_can_expectedctc" class="form-control" placeholder="Expected CTC" maxlength="50" value="<?php echo $expected_ctc_new ; ?>" required />
                    </div>
                    </div>
                    </div>
                  </div>
                  <!--Row 2 End-->

                  <!--Row 3 Start--><!--Start where did you hear about us -->
                  <div class="form-group form-inline text-center">
                    <label class="control-label" for="tech_can_hearabout">where did you hear about us?</label>
                    <div>
                      <label class="radio-inline">
                          <input checked="checked" data-val="true" data-val-required="data is required." id="Marital-Status" name="tech_can_hearabout" type="radio" value="friend" <?php echo ($hear_about_company_new == 'friend')? 'checked' : '' ?> required >
                          Friend
                      </label>
                      <label class="radio-inline">
                          <input id="tech_can_hearabout" name="tech_can_hearabout" type="radio" value="website" <?php echo ($hear_about_company_new == 'website')? 'checked' : '' ?> required >
                          Website
                      </label>
                      <label class="radio-inline">
                          <input id="watch-me" name="tech_can_hearabout" type="radio" value="other" <?php echo ($hear_about_company_new == 'other')? 'checked' : '' ?> >
                          Other
                      </label>
                      <!-- <div class="input-group col-lg-4 col-lg-offset-4 centered" id='show-me' style='display:none'>
                        <input type="text" name="tech_can_hearabout" class="form-control" placeholder="Other" maxlength="50"/>
                      </div> -->
                    </div>
                  </div>
                </div>
                </div>
                <!--Row 3 End--><!--End where did you hear about us-->
                <!--End general information-->           
                
                <div class="form-group">
                  <hr />
                </div>

                

                <div class="form-group">
                  <button type="submit" class="btn btn-block btn-primary" name="btn-submit">Submit</button>
                </div>
              
            </form>
          </div>
          <!--Tab 1 data end-->

          <!--Tab 2 data start-->
          <!-- <div id="List" class="tab-pane fade">
            <h3>Already Registered Records</h3>
            <?php //include('userlist.php'); ?>
          </div> -->
          <!--Tab 2 data end-->

          <!--Tab 3 data start-->
          <!-- <div id="setting" class="tab-pane fade">
            <?php //include('setting.php'); ?>
          </div> -->
          <!--Tab 3 data end-->
        </div>
        <!--Tab end-->
      </div>
</div>