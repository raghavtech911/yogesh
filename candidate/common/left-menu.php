<div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i><span>Techinfini</span></a>
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

                  <li ><a href="dashboard.php"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <?php if($role != 1 && $role != 2){?>
                  <li><a href="list.php"><i class="fa fa-edit"></i> List <span class="fa fa-chevron-down"></span></a>
                  <?php }?>
                  </li>
                  <?php if($role == 1){?>
                     <li><a href="rejected_list.php"><i class="fa fa-edit"></i> Rejected <span class="fa fa-chevron-down"></span></a>
                     <li><a href="approved_list.php"><i class="fa fa-edit"></i> Approved <span class="fa fa-chevron-down"></span></a>
                  <?php }?>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
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
            </div>
            <!-- /menu footer buttons -->
          </div>