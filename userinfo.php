<?php
include 'connection.php';
$visitor_name = $_POST['visitor_name'];
$vis_password = $_POST['vis_password'];
$visitor_gender = $_POST['visitor_gender'];
$visitor_age = $_POST['visitor_age'];
$visitor_type = $_POST['visitor_type'];
$visitor_phone = $_POST['visitor_phone'];
$sql = "INSERT INTO visitors (visitor_name, vis_password,visitor_gender,visitor_age,visitor_type,visitor_phone) VALUES ('$visitor_name','$vis_password','$visitor_gender','$visitor_age','$visitor_type','$visitor_phone')";
$result = mysqli_query($conn, $sql);
?>