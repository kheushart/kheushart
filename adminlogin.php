<?php
session_start();
include("header.php");
include("dbconnection.php");
if(isset($_SESSION[adminid]))
{
	echo "<script>window.location='adminaccount.php';</script>";
}
if(isset($_POST[submit]))
{
	$sql = "SELECT * FROM admin WHERE loginid='$_POST[loginid]' AND password='$_POST[password]' AND status='Active'";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_num_rows($qsql) == 1)
	{
		$rslogin = mysqli_fetch_array($qsql);
		$_SESSION[adminid]= $rslogin[adminid] ;
		echo "<script>window.location='adminaccount.php';</script>";
	}
	else
	{
		echo "<script>alert('Identifiant de connexion et mot de passe saisis invalides..'); </script>";
	}
}
?>
<!DOCTYPE html>
<head>
<style>
body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: black;
}
.box{
    width: 300px;
    padding: 40px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background: #191919;
    text-align: center;
}
.box h1{
    color: white;
    text-transform: uppercase;
    font-weight: 500;
}
.box input[type = "text"],.box input[type = "password"]{
    border:0;
    background: transparent;
    display: block;
    margin: 10px auto ;
    text-align: center;
    border: 2px solid white;
    padding: 14px 10px;
    width: 200px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
}
.box input[type = "text"]:focus,.box input[type = "password"]:focus{
    width: 280px;
    border-color: black;
}
.box input[type ="submit"]{
    border:0;
    background: none;
    display: block;
    margin: 10px auto ;
    text-align: center;
    border: 2px solid black;
    padding: 14px 40px;
    width: 200px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s; 
    cursor: pointer;
}
.box input[type ="submit"]:hover{
    background: black;
}
</style>
<body>

<form method="post" class="box" action="" name="frmadminlogin" onSubmit="return validateform()">
        <h1>Login</h1>
        <center>
  <input type="text" name="loginid" id="loginid" placeholder="Username"/><br>
  <input type="password" name="password" id="password" placeholder="Password" /><br>
		 <input type="submit" name="submit" id="submit" value="Login" />
			</center>
		</form>
		
    </body>
<script type="application/javascript">
var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
var alphanumericExp = /^[0-9a-zA-Z]+$/; //Variable to validate numbers and alphabets
var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; //Variable to validate Email ID 

function validateform()
{
	if(document.frmpatlogin.loginid.value == "")
	{
		alert("L'identifiant de connexion ne doit pas être vide..");
		document.frmpatlogin.loginid.focus();
		return false;
	}
	else if(document.frmpatlogin.password.value == "")
	{
		alert("Le mot de passe ne doit pas être vide..");
		document.frmpatlogin.password.focus();
		return false;
	}
	else if(document.frmpatlogin.password.value.length < 8)
	{
		alert("Le mot de passe doit être supérieure à 8 caractères...");
		document.frmpatlogin.password.focus();
		return false;
	}
}
	</script>