<?php
include 'connection.php';
$SPONSOR_NAME = $_POST['SPONSOR_NAME'];
$SPON_PASSWORD = $_POST['SPON_PASSWORD'];
$AMOUNT_SPONSORED = $_POST['AMOUNT_SPONSORED'];
$SPON_EMAIL= $_POST['SPON_EMAIL'];
$CONTACT_NUMBER = $_POST['CONTACT_NUMBER'];
$sql = "INSERT INTO sponsors (SPONSOR_NAME, SPON_PASSWORD ,AMOUNT_SPONSORED,SPON_EMAIL,CONTACT_NUMBER) VALUES ('$SPONSOR_NAME','$SPON_PASSWORD ','$AMOUNT_SPONSORED','$SPON_EMAIL','$CONTACT_NUMBER')";
$result = mysqli_query($conn, $sql);
?>