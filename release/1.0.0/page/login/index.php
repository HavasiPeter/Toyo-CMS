<?php
	session_start();
		if (isset($_SESSION['username'])) {
		header('location:../../upload.php'); }
		require_once("../connection.php");
		include('login_user.php');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Toyosatomimi Files - Free Sharing Hosting</title>
  <link href="../css/bitnami.css" media="all" rel="Stylesheet" type="text/css" /> 
  <link href="../css/all.css" rel="stylesheet" type="text/css" />
  <style type="text/css">
	#eror{
		width:345px;;
		border:red 1px solid;
		margin-left:auto;
		margin-right:auto;
		margin-bottom:5px;
		padding:0 0 0 5px;
	}
	#msg{
		width:345px;;
		border:green 1px solid;
		margin-left:auto;
		margin-right:auto;
		margin-bottom:5px;
		padding:0 0 0 5px;
	}
	</style>
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
          <li class=""><a href="#">Home</a></li>
          <li class="active"><a href="#">Login</a></li>
          <li class=""><a href="../register/">Sign Up</a></li>
          <li class=""><a target="_blank" href="../status.php">Server Status</a></li>
        </ul>
      </section>
    </nav>
  </div>
    <div id="wrapper">
      <div class="hero">
  <div class="row">
    <div class="large-12 columns">
      <h1>Login</h1>
    </div>
  </div>
</div>
<div class="row">
  <div class="large-12 column">
    <p>Please fill field with username and password</p>
	<form method="post" enctype="multipart/form-data" action="">
    <div class="row">
      <div class="large-8 small-9 columns">
        <input type="text" name="username" placeholder="Username">
		<input type="password" name="password" placeholder="Password" class="pass">
      </div>
        <input type="submit" name="btnLogin" class="success button" value="Login"/>
		<br>
		Don't have account? <a href="../register/">Register Now!</a>
    </div>
    </form>
  </div>
</div>
</body>
</html>