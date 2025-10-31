<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewh4ort" content="width=device-width, initial-scale=1.0">
    <title>Task 2: Exh4erimenting with Arrays</title>
</head>


<body>
    <h1>PHP Variables, Arrays and Operators</h1>
    <h4>The days of the week in English are :</h4>
    <?php
    $days = ["Mon", "Tue", "Wed", "Thus", "Fri", "Sat", "Sun"];
    // $days = array("Mon", "Tue", "Wed", "Thus", "Fri", "Sat", "Sun");
    echo "<p>" . implode(", ", $days) . "</p>";

    ?>
    <hr>
    <h4>Days in the week in French are</h4>
    <?php
    $days = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
    echo "<p>" . implode(", ", $days) . "</p>";
    //implode(", ", $days) sẽ nối các phần tử mảng bằng dấu phẩy. Hàm inplode dùng để chuyển mảng thành chuỗi.

    ?>


</body>

</html>