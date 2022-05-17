<?php
session_start();
?>
<style>
body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: #071f44;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: black;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
<?php
if(isset($_SESSION[adminid]))
{
?>
<div class="topnav" id="myTopnav">
  <a href="adminaccount.php" class="active">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Profile
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="adminprofile.php">Admin Profile</a>
    <a href="adminchangepassword.php">Changer Mot de Passe</a>
    <a href="addadmin.php" style="width:150px;">Ajouter Admin</a>
    <a href="viewadmins.php" style="width:150px;">Voir Admin</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Patient
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="addpatient.php">Ajouter Patient</a>
    <a href="viewpatient.php">Voir Patient</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Rendez-vous
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
     <a href="appointment.php" style="width:200px;">Nouveau rendez-vous</a>
     <a href="viewappointmentpending.php" style="width:200px;">Afficher les rendez-vous en attente</a>
     <a href="viewappointmentapproved.php" style="width:200px;">Afficher les rendez-vous approuvés</a>
     <a href="viewtreatmentrecord.php">Traitement</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Docteur
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
     <a href="doctor.php">Ajouter Docteur</a>
     <a href="Viewdoctor.php">Voir Docteur</a>
      <a href="doctortimings.php">Ajouter des horaires de médecin</a>
     <a href="viewdoctortimings.php">Voir les horaires des médecins</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Autres
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
     <a href="department.php" style="width:150px;">Ajouter un département</a>
    	 <a href="Viewdepartment.php" style="width:150px;">Afficher le département</a>
         <a href="treatment.php" style="width:150px;">Ajouter un type de traitement</a>
         <a href="viewtreatment.php" style="width:150px;">Voir les types de traitement</a>
       	 <a href="medicine.php" style="width:150px;">Ajouter un médicament</a>
    	 <a href="Viewmedicine.php" style="width:150px;">Voir Medicine</a>
    </div>
  </div> 
  <a href="logout.php">Deconnecter</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<?php
}
?>
<?php
if(isset($_SESSION[doctorid]))
{
?>
<div class="topnav" id="myTopnav">
  <a href="doctoraccount.php" class="active">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Rendez-vous
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="viewappointmentpending.php">En attente de rendez-vous</a>
      <a href="viewappointmentapproved.php">Nominations approuvées</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Profile
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="doctorprofile.php">Voir Profile</a>
      <a href="doctorchangepassword.php">Changer Mot De Passe</a>
       <a href="viewdoctortimings.php">Afficher les horaires</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Patient
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="viewpatient.php">Afficher les patients</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Traitement
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="viewtreatmentrecord.php">Afficher les dossiers de traitement</a>
    <a href="viewtreatment.php">View Treatment</a>
    </div>
  </div> 
  <a href="logout.php">Deconnecter</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<?php
}
?>
<?php
if(isset($_SESSION[patientid]))
{
?>
<div class="topnav" id="myTopnav">
  <a href="patientaccount.php" class="active">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Rendez-vous
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="patientappointment.php">Prendre rendez-vous</a>
      <a href="viewappointment.php">Afficher les rendez-vous</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Profile
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="patientprofile.php">Voir le profil</a>
      <a href="patientchangepassword.php">Changer le mot de passe</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Prescription
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="patientprescription.php">Voir l'ordonnance</a>
      <a href="viewtreatmentrecord.php">Voir Traitement</a>
    </div>
  </div> 
  <a href="logout.php">Deconnecter</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<?php
}
?>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
