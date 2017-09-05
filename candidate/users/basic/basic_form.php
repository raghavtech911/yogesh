<?php 
  if(isset($_POST['user'])){
    $status = $core->addUserData($_POST['user']);
    if($status){
      echo '<script>alert("Data Added");</script>';
    }else{
      echo '<script>alert("Failed");</script>';
    }
  }
?>
<div class="right_col" role="main">

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
                <input type="text" name="user[name]" id="name" class="form-control" placeholder="Enter Name" required="" pattern="[a-zA-Z ]{2,}" title="Alphabets only! Please enter more than two letters" />
              </div>
            </div>
            
            <div class="form-group col-lg-4 exp-row">
              <div class="input-group ">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                <input type="email" name="user[email]" id="email" class="form-control" placeholder="Enter Your Email" onkeyup="checkemail();" maxlength="40" required />
              </div>
              <!-- <small id="email_status" class="text-danger"></small> -->
              <!-- <span class="text-danger"><?php echo $emailError; ?></span> -->
            </div>
          </div>
            
          <div class="">
            <div class="form-group col-lg-4 exp-row">
              <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                <input type="text" name="user[mobile]" id="mobile" class="form-control" placeholder="Enter Your Mobile"  pattern="[+][9][1][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" maxlength="13" title="Please enter 10 digit phone number! example: 9876543210" required value="+91" onkeypress="return event.charCode >= 46 && event.charCode <= 57 && event.charCode != 47 || event.charCode <= 9"/> 
              </div>
            </div>

            <div class="form-group col-lg-4 exp-row">
              <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-education"></span></span>
                <select class="form-control selectpicker" title="Qualification..." name="user[qualification]" id="qualification" required="">
                <optgroup label="B.E.">
                  <option value="computer_science">Computer Science</option>
                  <option value="civil" >Civil</option>
                  <option value="mechanical" >Mechanical</option>
                </optgroup>
                <optgroup label="MBA">
                  <option value="financial_management" >Financial Management</option>
                  <option value="hr_management" >HR Management</option>
                  <option value="marketing_management" >Marketing management</option>
                </optgroup>
                </select>
              </div>
            </div>
          </div>

          <div class="">
            <div class="form-group col-lg-4 exp-row">
              <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-check"></span></span>
                <select class="form-control selectpicker" title="Apply for profile..." name="user[appliedposition]" id="appliedposition" required="">
                  <option value="php_developer" >PHP Developer</option>
                  <option value="ui_designer">UI Designer</option>
                  <option value="graphic_designer">Graphic Designer</option>
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
                  <input checked="checked" data-val="true" data-val-required="Gender is required." id="gender" name="user[gender]" type="radio" value="male" required>
                  Male
                </label>
                <label class="radio-inline col-md-4 pad-left-20">
                  <input id="gender" name="user[gender]" type="radio" value="female" required>
                  Female
                </label>
              </div>
            </div>

            <div class="col-lg-4 form-group exp-row">
              <label class="col-lg-4 control-label label-pad" for="marital_status">Marital Status</label>
              <div class="col-md-8">
                <label class="radio-inline col-md-4">
                  <input checked="checked" data-val="true" data-val-required="Marital-Status is required." id="marital_status" name="user[marital_status]" type="radio" value="unmarried" required>
                  Unmarried
                </label>
                <label class="radio-inline col-md-4 pad-left-20">
                  <input id="marital_status" name="user[marital_status]" type="radio" value="married" >
                  Married
                </label>
              </div>
            </div>
          </div>
        </div>
        <!--End Add Details here-->
        <!--/Container main col-4 -->
                          
        <!--Container main col-8 -->
        <div class="col-lg-8" id="">
          <!--Start Radio button for Experience and Fresher-->
          <div class="row">
            <h3>
            <span class="title-head">Experience</span>
            <input id="id_radio1" type="radio" name="user[exp_type]" value="exp" checked="checked"/>
      
            <span class="title-head">Fresher</span>
            <input id="id_radio2" type="radio" name="user[exp_type]" value="fresher" />
            </h3>
          </div>
          <!--End Radio button for Experience and Fresher-->

          <!--Start Experience input-->
          <div class="" id="div1">
            <div class="row">
              <ul class="repeater_container">
                <li class="repeater input-group exp-row">

                  <div class="col-lg-5">
                      <div class="input-group exp-row">
                        <input type="text" class="form-control exp-text exp-company" placeholder="Name of Company" maxlength="50"  pattern="[a-zA-Z. ]{2,}" title="Alphabets only! Please enter more than two letters" id="exp-company"/> 
                      </div>
                  </div>

                  <div class=" col-lg-4">
                    <div class="input-group exp-row">
                      <input type="text" class="form-control exp-text exp-designation" placeholder="Designation" maxlength="50"  pattern="[a-zA-Z. ]{2,}" title="Alphabets only! Please enter more than two letters" id="exp-designation"/> 
                    </div>
                  </div>

                  <div class="col-lg-2">
                    <div class="input-group exp-row">
                      <input type="number" step="any" title="Please enter valid year! example: 1 or 1.5" class="form-control exp-text exp-ym" placeholder="Experience(Years)" id="exp-ym"/>
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
              </ul>

              <div class="col-sm-1" style="float:right;" id="add_li">
                <div class="input-group-btn">
                  <!-- <button class="btn btn-success" type="button" onclick="education_fields();">  -->
                  <button class="btn btn-success" type="button" id="add-new-row"> 
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
                  </button>
                </div>
              </div>

              <input type="hidden" id="exp-data" name="user[meta][exp]" value='[{"company":"","desg":"","ym":""}]' />
              <div class="clear"></div>
              <!-- <div id="education_fields"></div> -->
            </div>
          </div>
          <!--End Experience input start-->

          <!--Start Fresher input-->
          <div class="" id="div2" style="display: none">
            <div class="row">
              <ui class="repeater_container_fresher" style="list-style-type:none;">
                <li class="repeater_fresher input-group exp-row">
                  
                  <div class="col-lg-5">
                    <div class="input-group exp-row">
                      <input type="text" class="form-control fresher-text name-institute" placeholder="Name of the institute" maxlength="50" pattern="[a-zA-Z. ]{2,}" title="Alphabets only! Please enter more than two letters" id="name-institute"/>
                    </div>
                  </div>

                  <div class=" col-lg-4 ">
                    <div class="input-group exp-row">
                      <input type="text" class="form-control fresher-text training-technology" placeholder="Training on technology" maxlength="50" pattern="[a-zA-Z. ]{2,}" title="Alphabets only! Please enter more than two letters" id="training-technology"/> 
                    </div>
                  </div>

                  <div class="col-lg-2">
                    <div class="input-group exp-row">
                      <input type="number" title="Please enter a valid year!" class="form-control fresher-text passout-year" placeholder="Pass out year" id="passout-year"/>
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
              </ui>

              <div class="col-sm-1" style="float:right;" id="add_li_fresher">
                <div class="input-group-btn">
                  <button class="btn btn-success" type="button" id="add-new-fresher-row"> 
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
                  </button>
                </div>
              </div>

              <input type="hidden" id="fresher-data" name="user[meta][fresher]" value='[{"institute":"","technology":"","passout":""}]' />
              <div class="clear"></div>
              <!-- <div id="fresher_education_fields"></div> -->
            </div>
          </div>
          <!--End Fresher input-->

          <!--Start Expected period-->
          <div class="">
            <div class="row form-group ">
              <div class="col-md-4 col-md-offset-5">
                <div class="input-group exp-row">
                  <input type="text" name="user[meta][notice_period]" id="day_month" class="form-control" placeholder="Notice period (Day/Month)" maxlength="50" required="" pattern="[0-9 ]{1,}" />
                </div>
              </div>
              
              <div class="col-md-2">
                <div class="input-group">
                <select class="form-control" id="notice_period" name="user[meta][notice_type]">
                  <option value="day" >Day</option>
                  <option value="month">Month</option>
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
                      <select class="form-control input-sm" id="tech_can_training" name="user[meta][tech_can_training]" required >
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
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
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
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
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
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
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
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
                    <input type="text" name="user[meta][tech_can_skills]" id="tags" class="form-control" placeholder="skills" maxlength="50" required pattern="[a-zA-Z, -_]{1,}" title="Alphabets only!" /> 
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
                    <input type="text" name="user[meta][tech_can_currentctc]" class="form-control" id="current_ctc" placeholder="Current CTC" maxlength="50"  pattern="[0-9]{1,}" title="Digits only!"/>
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
                    <input type="text" name="user[meta][tech_can_expectedctc]" class="form-control" id="expected_ctc" placeholder="Expected CTC" maxlength="50"  pattern="[0-9]{1,}" title="Digits only!" />
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
                            <input checked="checked" id="hear-about" name="user[meta][tech_can_hearabout]" type="radio" value="friend" >
                            Friend
                        </label>

                        <label class="radio-inline">
                            <input id="tech_can_hearabout" name="user[meta][tech_can_hearabout]" type="radio" value="website" >
                            Website
                        </label>
                        
                        <label class="radio-inline">
                            <input id="watch-me" name="user[meta][tech_can_hearabout]" type="radio" value="other" >
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