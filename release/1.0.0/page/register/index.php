<?php session_start();
if(isset($_SESSION['username'])) {
header('location:../../upload.php'); }
include('register_user.php');
?>
<center>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Register - Toyosatomimi Files</title>
  <link href="../css/bitnami.css" media="all" rel="Stylesheet" type="text/css" /> 
  <link href="../css/all.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="contain-to-grid">
    <nav class="top-bar" data-topbar>
      <ul class="title-area">
        <li class="name">
          <h1><a href="../../">Toyosatomimi Files</a></h1>
        </li>
        <li class="toggle-topbar menu-icon">
          <a href="#">
            <span>Menu</span>
          </a>
        </li>
      </ul>

      <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">
          <li class=""><a href="../../">Home</a></li>
          <li class=""><a href="../login/">Login</a></li>
          <li class="active"><a href="#">Sign Up</a></li>
          <li class=""><a target="_blank" href="../status.php">Server Status</a></li>
        </ul>
      </section>
    </nav>
  </div>
    <div id="wrapper">
      <div class="hero">
  <div class="row">
    <div class="large-12 columns">
      <h1>Register</h1>
    </div>
  </div>
</div>
<div class="row">
  <div class="large-12 columns">
    <p>Register account has benefit <b>10 GB</b> Free Storage with High <b>Full speed</b> without delay, Please insert fill below to contunie registration.</p>
    <form method="post" enctype="multipart/form-data" action="">
        <p>Username :<input type="text" name="username" placeholder="Username"></p>
		<p>Password :<input type="password" name="password" placeholder="Password" class="pass"></p>
		<p>Re-Type Password :<input type="password" name="password-e" placeholder="Re-Type Password" class="pass"></p>
		<p>E-Mail :<input type="text" name="address" placeholder="example@email.com"></p>
        <input type="submit" name="btnRegister" class="success button" value="Register"/>
    </form>
  </div>
</div>
</body>
</html>