<?php
session_start();
error_reporting(0);
include('connection.php');

if(isset($_POST['login']))
  {
    $adminuser=$_POST['username'];
    $password=md5($_POST['password']);
    $query=mysqli_query($conn,"select ID from tbladmin where  UserName='$adminuser' && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['zmsaid']=$ret['ID'];
     header('location:dashboard.php');
    }
    else{
     echo '<script>alert("Invalid Detail.")</script>';
    }
  }
  ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login - 🦊ZOOTOPIA🐰</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
        .login-area {
    background: #F3F8FB;
}

.login-box {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    min-height: 100vh;
}

.login-box form {
    margin: auto;
    width: 450px;
    max-width: 100%;
    background: #fff;
    border-radius: 3px;
}

.login-form-head {
    text-align: center;
    background: #8655FC;
    padding: 50px;
}

.login-form-head h4 {
    letter-spacing: 0;
    text-transform: uppercase;
    font-weight: 600;
    margin-bottom: 7px;
    color: #fff;
}

.login-form-head p {
    color: #fff;
    font-size: 14px;
    line-height: 22px;
}

.login-form-body {
    padding: 50px;
}

.form-gp {
    margin-bottom: 25px;
    position: relative;
}

.form-gp label {
    position: absolute;
    left: 0;
    top: 0;
    color: #b3b2b2;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}

.form-gp.focused label {
    top: -15px;
    color: #7e74ff;
}

.form-gp input {
    width: 100%;
    height: 30px;
    border: none;
    border-bottom: 1px solid #e6e6e6;
}

.form-gp input::-webkit-input-placeholder {
    color: #dad7d7;
}

.form-gp input::-moz-placeholder {
    color: #dad7d7;
}

.form-gp input:-ms-input-placeholder {
    color: #dad7d7;
}

.form-gp input:-moz-placeholder {
    color: #dad7d7;
}

.form-gp i {
    position: absolute;
    right: 5px;
    bottom: 15px;
    color: #7e74ff;
    font-size: 16px;
}

.rmber-area {
    font-size: 13px;
}

.submit-btn-area {
    text-align: center;
}

.submit-btn-area button {
    width: 100%;
    height: 50px;
    border: none;
    background: #fff;
    color: #585b5f;
    border-radius: 40px;
    text-transform: uppercase;
    letter-spacing: 0;
    font-weight: 600;
    font-size: 12px;
    box-shadow: 0 0 22px rgba(0, 0, 0, 0.07);
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}

.submit-btn-area button:hover {
    background: #2c71da;
    color: #ffffff;
}

.submit-btn-area button i {
    margin-left: 15px;
    -webkit-transition: margin-left 0.3s ease 0s;
    transition: margin-left 0.3s ease 0s;
}

.submit-btn-area button:hover i {
    margin-left: 20px;
}

.login-other a {
    display: block;
    width: 100%;
    max-width: 250px;
    height: 43px;
    line-height: 43px;
    border-radius: 40px;
    text-transform: capitalize;
    letter-spacing: 0;
    font-weight: 600;
    font-size: 12px;
    box-shadow: 0 0 22px rgba(0, 0, 0, 0.07);
}

.login-other a i {
    margin-left: 5px;
}

.login-other a.fb-login {
    background: #8655FC;
    color: #fff;
}

.login-other a.fb-login:hover {
    box-shadow: 0 5px 15px rgba(44, 113, 218, 0.38);
}

.login-other a.google-login {
    background: #fb5757;
    color: #fff;
}

.login-other a.google-login:hover {
    box-shadow: 0 5px 15px rgba(251, 87, 87, 0.38);
}

.form-footer a {
    margin-left: 5px;
}

/* login-s2 */

.login-s2 {
    background: #fff;
    position: relative;
    z-index: 1;
    overflow: hidden;
}

.login-s2:before {
    content: '';
    position: absolute;
    height: 206%;
    width: 97%;
    background: #fcfcff;
    border-radius: 50%;
    left: -42%;
    z-index: -1;
    top: -47%;
    box-shadow: inset 0 0 51px rgba(0, 0, 0, 0.1);
}

.login-s2 .login-form-head,
.login-s2 .login-box form,
.login-s2 .login-box form .form-gp input {
    background: transparent;
}

.login-s2 .login-form-head h4,
.login-s2 .login-form-head p {
    color: #444;
}

/* login-s3 */

.login-bg {
    background: url(../images/bg/singin-bg.jpg) center/cover no-repeat;
    position: relative;
    z-index: 1;
}

.login-bg:before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    z-index: -1;
    height: 100%;
    width: 100%;
    background: #272727;
    opacity: 0.7;
}



/* register 4 page */

.login-box-s2 {
    min-height: 100vh;
    background: #f9f9f9;
    width: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}

.login-box-s2 form {
    margin: auto;
    background: #fff;
    width: 100%;
    max-width: 500px;
}
</style>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form action="#" method="post" name="login">
                  
                    <div class="login-form-head">
                        <h4>🦊ADMIN LOGIN🐰</h4>
                        <p>Sign in and start managing your Zoo details</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputEmail1">User Name</label>
                            <input type="text" id="username" name="username" required="true">
                            <i class="ti-user"></i>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" id="password" name="password" required="true">
                            <i class="ti-lock"></i>
                        </div>
                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                
                            </div>
                            <div class="col-6 text-right">
                                <a href="forgot-password.php">Forgot Password?</a>
                            </div>
                        </div>
                        <div style="padding-top: 20px">
                                <a href="adminlogin.php">SUBMIT</a>
                            </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>