<?php
include 'connection.php';
$vis_password = $_POST['vis_password'];
$RIDE = $_POST['RIDE'];
$CATEGORY = $_POST['CATEGORY'];
$dateandtime = $_POST['dateandtime'];
$sql = "INSERT INTO ticket (vis_password,RIDE,CATEGORY,dateandtime) VALUES ('$vis_password','$RIDE','$CATEGORY','$dateandtime')";
$result = mysqli_query($conn, $sql);
?>