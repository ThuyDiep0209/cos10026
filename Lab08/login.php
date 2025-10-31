<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 08</title>
</head>

<body>
    <?php include 'header.inc'; ?>
    <main class="container">
        <h2>Login</h2>
        <form method="post" action="process.php">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required><br>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required><br>

            <!-- Hidden field to store token -->
            <input type="hidden" name="token" value="D1234567"> <!-- Example: first initial + student ID -->

            <input type="submit" value="Login">
        </form>
    </main>
    <?php include 'footer.inc'; ?>


</body>

</html>