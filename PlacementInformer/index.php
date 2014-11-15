<!DOCTYPE html>
<html>


<?php
session_start();
if (isset($_SESSION['username']))
{
    header('Location: IN/studentHome.php');
}
?>
<head>
      <link rel="SHORTCUT ICON" href="images/rvce.ico">

  <meta charset="UTF-8">

  <title>Placement Informer</title>

  <link rel='stylesheet prefetch' href='css/animate.min.css'>
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,400italic,700italic,700'>

    <link rel="stylesheet" href="css/style1.css" media="screen" type="text/css" />
<style>


.logo{
width:20%;
position:absolute;
left:46%;
top:10%;

}
.proj-name{
width:30%;
position:absolute;
left:39.5%;
top:70%;


}

</style>
</head>

<body style="background-color:#fff">


  <div class="logo">
  <img src="images/logo.png">
</div>


  <div class='form animated flipInX'>
  <h2>Login</h2>
  <form method="POST" action="IN/php/loginCheck.php">
    <input placeholder='USN' type='text' name="username" id="username" required >
    <input placeholder='Password' type='password' name="password"  id="password" required >
    <button class='animated infinite pulse'>Login</button>
  </form>
</div>
<div class="proj-name">
  <h1 id="proj-head">Placement Informer</h1>
</div>


  <script src='js/jquery1.js'></script>

  <script src="js/index1.js"></script>

</body>

</html>