<div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><img src="https://dynamic.placementindia.com/recruiter_comp_logo/560989.png" class="img-circle" alt="" style="width:40px;height:40px;"><span> Techinfini </span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="assets/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION['user']['tech_users_username']; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">

                  <li ><a href="dashboard.php"><i class="fa fa-home"></i> Home </a>
                  </li>
                  <?php if($role != 1 && $role != 2){?>
                  <li><a href="list.php"><i class="fa fa-edit"></i> List </a>
                  <?php }?>
                  </li>
                  <?php if($role == 1){?>
                     <li><a href="rejected_list.php"><i class="fa fa-edit"></i> Rejected </a>
                     <li><a href="approved_list.php"><i class="fa fa-edit"></i> Approved </a>
                  <?php }?>
              </div>
            </div>
            <!-- /sidebar menu -->
            <!-- <span class="fa fa-chevron-down"></span> -->

            <!-- /menu footer buttons -->
            <!-- <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div> -->
            <!-- /menu footer buttons -->
          </div>