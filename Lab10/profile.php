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

$username = $_SESSION['username'];

// lay thong tin user
$sql = "SELECT * FROM user WHERE username='$username'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Profile</title>
</head>

<body>
    <h2>Profile Page</h2>
    <p>Username: <?php echo $user['username']; ?></p>
    <p>Email: <?php echo $user['email']; ?></p>

    <h3>Edit Profile</h3>
    <form method="post" action="update_profile.php">
        New Email: <input type="email" name="email" value="<?php echo $user['email']; ?>" required>
        <input type="submit" name="update" value="Update Email">
    </form>

    <br><a href="logout.php">Logout</a>
</body>

</html>