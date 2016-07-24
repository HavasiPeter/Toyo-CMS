<?php session_start();
if(!isset($_SESSION['username'])) {
header('location:../login/'); }
else { $usr = $_SESSION['username']; }
require_once("../connection.php");
$query = mysql_query("SELECT * FROM user WHERE username = '$username'");
$hasil = mysql_fetch_array($query);
$email_usr = $hasil['email'];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>My Files</title>
  <link href="../css/bitnami.css" media="all" rel="Stylesheet" type="text/css" /> 
  <link href="../css/all.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="contain-to-grid">
    <nav class="top-bar" data-topbar>
      <ul class="title-area">
        <li class="name">
          <h1><a href="/page/account"><?php echo "Welcome, $usr"; ?></a></h1>
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
          <li class=""><a href="../../upload.php">Upload</a></li>
          <li class=""><a href="../../status.php">Server Status</a></li>
          <li class="active"><a href="">My Account</a></li>
		  <li class=""><a href="../../logout/">Logout</a></li>
        </ul>
      </section>
    </nav>
  </div>
    <div id="wrapper">
      <div class="hero">
  <div class="row">
    <div class="large-12 columns">
      <h1>My Account</h1>
    </div>
  </div>
</div>
<div class="row">
  <div class="large-12 columns">
    <dl class="accordion">
	<?php
	echo '
	<p>Username : '.$usr.'</p>
	<p>Email : '.$email_usr.'</p>
	';
	?>
<table class="table" width="100%" cellpadding="3" cellspacing="0">
            	<tr>
                	<th width="30">No.</th>
                    <th width="80">Date Upload</th>
                    <th>File Name</th>
                    <th width="70">Size</th>
					<th width="120">Action</th>
                </tr>
                <?php
				include('..\includes\file_function.php');
				$sql = mysql_query("SELECT * FROM files WHERE userowner = '$usr' ORDER BY datecreated DESC");
				if(mysql_num_rows($sql) > 0){
					$no = 1;
					while($data = mysql_fetch_assoc($sql)){
						$file_name = $data['filename'];
						$file_url = $data['downloadlink'];
						$link_file = "../page/download/$file_name";
						$link_download = "../../download/index.php?link=$file_url";
						echo '
						<tr>
							<td align="center">'.$no.'</td>
							<td align="center">'.$data['datecreated'].'</td>
							<td>'.$data['filename'].'</td>
							<td align="center">'.formatBytes($data['size']).'</td>
							<td align="center"><a target="_blank" href="'.$link_download.'"><input type="submit" class="button" value="Download"/></a><a href="'.$link_file.'"><input type="submit" name="btndelete" class="alert button" value="Delete"/></a></td>
							
						</tr>
						';
						$no++;
					}
				}else{
					echo '
					<tr bgcolor="#fff">
						<td align="center" colspan="4" align="center">Tidak ada data!</td>
					</tr>
					';
				}
				?>
  </div>
</div>
</body>
</html>