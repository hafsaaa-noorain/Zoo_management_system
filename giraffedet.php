<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
	body
	{
		font-style:Serif;
		color: maroon;
    font-weight:bold;
    text-align:center;
  background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));
    font-size: 20px;
    padding: 100px;
    margin:80px;
	}

<?php include 'link.php';?>
</style>
</head>
<body>

					<?php
					include 'connection.php';
					$selectquery = "SELECT * FROM tblanimal where ID=3";
					$query= mysqli_query($conn , $selectquery);
					$nums = mysqli_num_rows($query);
					while($res = mysqli_fetch_array($query)){
					
					?>
					
						<?php echo $res['AnimalName'] ."<br>"; ?>
						<?php echo $res['CageNumber']."<br>"; ?>
						<?php echo $res['FeedNumber']."<br>";?>
						<?php echo $res['Breed']."<br>"; ?>
						<?php echo $res['Description']."<br>"; ?>

<?php
}
?>
</body>
</html>

