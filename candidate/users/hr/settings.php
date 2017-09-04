<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
            <?php include 'common/left-menu.php'; ?>          
        </div>

        <?php include 'common/top-bar.php'; ?>         
        
        <!-- page content -->
        <?php 
          if(isset($_POST['user'])){
            $status = $core->addGraduation($_POST['user']);
            if($status){
              echo '<script>alert("Data Added");</script>';
            }else{
              echo '<script>alert("Failed");</script>';
            
            }
          }
        ?>
        <div class="right_col" role="main">
        <div class="container col-lg-9">
          <form method="post" action="" id="basic_form"> 
            <div class="row">
              <div class="col-lg-12">         
                <!--Start Graduation Details-->
                <div class="col-lg-6">
                  <div class="">
                    <h3 class="title-head">Add Graduation Details</h3>
                  </div>
                                         
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="form-group">
                        <span>
                          <div class="col-md-3 col-sm-3">
                          <label for="Degree">Degree</label>
                          </div>
                          <div class="col-md-7 col-sm-7 input-group">
                          <input type="text" name="user[meta][degree]" class="form-control" placeholder="Degree" maxlength="50" required />
                          </div>
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="form-group">
                        <span>
                          <div class="col-md-3 col-sm-3">
                          <label for="Stream">Stream</label>
                          </div>
                          <div class="col-md-7 col-sm-7 input-group">
                          <input type="text" name="user[meta][stream]" class="form-control" placeholder="Stream" maxlength="50" required />
                          </div>
                        </span>
                      </div>
                    </div>
                  </div>    

                  <div class="form-group col-md-3 ">
                    <button type="submit" class="btn btn-block btn-primary" name="btn-submit">Submit</button>
                  </div>   
                </div>
                <!--End Graduation details-->

                <!--Start Graduation details-->
                <div class="col-lg-6 ">
                  <div class="">
                    <h3 class="title-head">Add Position Details</h3>
                  </div>
                                           
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="form-group">
                        <span>
                          <div class="col-md-3 col-sm-3">
                          <label for="position">position</label>
                          </div>
                          <div class="col-md-7 col-sm-7 input-group">
                          <input type="text" name="user[meta][position]" class="form-control" placeholder="Position" maxlength="50" required />
                          </div>
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group col-md-3 ">
                    <button type="submit" class="btn btn-block btn-primary" name="btn-submit">Submit</button>
                  </div>   
                </div>
              </div>
            </div>
            <!--End Graduation details-->
                     
            <div class="form-group">
              <hr />
            </div>

                <!-- <div class="form-group col-md-4 col-md-offset-8">
                  <button type="submit" class="btn btn-block btn-primary" name="btn-submit">Submit</button>
                </div> -->      
          </form>
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