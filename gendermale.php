<!DOCTYPE html>
<html>
<head>
<title></title>
<?php include 'link.php';?>

</head>
<body>
	<div class = "main-div">
		<h1> The visitors to ZOOTOPIA</h1>
	<div class ="center-div">
		<div class="table-responsive">
			<table>
				<thead>
					<tr>
						<th>Name</th>
						<th>Gender</th>
						<th>Age</th>
						<th>Type</th>
						<th>Contact</th>
						<th colspan="2">operation</th>
					</tr>
				</thead>
				<tbody>
					<?php
					include 'connection.php';
					$selectquery = "SELECT * FROM visitors where VISITOR_GENDER='M' order by visitor_name ";
					$query= mysqli_query($conn , $selectquery);
					$nums = mysqli_num_rows($query);
					while($res = mysqli_fetch_array($query)){
					
					?>
					<tr>
						<td><?php echo $res['VISITOR_NAME']; ?></td>
						<td><?php echo $res['VISITOR_GENDER']; ?></td>
						<td><?php echo $res['VISITOR_AGE']; ?></td>
						<td><?php echo $res['VISITOR_TYPE']; ?></td>
						<td><?php echo $res['VISITOR_PHONE']; ?></td>
						<td><i class="fa fa-edit" aria-hidden="true"></i></td>
						<td><i class="fa fa-trash" aria-hidden="true"></i></td>
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
