<!DOCTYPE html>
<html>
<head>
  <style>
    .split {
      font-size :30px;
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Control the left side */
.left {
  font-size:30px;
  left: 0;
  background-color: lightpink;
}

/* Control the right side */
.right {
  font:size=30px;
  right: 0;
  background-color: lightgoldenrodyellow;
}

/* If you want the content centered horizontally and vertically */
.centered {
  font-size:30px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

/* Style the image inside the centered container, if needed */
.centered img {
  width: 150px;
  border-radius: 50%;
}
a{
  color:darkgoldenrod;
}
</style>
</head>
<body>
  <div class="split left">
  <div class="centered">
    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <a href="addanimals.php" button class="dropdown-item" type="button">ADD ANIMALS</br></button></a>
  </div>
</div>
  </div> 
  </div>
<div class="split right">
  <div class="centered">
    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <a href="showticket.php" button class="dropdown-item" type="button">DISPLAY TICKETS BOOKED</br></button></a>
  </div>
</div>
  </div>
</div>
</body>
</html>