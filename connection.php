<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "zoo management system"; 
$conn = mysqli_connect($servername , $username , $password , $database);
if($conn)
{
	?>
	<script>
	alert ('connection successful');
	</script>
	<?php 
} else{
	die ("no connection successful".mysqli_connect_error());
}
?>