<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Rohirrim Tour Booking Confirmation</title>
</head>

<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
    <?php
    // Lay du lieu tu form, kiem tra isset()
    // isset() kiem tra xem nguoi dung co nhap gia tri do khong
    // Neu co -> lay gia tri
    // Neu khong -> gan chuoi rong '' de tranh loi
    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
    $lastname  = isset($_POST['lastname']) ? $_POST['lastname'] : '';
    $species   = isset($_POST['species']) ? $_POST['species'] : '';
    $age       = isset($_POST['age']) ? $_POST['age'] : '';
    $food      = isset($_POST['food']) ? $_POST['food'] : 'None';
    $partysize = isset($_POST['partysize']) ? $_POST['partysize'] : '';

    // Cac tour da chon
    // PHP tao mot mang $tours chua cac tour ma nguoi dung da chon
    // Neu nguoi dung tick Accommodation va 4 Day Tour thi mang se la:
    $tours = [];
    if (isset($_POST['accom'])) $tours[] = 'Accommodation';
    if (isset($_POST['4day']))  $tours[] = 'Four-day tour';
    if (isset($_POST['10day'])) $tours[] = 'Ten-day tour';

    // In ket qua, hien thi thong tin
    echo "<p>Welcome $firstname $lastname !</p>";
    // Su dung toan tu ba ngoi: Neu nguoi dung co chon tour -> hien ten tour ra. Neu khong -> in ra "No tours selected"
    echo "<p>You are now booked on the " . (!empty($tours) ? implode(" and ", $tours) : "No tours selected") . "</p>";

    // Species mapping neu muon in ten day du
    $speciesMap = ['M' => 'Human', 'D' => 'Dwarf', 'E' => 'Elf', 'H' => 'Hobbit'];
    // Su dung toan tu ba ngoi
    $speciesFull = isset($speciesMap[$species]) ? $speciesMap[$species] : 'Unknown';
    // In cac thong tin con lai
    echo "<p>Species: $speciesFull</p>";
    echo "<p>Age: $age</p>";
    echo "<p>Meal Preference: $food</p>";
    echo "<p>Number of travellers: $partysize</p>";
    ?>
</body>

</html>