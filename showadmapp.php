<html>
<head>
        <link rel="stylesheet" href="adminmain.css">
</head>
<body style="background-color:white;">
        <ul>
            <li class="dropdown"><p style="font-family: cursive;font-size: 40px;color: white;">ADMIN MODE</p></li>
            <br>
            <h2>
                <li class="dropdown">
                    <br><br>
                    <a class="dropbtn" style="font-family: cursive;">DOCTOR</a>
                    <div class="dropdown-content">
                        <a href="NewDoctor.php" style="font-family: cursive;">Add new Doctor</a>
                        <a href="DeleteDoctor.php" style="font-family: cursive;">Delete Doctor</a>
                        <a href="ShowDoctor.php" style="font-family: cursive;">Show Doctor</a>
                        <!--<a href="DoctorSchedule.php" style="font-family: cursive;">Doctor Schedules</a>-->
                    </div>
                </li>
                
                <li class="dropdown">
                    <br><br>
                    <a class="dropbtn" style="font-family: cursive;">Appointments</a>
                    <div class="dropdown-content">
                        <a href="showadmapp.php" style="font-family: cursive;">Show Appointments</a>
                        <!--<a href="DeleteBranch.php" style="font-family: cursive;">Delete Branch</a>
                        <a href="DeleteDoctorFromBranch.php" style="font-family: cursive;">Delete Doctor from a Branch</a>
                        <a href="showbranch.php" style="font-family: cursive;">Show Branch</a>-->
                    </div>
</li>
<li class="dropdown">
                    <br><br>
                    <a class="dropbtn" style="font-family: cursive;">Diagnosis</a>
                    <div class="dropdown-content">
                        <a href="diagdisplay.php" style="font-family: cursive;">Show Diagnosis and Bill for Patient </a>
                    </div>
            </li>
            <li>
                <br><br>
                <form method="POST" action="AdminLogin.php">
                    <button type="submit" class="cancelbtn" name="logout" style="float: left;font-size: 20px;font-family: cursive;">LOGOUT</button>
                </form>
            </li>
</div>
</ul>
        <center>
        <h1 style="font-family: cursive; font-size: 30px;">Check Appointments</h1>
        <form method="POST" action="extractadmapp.php">
         <label style="font-family: cursive; font-size: 20px;">Date:</label> <input type="date" name="d2" style="width: 15%;" required>
         <br>
         
        <br>
        <button type="submit" style="position:center" name="submit8">Check Appointments</button>
     </form>
</center>
                
</body>
</html>