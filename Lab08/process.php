<?php
session_start(); // Bat dau phien lam viec de luu du lieu nguoi dung
?>

<?php include 'header.inc'; // Them file header vao trang ?>

<?php
// Lay du lieu gui tu form dang nhap
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$token = $_POST['token'] ?? '';

// Dinh nghia thong tin dang nhap dung
$correctUsername = 'Diep';
$correctPassword = '1234567';
$correctToken = 'D1234567';

// Kiem tra xem tat ca thong tin co trung khop khong
if ($username === $correctUsername && $password === $correctPassword && $token === $correctToken) {
    // Luu ten nguoi dung vao session de giu trang thai dang nhap
    $_SESSION['user'] = $username;
    // Chuyen huong den trang welcome
    header('Location: welcome.php');
    exit();
} else {
    // Neu thong tin dang nhap sai thi hien thong bao loi va lien ket quay lai trang login
    echo "<p style='text-align:center;color:red;'>Invalid login. Please try again.</p>";
    echo "<p style='text-align:center;'><a href='login.php'>Back to Login</a></p>";
}
?>

<?php include 'footer.inc'; // Them file footer vao trang ?>