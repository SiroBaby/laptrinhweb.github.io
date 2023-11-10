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
$query = "SELECT * FROM dondathang";
$result = $conn->query($query);
$result = laydonhang();
if ($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Ma_DH"] . "</td>";
        echo "<td>" . $row["Ngay_lap"] . "</td>";
        echo "<td>" . $row["Username"] . "</td>";
        echo "<td>" . $row["SDT"] . "</td>";
        echo "<td>" . $row["Tong_thanh_toan"] . "</td>";
        echo "<td>" . $row["Tinh_trang"] . "</td>";
        echo "<td>" . $row["Noi_nhan"] . "</td>";
        echo "</tr>";
    }
}else {
    echo "<tr><td colspan='7'>Không có đơn đặt hàng nào.</td></tr>";
}

echo "</table>";

$conn->close();

return $result;}
// Đóng kết nối cơ sở dữ liệu
$conn->close();
?>
