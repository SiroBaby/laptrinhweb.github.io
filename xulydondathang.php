<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$database = "dlstore";

$conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
function laydonhang(){
    global $conn;
    $q

// Truy vấn cơ sở dữ liệu
$query = "SELECT * FROM dondathang";
$result = $conn->query($query);

return $result;}
// Đóng kết nối cơ sở dữ liệu
$conn->close();
?>
