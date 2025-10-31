<?php
session_start();
include 'header.inc';
?>

<div class="container">
    <?php
    if (isset($_SESSION['user'])) {
        echo "<h2>Welcome, " . htmlspecialchars($_SESSION['user']) . "!</h2>";
        echo "<p>You have successfully logged in using session and hidden field verification.</p>";
    } else {
        header('Location: login.php');
        exit();
    }
    ?>
</div>

<?php include 'footer.inc'; ?>