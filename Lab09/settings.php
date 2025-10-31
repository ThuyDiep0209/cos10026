<?php
// ===============================
// File: settings.php
// Muc dich: Luu thong tin ket noi den co so du lieu
// ===============================

// Ten may chu (localhost vi XAMPP chay tren may tinh ca nhan)
$host = "localhost";

// Ten nguoi dung mac dinh cua MySQL trong XAMPP
$user = "root";

// Mat khau mac dinh cua MySQL (thuong de trong)
$pwd = "";

// Ten co so du lieu da tao trong phpMyAdmin
$sql_db = "exhibition_db";

// Ket noi va luu vao bien $conn de dung chung
$conn = mysqli_connect($host, $user, $pwd, $sql_db);

// Kiem tra ket noi
if (!$conn) {
    die("Khong the ket noi den database: " . mysqli_connect_error());
}