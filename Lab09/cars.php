<?php
// ===============================
// File: cars.php
// Muc dich: Hien thi tat ca ban ghi xe trong bang HTML
// ===============================

// Goi file chua thong tin ket noi
require_once("settings.php");

// Ket noi toi database
$conn = @mysqli_connect($host, $user, $pwd, $sql_db);

// Kiem tra ket noi
if (!$conn) {
    echo "<p>Khong the ket noi den database</p>";
} else {
    // Cau lenh SQL lay tat ca du lieu tu bang cars
    $query = "SELECT * FROM cars";

    // Thuc thi cau lenh SQL
    $result = mysqli_query($conn, $query);

    // Kiem tra xem co du lieu hay khong
    if ($result) {
        echo "<!DOCTYPE html>";
        echo "<html lang='en'>";
        echo "<head>";
        echo "<meta charset='UTF-8'>";
        echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "<title>Danh sach xe</title>";
        echo "<style>
                body { font-family: Arial, sans-serif; margin: 40px; background-color: #f8f9fa; }
                table { border-collapse: collapse; width: 80%; margin: auto; background-color: #fff; box-shadow: 0 2px 6px rgba(0,0,0,0.1); }
                th, td { border: 1px solid #ddd; padding: 10px; text-align: center; }
                th { background-color: #4CAF50; color: white; }
                tr:nth-child(even) { background-color: #f2f2f2; }
              </style>";
        echo "</head>";
        echo "<body>";
        echo "<h2 style='text-align:center;'>Danh sach xe cua cua hang</h2>";

        // Neu co ban ghi
        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Hang xe</th><th>Dong xe</th><th>Gia</th><th>Nam san xuat</th></tr>";

            // In tung dong du lieu ra bang
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['car_id'] . "</td>";
                echo "<td>" . $row['make'] . "</td>";
                echo "<td>" . $row['model'] . "</td>";
                echo "<td>$" . number_format($row['price'], 0) . "</td>";
                echo "<td>" . $row['yom'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            // Neu khong co du lieu
            echo "<p style='text-align:center;'>Khong co xe de hien thi.</p>";
        }

        echo "</body></html>";

        // Giai phong tai nguyen
        mysqli_free_result($result);
    } else {
        echo "<p>Co loi xay ra khi truy van du lieu.</p>";
    }

    // Dong ket noi
    mysqli_close($conn);
}