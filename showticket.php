<!DOCTYPE html>
<html>
<head>
<title></title>
<?php include 'link.php';?>

</head>
<body>
	<div class = "main-div">
		<h1>TICKETS INFO</h1>
	<div class ="center-div">
		<div class="table-responsive">
			<table>
				<thead>
					<tr>
						<th>NAME</th>
						<th>GENDER</th>
						<th>AGE</th>
						<th>CONTACT NUMBER</th>
						<th>RIDE</th>
						<th>CATEGORY</th>
						<th>COST</th>
						<th>DATE AND TIME OF BOOKING</th>

					</tr>
				</thead>
				<tbody>
					<?php
					include 'connection.php';
					$selectquery = "SELECT v.visitor_name, v.visitor_gender,v.visitor_age,v.visitor_phone, t.RIDE,tt.RIDE_TYPE ,t.dateandtime
					from visitors v , ticket t , ticket_type tt
					 where v.vis_password=t.vis_password and t.category=tt.category";
					$query= mysqli_query($conn , $selectquery);
					$nums = mysqli_num_rows($query);
					while($res = mysqli_fetch_array($query)){
					
					?>
					<tr>
						<td><?php echo $res['visitor_name']; ?></td>
						<td><?php echo $res['visitor_gender']; ?></td>
						<td><?php echo $res['visitor_age']; ?></td>
						<td><?php echo $res['visitor_phone']; ?></td>
						<td><?php echo $res['RIDE']; ?></td>
						<td><?php echo $res['RIDE_TYPE']; ?></td>
						<td><?php echo "RS.120"; ?></td>
						<td><?php echo $res['dateandtime']; ?></td>
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