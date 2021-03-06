<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
            <?php include 'common/left-menu.php'; ?>          
        </div>

        <?php include 'common/top-bar.php'; ?>         
        
        <!-- page content -->
        <?php 
        if(isset($_POST['btn-degree-submit'])){
          if(isset($_POST['user'])){
            $status = $core->addGraduation($_POST['user']);
            if($status){
              echo '<script>alert("Data Added");</script>';
            }else{
              echo '<script>alert("Failed");</script>';
            
            }
          }

        }

        if(isset($_POST['btn-position-submit'])){
          if(isset($_POST['user'])){
            $result = $core->addPosition($_POST['user']);
            if($result){
              echo '<script>alert("Data Added");</script>';
            }else{
              echo '<script>alert("Failed");</script>';   
            }
          }
        }

        $post = $core->position_List();
        $poslength = count($post);
       
        $graduation_list = $core->graduation_List();
        $graduation_list_length = count($graduation_list);
          
        ?>
        <div class="right_col" role="main">
        <div class="container col-lg-9">
          
            <div class="row">
              <div class="col-lg-12">         
                <!--Start Graduation Details-->
 
                <div class="col-lg-6 col-md-12 col-sm-12">
                <form method="post" action="" id="basic_form"> 
                  <div class="">
                    <h3 class="title-head">Add Graduation Details</h3>
                  </div> 

                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="form-group">
                        <span>
                          <div class="col-md-2 col-sm-2">
                          <label for="Select">Select</label>
                          </div>
                          <div class="col-md-8 col-sm-8 input-group">
                          <select class="form-control selectpicker" title="Qualification..." name="user[qualification]" id="qualification" required="">
                            <?php 
                              foreach ($graduation_list as $key => $value) {
                                $len = count($value); ?>
                                <option value="<?php echo $key;?>"><?php echo $key;?></option>
                                <?php
                              }
                            ?>
                          </select>
                          </div>
                        </span>
                      </div>
                    </div>
                  </div>                
                                         
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="form-group">
                        <span>
                          <div class="col-md-2 col-sm-2">
                          <label for="Degree">Degree</label>
                          </div>
                          <div class="col-md-8 col-sm-8 input-group">
                          <input type="text" name="user[degree]" class="form-control" placeholder="Degree" maxlength="50" required />
                          </div>
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class="row ">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="form-group">
                        <span>
                          <div class="col-md-2 col-sm-2">
                          <label for="Stream">Stream</label>
                          </div>
                          <div class="col-md-7 col-sm-7 input-group">
                            <div class="row">
                              <ul class="repeater_stream_container exp-row">
                                <li class="repeater_stream input-group exp-row" style="list-style-type: none;">

                                  <div class="col-lg-11">
                                    <div class="input-group exp-row">
                                      <input type="text" class="form-control" name="user[stream][]" value=""
                                      placeholder="Stream" required/>
                                    </div>
                                  </div>

                                  <div class="col-sm-1" id="remove_stream_li">
                                    <div class="input-group-btn">
                                      <button class="btn btn-danger" type="button" id="remove-new-stream-row"> 
                                        <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> 
                                      </button>
                                    </div>
                                  </div>
                                </li>
                              </ul>

                              <div class="col-sm-1 col-sm-offset-11" id="add_stream_li">
                                <div class="input-group-btn">
                                  <button class="btn btn-success" type="button" id="add-new-stream-row"> 
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
                                  </button>
                                </div>
                              </div>

                              <!-- <input type="hidden" id="stream-data" name="user[meta][stream]" /> -->
                              <div class="clear"></div>
                            </div>
                          </div>
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group col-md-3 ">
                    <button type="submit" class="btn btn-block btn-primary" name="btn-degree-submit">Submit</button>
                  </div>
                  </form>   
                </div>
                
                <!--End Graduation details-->

                <!--Start Position details--> 
                <div class="col-lg-6 col-md-12 col-sm-12">
                <form method="post" action="" id="basic_form">
                  <div class="">
                    <h3 class="title-head">Add Position Details</h3>
                  </div>

                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="form-group">
                        <span>
                          <div class="col-md-2 col-sm-2">
                          <label for="position">position</label>
                          </div>
                          <div class="col-md-7 col-sm-7 input-group">
                            <div class="row">
                              <ul class="repeater_position_container exp-row">
                                <?php for($k=0; $k<$poslength; $k++) { ?>
                                <li class="repeater_position input-group exp-row" style="list-style-type: none;">

                                  <div class="col-lg-11">
                                    <div class="input-group exp-row">
                                      <input type="text" class="form-control position-text exp-position" name="user[position][]" placeholder="Position" value="<?php echo $post[$k];?>" required/>
                                    </div>
                                  </div>

                                  <div class="col-sm-1" id="remove_position_li">
                                    <div class="input-group-btn">
                                      <button class="btn btn-danger" type="button" id="remove-new-position-row"> 
                                        <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> 
                                      </button>
                                    </div>
                                  </div>
                                </li>
                                <?php } ?> 
                              </ul>

                              <div class="col-sm-1 col-sm-offset-11" id="add_position_li">
                                <div class="input-group-btn">
                                  <button class="btn btn-success" type="button" id="add-new-position-row"> 
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
                                  </button>
                                </div>
                              </div>

                              <input type="hidden" id="position-data" name="user[meta][position]" />
                              <div class="clear"></div>
                            </div>
                          </div>
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group col-md-3 ">
                    <button type="submit" class="btn btn-block btn-primary" name="btn-position-submit">Submit</button>
                  </div> 
                  </form>  
                </div>
              </div>
              
            </div>
            
            <!--End Position details-->
                     
            <div class="form-group">
              <hr />
            </div>
        </div>
        <!-- /page content -->
        </div>
        <!-- footer content -->
        <footer>
          <div class="pull-right">
          </div>
          <div class="clearfix"></div>
        </footer> 
        <!-- /footer content -->
      </div>
    </div> 



