<?php
// settings.php
$servername = "localhost";
$dbusername = "root"; 
$dbpassword = "";     
$dbname = "lab10";    
// tao ket noi
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

// kiem tra ket noi
if (!$conn) {
    die("Ket noi that bai: " . mysqli_connect_error());
}
?>