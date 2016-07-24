<?php
session_start();
require_once("../connection.php");
$usr = $_POST['username'];
$pass = $_POST['password'];
$usrdata = mysql_query("SELECT * FROM user WHERE username = '$usr'");
$IsAvaliable = mysql_num_rows($usrdata);
$result = mysql_fetch_assoc($usrdata);
if(isset($_POST['btnLogin'])) {
if($IsAvaliable = 0) {
echo '<div id="eror">Username not registered</div>';
} else {
if($pass <> $result['password']) {
echo '<div id="eror">Incorret Username or Password</div>';
} else {
$_SESSION['username'] = $result['username'];
header('location:../../upload.php');
}
}
}
?>