<!DOCTYPE html>
<html>

<body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="<?php echo base_url('esshs_controller/login');?>">
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="uname" required="" />
                <span><?php echo form_error('uname'); ?></span>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="pwd" required="" />
                <span><?php echo form_error('pwd'); ?></span>
              </div>
              <?php if ($this->session->flashdata('error')) {
              	echo "<script type='text/javascript'>
						alertify.error('Invalid Username or Password!').show();
						</script>";
              } ?>
              <div>
                <button type="submit" class="btn btn-info">Login</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Hello Admin!</h1>
                  <!-- <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p> -->
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
