  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
            <?php include 'common/left-menu.php'; ?>          
        </div>

        <?php include 'common/top-bar.php'; ?>          

        <!-- page content -->
        <?php 
          $result = $core->hr_List();
          if(!$result){
            printf("Error: %s\n", mysqli_error($core->connection));
            exit();
          }   
        ?> 
        <div class="right_col" role="main">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Registered Users</h2>
                  <!-- <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul> -->
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>SR.NO.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Gender</th>
                        <th>Date of registration</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                        $count = mysqli_num_rows($result);             
                        if($count > 0 ){ 
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        $b = $row['tech_can_id'];
                      ?>
                      <tr>
                        <td><?php echo $row['tech_can_id']; ?></td>
                        <td><?php echo $row['tech_can_fullname']; ?></td>
                        <td><?php echo $row['tech_can_email']; ?></td>
                        <td><?php echo $row['tech_can_mobile']; ?></td>
                        <td><?php echo $row['tech_can_gender']; ?></td>
                        <td><?php echo $row['tech_can_dor']; ?></td>
                        <td><a href='update_list.php?tech_can_id=<?php echo $b;?>'>View &nbsp;</a>
                            <a href='edit_details.php?tech_can_id=<?php echo $b;?>''>Edit &nbsp;</a>
                            <a href='users/hr/hr_reject.php?tech_can_id=<?php echo $b;?>''>Reject &nbsp;</a>
                            <a href='users/hr/hr_approve.php?tech_can_id=<?php echo $b;?>''>Approve &nbsp;</a>
                        </td>
                      </tr>
                      <?php }} else {?>
                      <tr>
                        <td colspan='7'><?php echo "No data"; ?></td>
                      </tr>
                      <?php }?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>         
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>