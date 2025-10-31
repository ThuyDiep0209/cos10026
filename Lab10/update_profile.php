<?php
session_start();

// Ket noi database
$conn = mysqli_connect("localhost", "root", "", "lab10");
if (!$conn) {
    die("Ket noi that bai: " . mysqli_connect_error());
}

// kiem tra dang nhap
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['update'])) {
    $username = $_SESSION['username'];
    $new_email = mysqli_real_escape_string($conn, $_POST['email']);

    $sql = "UPDATE user SET email='$new_email' WHERE username='$username'";
    if (mysqli_query($conn, $sql)) {
        header("Location: profile.php"); // quay ve profile sau khi update
        exit();
    } else {
        echo "Cap nhat that bai: " . mysqli_error($conn);
    }
}
?>