<!DOCTYPE html>
<html lang="en">

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url(); ?>assets/images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Transaction</h3>
                <ul class="nav side-menu">
                  <li><a href="#"><i class="fa fa-home"></i> Home </a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">General Form</a></li>
                      <li><a href="#?>">Form Validation</a></li>
                      <li><a href="#">Form Wizard</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Tables</a></li>
                      <li><a href="#">Table Dynamic</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">E-commerce</a></li>
                      <li><a href="#">Projects</a></li>
                      <li><a href="#">Project Detail</a></li>
                      <li><a href="#">Contacts</a></li>
                      <li><a href="#">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">403 Error</a></li>
                      <li><a href="#">404 Error</a></li>
                      <li><a href="#">500 Error</a></li>
                      <li><a href="#">Plain Page</a></li>
                      <li><a href="#">Login Page</a></li>
                      <li><a href="#">Pricing Tables</a></li>
                    </ul>
                  </li>
                </ul>
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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url(); ?>Esshs_controller/logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url(); ?>assets/images/user.png" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="<?php echo base_url(); ?>Esshs_controller/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->

        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Elements</h3>
              </div>
            </div>
            <div class="clearfix"></div>
           
            <!-- GRADE FORM -->
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Grade Form</h2>
                    <div class="col-md-7 col-sm-6 col-xs-12 form-group pull-right top_search">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                          <button class="btn btn-default" type="button">Go!</button>
                        </span>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div> 
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left input_mask" method="POST" action="<?php echo base_url('Esshs_controller/insert') ?>">
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback"> 
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" value="<?php echo $firstname; ?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="inputSuccess3" value="<?php echo $lastname; ?>">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess4" value="<?php echo $strand; ?>">
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="inputSuccess5" value="<?php echo $semester; ?>">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>
                      <!-- TABLE -->
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                          <div class="x_title">
                            <h2>Hover rows <small>Try hovering over the rows</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                              </li>
                              <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="#">Settings 1</a>
                                  </li>
                                  <li><a href="#">Settings 2</a>
                                  </li>
                                </ul>
                              </li>
                              <li><a class="close-link"><i class="fa fa-close"></i></a>
                              </li>
                            </ul>
                            <div class="clearfix"></div>
                          </div>
                          <!-- FOR ID -->
                          <input type="hidden" class="form-control"  value="<?php echo $student_id; ?>" name="student_id[]">
                          <!-- END ID -->
                          <div class="x_content">
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th>Subject Code</th>
                                  <th>Description</th>
                                  <th>Grade</th>
                                </tr>
                              </thead>
                              <!-- ABM 2nd SEMESTER -->
                              <?php 


                                $ABM = '<tbody>
                                <tr>
                                  <td>
                                    <input type="text" class="form-control" value="SJPCS15" name="code[]" readonly>
                                  </td>
                                  <td>
                                    <input type="text" readonly class="form-control" value="Understanding Culture, Society and Politics" name="subj[]">
                                  </td>
                                  <td>
                                    <input type="number" maxlength="2" minlength="2" class="form-control" required="required" name="grade[]" width="1860px">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="text" class="form-control" readonly value="SJPCS16" name="code[]">
                                  </td>
                                  <td>
                                    <input type="text" class="form-control" readonly value="Media and Information Litercy" name="subj[]">
                                  </td>
                                  <td>
                                    <input type="number" maxlength="2" minlength="2" class="form-control" required="required" name="grade[]">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="text" class="form-control" readonly value="SJPCS18" name="code[]">
                                  </td>
                                  <td>
                                    <input type="text" class="form-control" readonly value="Physics Education and Health 4" name="subj[]">
                                  </td>
                                  <td>
                                    <input type="number" maxlength="2" minlength="2" class="form-control" required="required" name="grade[]">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="text" class="form-control" readonly value="SJPAT4" name="code[]">
                                  </td>
                                  <td>
                                    <input type="text" class="form-control" readonly value="English for Academic and Professional Purposes" name="subj[]">
                                  </td>
                                  <td>
                                    <input type="number" maxlength="2" minlength="2" class="form-control" required="required" name="grade[]">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="text" class="form-control" readonly value="SJPAT5" name="code[]">
                                  </td>
                                  <td>
                                    <input type="text" class="form-control" readonly value="Inquiries, Investigations and Immersion" name="subj[]">
                                  </td>
                                  <td>
                                    <input type="number" maxlength="2" minlength="2" class="form-control" required="required" name="grade[]">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="text" class="form-control" readonly value="SJPABM6" name="code[]">
                                  </td>
                                  <td>
                                    <input type="text" class="form-control" readonly value="Business Finance" name="subj[]">
                                  </td>
                                  <td>
                                    <input type="number" maxlength="2" minlength="2" class="form-control" required="required" name="grade[]">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="text" class="form-control" readonly value="SJPABM7" name="code[]">
                                  </td>
                                  <td>
                                    <input type="text" class="form-control" readonly value="Principles of Marketing" name="subj[]">
                                  </td>
                                  <td>
                                    <input type="number" maxlength="2" minlength="2" class="form-control" required="required" name="grade[]">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="text" class="form-control" readonly value="SJPABM8" name="code[]">
                                  </td>
                                  <td>
                                    <input type="text" class="form-control" readonly value="Business Ethics and Social Responsibility" name="subj[]">
                                  </td>
                                  <td>
                                    <input type="number" maxlength="2" minlength="2" class="form-control" required="required" name="grade[]">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="text" class="form-control" readonly value="SJPOJT" name="code[]">
                                  </td>
                                  <td>
                                    <input type="text" class="form-control" readonly value="Business Works Immersion/Culminating Activity" name="subj[]">
                                  </td>
                                  <td>
                                    <input type="number" maxlength="2" minlength="2" class="form-control" required="required" name="grade[]">
                                  </td>
                                </tr>
                                </tbody>';
                                if ($strand == 'ABM') {
                                  echo $ABM;
                                }else{
                                  echo "No data";
                                }
                               ?>
                            </table>
                          </div>
                        </div>
                      </div>
                      <!-- //TABLE -->

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="button" class="btn btn-primary">Cancel</button>
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success" name="submit">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- /GRADE FORM -->
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets/vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url(); ?>assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="<?php echo base_url(); ?>assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="<?php echo base_url(); ?>assets/vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url(); ?>assets/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="<?php echo base_url(); ?>assets/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="<?php echo base_url(); ?>assets/vendors/autosize/dist/autosize.min.js"></script>
    <!-- Multi Select -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/dependent/jquery.lwMultiSelect.js"></script>
    <!-- jQuery autocomplete -->
    <script src="<?php echo base_url(); ?>assets/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="<?php echo base_url(); ?>assets/vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>assets/build/js/custom.min.js"></script>
  
  </body>
</html>




