<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://www.tutorialspoint.com/how-to-create-a-dropdown-navigation-bar-with-css">
  
    <!-- Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    
    <title>ZOOTOPIA | Home Page</title>
    <style>
      <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<style>
.menu-btn {
   background-color: pink;
   color: lightblue;
   padding: 16px;
   font-size: 20px;
   font-weight: bolder;
   font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
   border: none;
}
.dropdown-menu {
   position: relative;
   display: inline-block;
}
.menu-content {
   display: none;
   position: absolute;
   background-color: #017575;
   min-width: 160px;
   z-index: 1;
}
nav{
   background-color: #017575;
}
.links,.links-hidden{
   display: inline-block;
   color: rgb(255, 255, 255);
   padding: 12px 16px;
   text-decoration: none;
   font-size: 18px;
   font-weight: bold;
}
.links-hidden{
   display: block;
}
.links{
   display: inline-block;
}
.links-hidden:hover,.links:hover {
   background-color: rgb(8, 107, 46);
}
.dropdown-menu:hover .menu-content {
   display: block;
}
.dropdown-menu:hover .menu-btn {
   background-color: lightblue;
}
</style>
</head>
<body>
  <section class="dark-section">
  <!-- Logo -->
  <div class="container-fluid">
<nav class="navbar navbar-dark dark-section">
  <a class="navbar-brand" href="index.php">
    <img src="images/logo.png" alt="logo image" width="200" height="200" class="image">
  </a>
<nav class="navbar navbar-expand-lg navbar-dark dark-section">
  <a class="navbar-brand" href="index.php">🦊ZOOTOPIA🐰</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#about">🐒ABOUT<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.php">🐯ANIMAL GALLERY</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="useracc.php">🦁VISIT US NOW!</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tickets.php">📆BOOK TICKETS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="visitorinfo.php">👨‍👩‍👧‍👦VISITOR INFO</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#contact">🐊CONTACT</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="adminpage.php">💻ADMIN</a>
      </li>
      
      <li class="nav-item dark-section">
        <div class="dropdown-menu dark-section">
        <button class="menu-btn">🐘SUPPORT</button>
        <div class="menu-content">
        <a class="links-hidden" href="sponsors.php">ADD SPONSOR</a>
        <a class="links-hidden" href="sponsorinfo.php">SPONSOR INFO</a>
        </div>
        </div>
      </li>
</nav>
</nav>
</div>
</section>

<section>
<div id="demo" class="carousel slide light-section container-fluid" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/animals.jpg" alt="The wildlife family" width="1500" height="700">
      <div class="carousel-caption">
        <h3>The Exotic Wildlife</h3>
        <p>The treasure of the zoo and the nature!!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/cub.jpg" alt="Cub" width="1500" height="700">
      <div class="carousel-caption">
        <h3>Fierce Fauna</h3>
        <p>Get an insight into the life of the fierce and ferocious fauna!!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/birds_3.jpg" alt="bird" width="1500" height="700">
      <div class="carousel-caption">
        <h3>Beady birds</h3>
        <p>A wide range of the flightless living-beings!!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/cub.jpg" alt="Cub" width="1500" height="700">
      <div class="carousel-caption">
        <h3>Fierce Fauna</h3>
        <p>Get an insight into the life of the fierce and ferocious fauna!!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</section>

<section class="my-5 dark-section">
  <div class="py-5 container-fluid" id="about" >
    <h1 class="text-center">🍃About Us</h1>
  </div>
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src = "images/animals_2.jpg" class="img-fluid">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h3 class="display-4">WELCOME TO THE WORLD OF ZOOTOPIA!!</h3>
      <h3 class="py-5">We at Zootopia, give you the bliss of blessing your eyes with the exotic wildlife and birds from all over the world.From the Bengal Tiger to the Sambar deer , from the Asian Koel to the Indian Cobra our zoo is a treasure that has all the wide variety of animals and birds"</h3>
      <a href="about.php" class="btn btn-success ml-5 mb-5">Check More</a>
    </div>
  </div>
</div>
</section>

<section class="light-section" id="contact">
  <div class="container-fluid">

            <h1>📞Contact Us</h1>
        <div id="service">
            <div class="box">
                 
                <!-- Email -->
                <img src="images/gmail.png" alt= "gmailimage">
                <br>
                 
                    <!-- Displaying text at
                    the center of the box-->
                <p class="center">
                    Use this Email to send us about the problem faced
                </p>
                <p>zootopiaadmin@gmail.com</p>
 
            </div>
            <div class="box">
                <img src="images/phone.png" alt= "phone image">
                <br>
                 
                <!-- Displaying text at
                    the center of the box-->
                <p class="center">
                    Toll Free Number
                </p>
                <p>+1800 200 300 400</p>
 
            </div>
        </div>
    </section>
</div>
</section>
<footer class="background dark-section">
        <p class="text-footer">
            Copyright@ All rights are reserved
        </p>
 
    </footer>
    
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>