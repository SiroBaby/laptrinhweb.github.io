<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kết nối đến cơ sở dữ liệu
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dlstore";

    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }

    
    $SDT = $_POST['SDT'];
    $password = $_POST['Password'];

    // Thực hiện xác thực người dùng trong cơ sở dữ liệu
    $sql = "SELECT * FROM user WHERE SDT = '$SDT' AND Password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
       
        header("location:index.php");//Chuyển hướng đến trang chủ
        exit();
    } else {
        // Người dùng không tồn tại hoặc thông tin đăng nhập không đúng
        $message="Sai số điện thoại, mật khẩu hoặc tài khoản không tồn tại. Đang quay lại đăng nhập";
    echo '<div style="color: red; text-align:center; margin: auto">'.$message.'</div>';
    header("Refresh:2; url=dangnhap.php");
    }
    $conn->close();
}
?>
