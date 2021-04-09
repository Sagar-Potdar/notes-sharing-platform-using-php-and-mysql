<!DOCTYPE html>
<html>
<head>
<style>
h1{
    text-align: center;
}

p{
    margin: 5px 50px;
}
.container1{
    background-color: rgb(211, 159, 159);
    border: 1px solid;
    margin-top: 40px;
    height: 300px;
    border-radius: 80px;
    padding: 60px;
    
}
p1{
    color: yellow;
    margin-left: 520px;
    margin-top: 14px;
    font-size: 30px;

}
footer{
    width: 100%;
    margin-top: 100px;
    background-color: black;
    padding: 10px;
    color: white;

}
p{
    font-family: 'Goldman', cursive;
}
img{
    margin-left: -100px;
    margin-top: -10px;
}
</style>
</head>
<body style="background-color: brown;">
<img src="logo2.gif" alt="Loading">

<marquee style="margin-left: -100px; margin-right: -100px;" scrollamount="10" loop="infinite" bgcolor="orange" onmouseover="this.stop()" onmouseout="this.start()"><strong><b>Online Notes Sharing is a platform from where users can share their notes, manage and can edit the uploaded notes in a click. The uploaded notes will not get published untill the admin approves it</b></strong>
</marquee>
<p1>About Us</p1>
   <div class="container1">
     <h1 style="color: red">Online Notes Sharing Platform</h1>
     <p>“Online Note Sharing” is the project used for sharing notes using website. Notes that the user wants for the particular subject can be found in the website.This project is written in PHP and MYSQL.
<br>
* Firstly, the user need to sign up and then, they can log in to the system. 
<br>
* They will get their own dashboard where they can see the numbers of notes for the particular faculty. 
<br>
*After, that they can download it and read the notes. They can even upload the notes if they have some . 
<br>
*They can even edit the profile like name,profile,change password. 
<br>
*Eventually, in admin side they can see all the users who are using it. 
<br>
*Admin has the authority to delete the users too. 
<br>
*If the user had uploaded the notes then admin check the note and is it is usable then they will approved it and all the other user will get the note according to the faculty.</p>
    </div>
    
     <footer><center>Copyright 2020-2021 online notes sharing</center></footer>
<?php
echo "";
?>

</body>
</html>

<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<?php
