
<?php
session_start(); ob_start();
// Thông tin kết nối cơ sở dữ liệu
$servername = "localhost";  
$username = "root";  
$password = "";  
$database = "dlstore";  

// Tạo kết nối đến cơ sở dữ liệu
$connect = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
if ($connect->connect_error) {
    die("Kết nối thất bại: " . $connect->connect_error);
}

// Tiếp tục xử lý đăng ký sau khi đã thiết lập kết nối cơ sở dữ liệu

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    $nhaplai = $_POST['nhaplai'];
    $email = $_POST['Email'];
    $SDT = $_POST['SDT'];
   

    // Thực hiện kiểm tra dữ liệu đầu vào
    if (empty($username) || empty($password) || empty($nhaplai) || empty($email) || empty($SDT)) {
        $message = "Vui lòng điền đầy đủ thông tin.";
        echo '<div style="color: red; text-align:center; margin: auto">'.$message.'</div>';
    } elseif ($password != $nhaplai) {
        $message = "Mật khẩu và mật khẩu nhập lại không khớp.";
        echo '<div style="color: red; text-align:center; margin: auto">'.$message.'</div>';
    } else {
       // Thực hiện truy vấn SQL kiểm tra trùng lặp email hoặc số điện thoại
    $checkQuery = "SELECT * FROM user WHERE Email = '$email' OR SDT = '$SDT'";
    $checkResult = $connect->query($checkQuery);

    if ($checkResult->num_rows > 0) {
        $message = "Email hoặc số điện thoại đã tồn tại trong hệ thống. Vui lòng nhập lại.";
        echo '<div style="color: red; text-align:center; margin: auto">'.$message.'</div>';
        header("Refresh:2; url=dangky.php");
    } else {
        // Nếu không có trùng lặp, thì thêm dữ liệu vào cơ sở dữ liệu
       
        $sql = "INSERT INTO user (Username, Password , Email, SDT) VALUES ('$username', '$password', '$email', '$SDT')";

        if ($connect->query($sql) === true) {
            $message = "Đăng ký thành công!";
            echo $message;
            header("Refresh:2; url=index.php");
            exit();
        } else {
            $message = "Lỗi: " . $sql . "<br>" . $connect->error;
        }

        $connect->close();
    }
}}
?>
<script>
            function togglePassword() {
                var passwordField = document.getElementById("matkhau");
                var confirmPasswordField = document.getElementById("nhaplai");

                if (passwordField.type === "password") {
                    passwordField.type = "text";
                    confirmPasswordField.type = "text";
                } else {
                    passwordField.type = "password";
                    confirmPasswordField.type = "password";
                }
            }
        </script>