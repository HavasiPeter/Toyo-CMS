<?php require_once("../connection.php");
$usr = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['address'];
$IsAvaliable = mysql_query("SELECT * FROM user WHERE username = '$usr'");
if(mysql_num_rows($IsAvaliable) <> 0) {
echo "Username aleardy registered!";
} else {
if(!$username || !$pass || !$email) {
echo "Please fill all text!";
} else {
$simpan = mysql_query("INSERT INTO user(username, password,email) VALUES('$usr','$pass','$email')");
if($simpan) {
echo "Registered sucessfully.";
header('location:register_success.php');
} else {
echo "Unexpected error. Please report this bug on support section.";
}
}
}
?>