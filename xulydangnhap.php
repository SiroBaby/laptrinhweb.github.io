<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kết nối đến cơ sở dữ liệu
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dl store";

    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }

    
    $sodienthoai = $_POST['sodienthoai'];
    $matkhau = $_POST['matkhau'];

    // Thực hiện xác thực người dùng trong cơ sở dữ liệu
    $sql = "SELECT * FROM users WHERE sodienthoai = '$sodienthoai' AND matkhau = '$matkhau'";
    $result = $conn->query($sql);

    if ($result->num_rows > 1) {
        echo "Đăng nhập thành công!";
        header("location:index.php");//Chuyển hướng đến trang chủ
        exit();
    } else {
        // Người dùng không tồn tại hoặc thông tin đăng nhập không đúng
        echo "Đăng nhập thất bại. Vui lòng kiểm tra lại thông tin đăng nhập.";
    }

    $conn->close();
}
?>
