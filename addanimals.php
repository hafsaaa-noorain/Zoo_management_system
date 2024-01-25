<?php
session_start();
include('connection.php');
error_reporting(0);
if(isset($_POST['submit']))
  {
    $aname=$_POST['aname'];
    $cnum=$_POST['cnum'];
    $fnum=$_POST['fnum'];
    $breed=$_POST['breed'];
    $desc=$_POST['desc'];
   $aimg=$_FILES["image"]["name"];
$extension = substr($aimg,strlen($aimg)-4,strlen($aimg));
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Image has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{

$aimg=md5($aimg).time().$extension;
 move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$aimg);
 $ret=mysqli_query($conn,"select CageNumber,FeedNumber from tblanimal where CageNumber='$cnum' || FeedNumber='$fnum'");
 $result=mysqli_fetch_array($ret);
 if($result>0){

echo "<script>alert('This cage number or feed number is already alloted to other animal');</script>";
    }
    else{
   
        $query=mysqli_query($con, "insert into  tblanimal(AnimalName,CageNumber,FeedNumber,Breed,Description,AnimalImage) value('$aname','$cnum','$fnum','$breed','$desc','$aimg')");
    if ($query) {
    
     echo '<script>alert("Animal detail has been added.")</script>';
  }
  else
    {
       echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }
}
}
}
  ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add Animal Details - 🦊ZOOTOPIA🐰</title>
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
    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<style>
    .page-container {
    background-image: linear-gradient(180deg,cyan, lightyellow);
    width: 100%;
    height: 100%;
    min-height: 100vh;
    /*padding-left: 280px;*/
    -webkit-transition: padding-left 0.3s ease 0s;
    transition: padding-left 0.3s ease 0s;
}

.sbar_collapsed.page-container {
    padding-left: 0;
}

.card {
    border: none;
    border-radius: 4px;
    background-image: linear-gradient(180deg,lightpink,lightgreen);
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}

.card:hover {
    box-shadow: 0 5px 30px rgba(0, 0, 0, 0.02);
}

.card-body {
    padding: 25.6px;
    padding: 1.6rem;
}

.h-full {
    height: 100%;
}

.main-content {
    width: 100%;
    background: #F3F8FB;
}

/*.main-content-inner {
    padding: 0 30px 50px;
}*/

.form-control,
.form-control:focus {
    outline: none;
    box-shadow: none;
}

.form-rounded {
    border-radius: 40px;
}

.form-control {
    font-size: 14px;
    border: 1px solid rgba(170, 170, 170, .3);
    padding: 10.72px 12.8px;
    padding: .67rem .8rem;
}

.form-control-sm,
.input-group-sm>.form-control,
.input-group-sm>.input-group-append>.btn,
.input-group-sm>.input-group-append>.input-group-text,
.input-group-sm>.input-group-prepend>.btn,
.input-group-sm>.input-group-prepend>.input-group-text {
    padding: 4px 8px;
    padding: .25rem .5rem;
}

.form-control-lg,
.input-group-lg>.form-control,
.input-group-lg>.input-group-append>.btn,
.input-group-lg>.input-group-append>.input-group-text,
.input-group-lg>.input-group-prepend>.btn,
.input-group-lg>.input-group-prepend>.input-group-text {
    padding: 13.6px 16px;
    padding: .85rem 1rem;
}

label {
    font-style:serif;
    font-weight: 500;
    font-weight:bold;
    color: brown;
    display: inline-block;
    margin-bottom: 8px;
    margin-bottom: .5rem;
}

.font-14 {
    font-size: 14px;
}

.input-rounded {
    border-radius: 50px;
}

.custom-file-label,
.custom-file-input,
.custom-file {
    height: calc(2.25rem + 7px);
    padding: 10.8px 12px;
    padding: .675rem .75rem;
}

.custom-file-label:after {
    height: calc(calc(2.25rem + 7px) - 1px * 2);
    padding: 10.8px 12px;
    padding: .675rem .75rem;
}

.grid-col {
    padding: 10px 15px;
    background: #f3f8fb;
    margin-bottom: 30px;
    color: black;
   /* border: 1px solid #e3e6e8;*/
}

.custom-control-label {
    margin-top: 2px;
}
</style>
</head>
<body>
    
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
     <?php include_once('includes/sidebar.php');?>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
          <?php include_once('includes/header.php');?>
            <!-- header area end -->
            <!-- page title area start -->
           <?php include_once('includes/pagetitle.php');?>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
          
                    <div class="col-lg-12 col-ml-12">
                        <div class="row">
                            <!-- basic form start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Add Animal Detail</h4>
                                        <form method="post" enctype="multipart/form-data">
                                             <div class="form-group">
                                                <label for="exampleInputEmail1">Animal Name</label>
                                                <input type="text" class="form-control" id="aname" name="aname" aria-describedby="emailHelp" placeholder="Enter animal Name" value="" required="true">
                                            </div>
                                         <div class="form-group">
                                                <label for="exampleInputEmail1">Animal Image</label>
                                                <input type="file" class="form-control" id="image" name="image" aria-describedby="emailHelp" value="" required="true">
                                                
                                            </div>
                                           
                                           <div class="form-group">
                                                <label for="exampleInputEmail1">Cage Number</label>
                                                <input type="text" class="form-control" id="cnum" name="cnum" aria-describedby="emailHelp" placeholder="Enter cage number" value="" required="true" maxlength="5">
                                            </div> 
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Feed Number</label>
                                                <input type="text" class="form-control" id="fnum" name="fnum" aria-describedby="emailHelp" placeholder="Enter feed number" value="" required="true" maxlength="6">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Breed</label>
                                                <input type="text" class="form-control" id="breed" name="breed" aria-describedby="emailHelp" placeholder="Enter breed" value="" required="true">
                                            </div>
                                                <label for="exampleInputEmail1">Description</label>
                                                <input type="text" class="form-control" id="desc" name="desc" aria-describedby="emailHelp" placeholder="Enter Description of animal" value="" required="true">
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4" name="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- basic form end -->
                         
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <?php include_once('includes/footer.php');?>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    
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
<?php  ?>