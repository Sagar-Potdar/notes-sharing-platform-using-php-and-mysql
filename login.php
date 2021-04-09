<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<?php
session_start();
if (isset($_POST['login'])) {
  $username  = $_POST['user'];
  $password = $_POST['pass'];
  mysqli_real_escape_string($conn, $username);
  mysqli_real_escape_string($conn, $password);
$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn , $query) or die (mysqli_error($conn));
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    $user = $row['username'];
    $pass = $row['password'];
    $name = $row['name'];
    $email = $row['email'];
    $role= $row['role'];
    $course = $row['course'];
    if (password_verify($password, $pass )) {
      $_SESSION['id'] = $id;
      $_SESSION['username'] = $username;
      $_SESSION['name'] = $name;
      $_SESSION['email']  = $email;
      $_SESSION['role'] = $role;
      $_SESSION['course'] = $course;
      header('location: dashboard/');
    }
    else {
      echo "<script>alert('invalid username/password');
      window.location.href= 'login.php';</script>";

    }
  }
}
else {
      echo "<script>alert('invalid username/password');
      window.location.href= 'login.php';</script>";

    }
}
?>
<style>
img{
  width:70px;
  height:70px;
  border: 1px solid black;
  border-radius: 100%;
  margin-left: 170px;
  opacity: 90%;
}
.login-card{
  font-family: 'Golden';
  background-color: transparent;
  margin-left: 0px;
  color: yellow;
  border: 2px solid transparent;
  width: 500px;
  
}
body{
  background-image: url("form1.jpg");
}
p{
  color: white;
  font-family: 'Anton', sans-serif;;

}
input.login.login-submit{
  border: 3px solid blue;
  border-radius: 30px;
  width: 100px;
  background-color: blue;
}
input.login.login-submit:hover{
  background-color: transparent;
  border: 1px solid blue;
  color: lightblue;
  width: 110px;
}
</style>
  <div class="login-card">
    <img src="log.jpeg" alt=""><br>
    <h1 style="color: orange">Log in</h1><br>
  <form method="POST">
    <input style="color: white; background-color: transparent; border-left-color: transparent; border-top-color: transparent; border-right-color: transparent;" type="text" name="user" placeholder="Username" required="">
    <input style="color: white; background-color: transparent; border-left-color: transparent; border-top-color: transparent; border-right-color: transparent;" type="password" name="pass" placeholder="Password" required="">
    <center><input type="submit" name="login" class="login login-submit" value="login"></center>
  </form>    
  <div class="login-help">
    <a href="signup.php"><p>Register</p></a> • <a href="recoverpassword.php"><p>Forgot Password</p></a>
  </div>
</div>

  <script src='css/jquery.min.js'></script>
<script src='css/jquery-ui.min.js'></script>

  
</body>
</html>
