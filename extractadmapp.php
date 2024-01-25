<html>
<head>
    <link rel="stylesheet" href="adminmain.css">
</head>
<body style="background-color:white;">
<div style ="color:white;">
		
		<form method="POST" action="home.php">
            <button type="submit" class="cancelbtn" name="logout" style="float: right;font-size: 20px;font-family: cursive;">LOGOUT</button>
        </form>
	</div>
    <center>
    <h1 style="font-family: cursive; font-size: 30px;">Appointments</h1>
    <style>
    table{
        width:80%;
        border-collapse:separate;
        border: 5px black;
        padding: 2px;
        font-size: 30px;
        font-family: cursive;
    }
    th{
        border: 2px black;
        background-color:peru ;
        color: white;
        text-align: left;
    }
    tr,td{
        border: 2px black;
        background-color: whitesmoke;
        color:black;
    }
    </style>
    <?php require "DBconnect.php"; ?>
            <center>
            <?php
            if(isset($_POST['submit8'])){
                $date=$_POST['d2'];
              
            }

	        $sql1 = "Select * from appointments where date='$date' ";
			$result1=mysqli_query($conn, $sql1); 
            if($result1){
                echo "<table>
                <tr>
                <th>Patient Name</th>
                <th>Time</th>
                <th>Date</th>
                <th>Branch</th>
                
                </tr>";
                while($row1 = mysqli_fetch_array($result1))
                {
            
                
                            echo "<tr>";
                            echo "<td>" . $row1['pat_name'] . "</td>";
                            echo "<td>" . $row1['time'] . "</td>";
                            echo "<td>" . $row1['date']."</td>";
                            echo "<td>" . $row1['branch'] . "</td>";
                            
                            echo "</tr>";
                }
				
        }
				
		
     
        else{
            echo "<h2>No Appointments for the Day</h2>";
    }
        
   
	?>
</center>
</body>
</html>