<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP Variables, arrays and operators</title>
</head>

<body>
    <h1>PHP variables, arrays and operators</h1>
    <hr>
    <?php
    $marks = array(85, 85, 95); //declares and inititalise array
    $marks[1] = 90; //modify second element
    $ave = ($marks[0] + $marks[1] + $marks[2]) / 3; //Compute Average
    if ($ave >= 50)
        $status = "PASSED";
    else
        $status = "FAILED";
    echo "<p> The Average score is $ave. You $status. </p>"
    ?>

</body>

</html>