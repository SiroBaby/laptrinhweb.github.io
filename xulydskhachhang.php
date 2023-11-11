<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dlstore";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['Ma_User'] . "</td>";
        echo "<td>" . $row['Username'] . "</td>";
        echo "<td>" . $row['SDT'] . "</td>";
        echo "<td>" . $row['Email'] . "</td>";
        echo "<td>" . $row['Password'] . "</td>";
        echo "<td>" . $row['Role'] . "</td>";
        echo '<td id="tuychon">
                <button type="button" id="sua" name="sua" onclick="suaKhachHang(' . $row['Ma_User'] . ')">Sửa</button>
                <button type="button" id="xoa" name="xoa" onclick="xoaKhachHang(' . $row['Ma_User'] . ')">Xóa</button>
                <button type="button" id="them" name="them" onclick="themKhachHang('.$row['Ma_User'].')">Thêm</button>
            </td>';
        echo "</tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
