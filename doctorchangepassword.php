<?php
session_start();
include("headers.php");
include("dbconnection.php");
if(isset($_POST[submit]))
{
	$sql = "UPDATE doctor SET password='$_POST[newpassword]' WHERE password='$_POST[oldpassword]' AND doctorid='$_SESSION[doctorid]'";
	$qsql= mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Le mot de passe a été mis à jour avec succès..');</script>";
	}
	else
	{
		echo "<script>alert('Échec de la mise à jour du mot de passe..');</script>";		
	}
}
?>
<!DOCTYPE html>
<html>
<style>
	body{
    min-height: 100vh;
    background-color:  white;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=date], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=time], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #071f44;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
	background: linear-gradient(120deg,white,#071f44,#071f44);
}


</style>
<body>
<div class="wrapper col4">
  <div id="container">
    <h1>Changer Mot de Passe</h1>
   <form method="post" action="" name="frmdoctchangepass" onSubmit="return validateform()">
      
          <td width="34%">Ancien Mot de Passe  
          <td width="66%"><input type="password" name="oldpassword" id="oldpassword" />  
          
          
            Nouveau Mot De Passe  
            <input type="password" name="newpassword" id="newpassword" />  
          
          
            Confirmation Mot de Passe  
            <input type="password" name="password" id="password" />  
          
          
          <input type="submit" name="submit" id="submit" value="Modifier" />  
  
    </form>
    <p>&nbsp;</p>
  </div>
</div>
</div>
 <div class="clear"></div>
  </div>
</div>
</body>
<script type="application/javascript">
function validateform1()
{
	if(document.frmdoctchangepass.oldpassword.value == "")
	{
		alert("L'ancien mot de passe ne doit pas être vide..");
		document.frmdoctchangepass.oldpassword.focus();
		return false;
	}
	else if(document.frmdoctchangepass.newpassword.value == "")
	{
		alert("Le nouveau mot de passe ne doit pas être vide..");
		document.frmdoctchangepass.newpassword.focus();
		return false;
	}
	else if(document.frmdoctchangepass.newpassword.value.length < 8)
	{
		alert("La longueur du nouveau mot de passe doit être supérieure à 8 caractères...");
		document.frmdoctchangepass.newpassword.focus();
		return false;
	}
	else if(document.frmdoctchangepass.newpassword.value != document.frmdoctchangepass.password.value )
	{
		alert(" Le nouveau mot de passe et le mot de passe de confirmation doivent être égaux..");
		document.frmdoctchangepass.password.focus();
		return false;
	}
	else
	{
		return true;
	}
}
</script>
