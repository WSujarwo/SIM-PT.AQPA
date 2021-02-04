<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | Dashboard Aqpa</title>

  <!-- CSS -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
  <link rel="stylesheet" href="<?php echo base_url().'template/xman/assets/bootstrap/css/bootstrap.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'template/xman/assets/font-awesome/css/font-awesome.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'template/xman/assets/css/form-elements.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'template/xman/assets/css/style.css'?>">

<style type="text/css">
  body {
    background: url(template/imperial/img/company.png);
  }
</style>
        </head>
        <body>
          <div class="top-content" style="" >
            <div>
             <p><?php echo $this->session->flashdata('msg');?></p>
           </div>
           <!-- /.login-logo -->
           <div class="inner-bg">
            <div class="container">
              <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                  <h1>WELCOME TO <br><strong> AQPA INDONESIA LOGIN DASHBOARD</strong></h1>
                            <!-- <div class="description">
                              <p>
                                This is a free responsive login form made with Bootstrap. 
                                Download it on <a href="http://azmind.com"><strong>AZMIND</strong></a>, customize and use it as you like!
                              </p>
                            </div> -->
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                              <div class="form-top-left">
                                <h3>Login to our Dashboard</h3>
                                <p>Enter your username and password to log on:</p>
                              </div>
                              <div class="form-top-right">
                                <i class="fa fa-key"></i>
                              </div>
                            </div>
                            <div class="form-bottom">

                              <form role="form" action="<?php echo base_url().'administrator/auth'?>" method="post" class="login-form">
                                <div class="form-group">
                                  <label class="sr-only" for="form-username">Username</label>
                                  <input type="text" name="username" placeholder="Username..." class="form-username form-control" required>
                                </div>
                                <div class="form-group">
                                  <label class="sr-only" for="form-password">Password</label>
                                  <input type="password" name="password" placeholder="Password..." class="form-password form-control" required>
                                </div>
                                <div class="checkbox icheck">
                                  <label>
                                    <input type="checkbox"> Remember Me
                                  </label>
                                </div>
                                <button type="submit" class="btn btn-info">Sign in!</button>
                              </form>

                            </div>
                          </div>
                        </div>
                        

                      </div>
                    </div>

                  </div>


                  <!-- /.social-auth-links -->

                </body>
                </html>
