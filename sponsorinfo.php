<!DOCTYPE html>
<html>
<head>
<title></title>
<?php include 'link.php';?>

</head>
<body>
	<div class = "main-div">
		<h1> SPONSOR INFO</h1>
	<div class ="center-div">
		<div class="table-responsive">
			<table>
				<thead>
					<tr>
						<th>NAME</th>
						<th>AMOUNT SPONSORED</th>
						<th>EMAIL ID</th>
						<th>CONTACT NUMBER</th>
					</tr>
				</thead>
				<tbody>
					<?php
					include 'connection.php';
					$selectquery = "SELECT * FROM sponsors";
					$query= mysqli_query($conn , $selectquery);
					$nums = mysqli_num_rows($query);
					while($res = mysqli_fetch_array($query)){
					
					?>
					<tr>
						<td><?php echo $res['SPONSOR_NAME']; ?></td>
						<td><?php echo $res['AMOUNT_SPONSORED']; ?></td>
						<td><?php echo $res['SPON_EMAIL']; ?></td>
						<td><?php echo $res['CONTACT_NUMBER']; ?></td>
					</tr>
<?php
}
?>
					
				</tbody>

			</table>
		</div>
	</div>
	</div>
</body>
</html>