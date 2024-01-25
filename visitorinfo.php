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
  background-color: #111;
}

/* Control the right side */
.right {
	font:size=30px;
  right: 0;
  background-color: red;
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
	color:white;
}
</style>
</head>
<body>
	<div class="split left">
  <div class="centered">
  	<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    BASED ON GENDER
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <a href="gendermale.php" button class="dropdown-item" type="button">MALE</br></button></a>
    <a href="genderfemale.php" button class="dropdown-item" type="button">FEMALE</button></a>
  </div>
</div>
	</div> 
  </div>
<div class="split right">
  <div class="centered">
  	<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    BASED ON VISITOR TYPE
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <a href="indian.php" button class="dropdown-item" type="button">INDIAN</br></button></a>
    <a href="foreigner.php" button class="dropdown-item" type="button">FOREIGNER</button></a>
  </div>
</div>
  </div>
</div>
</body>
</html>