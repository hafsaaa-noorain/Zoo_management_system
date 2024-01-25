<!DOCTYPE html>
<html>
<head>
<style>
    body{
    margin:0;
    padding:0;
    font-family:montserrat;
    background:linear-gradient(120deg,#2980b9,#8e44ad);
    height:100vh;
    /* overflow:hidden; */
}
.center{
    position:absolute;
    top:80%;
    left:50%;
    transform:translate(-50%,-50%);
    width:500px;
    background:white;
    border-radius:10px;
}
.center h1{
    text-align:center;
    padding: 0 0 20px 0;
    border-bottom:3px solid silver;
}
.center form{
    padding:0 40px;
    box-sizing:border-box;
}
form .txt_field{
    position: relative;
    /*border-bottom :2px solid #adadad;*/
    margin: 30px 0;
}
.txt_field input{
    width:100%;
    padding: 0 5px;
    height: -60px;
    font-size: 15px;
    border: none;
    background: none;
    outline :none;
}
.txt_field label{
    /* position:absolute; */
    top: 50%;
    left: 5px;
    color: #adadad;
    transform: translateY(-50%);
    font-size: 15px;
pointer-events:none;
    transition: .5s;
}
.txt_field span::before{
    content:'';
    position:absolute;
    top:40px;
    left:0;
    width:100%;
    height:2px;
    background:#2691d9;
    transition: .5s;
}
.txt_field input:focus ~label,
.txt_field input:valid label{
    top: -5px;
    color:#2691d9;
}
.txt_field input:focus ~span::before,
.txt_field input:valid ~span::before{
    width:100%;
}
.pass{
    margin: -5px 0 20px 5px;
    color : #a6a6a6;
    cursor : pointer;
}
.pass:hover{
    text-decoration: underline;
}
input[type="submit"]{
    width: 100%;
    height: 50px;
    border: 1px solid;
    background: #2691d9;
    border-radius : 25px;
    font-size: 12px;
    color: #e9f4fb;
    font-weight: 700;
    cursor: pointer;
    outline:none;
}

input[type="submit"]: hover{
    border-color: #2691d9;
    transition : .5s;
}
</style>

</style>
</head>
<body>

<div class="center">
	<h1>🐾We appreciate your kind support!</h1>
	<form action ="addsponsor.php" method="post">
	<div class="txt_field">
		<input type="text" name="SPONSOR_NAME">
		<span></span>
		<label>Name</label>
	</div>
		<div class="txt_field">
		<input type="password" name="SPON_PASSWORD">
		<span></span>
		<label>Password</label>
	</div>
	
	<div class="txt_field">
		<input type="quantity" name="AMOUNT_SPONSORED">
		<span></span>
		<label>Enter amount in INR</label>
	</div>
	<div class="txt_field">
		<input type="email" name="SPON_EMAIL">
		<span></span>
		<label>Enter e-mail</label>
	</div>
	
	<div class="txt_field">
		<input type="NUMBER" name="CONTACT_NUMBER">
		<span></span>
		<label>Mobile number</label>
	</div>
	<div class="pass">Forgot Password</div>
	<input type="submit"value="Sponsor!">
		
</form>
</div>
</body>
</html>