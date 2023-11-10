<?php
include ("dbcon.php");
$tt = new dbcon;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/chitietsanpham.css" rel="stylesheet" type="text/css">
</head>
<body class="body">
    <div id="logo">
        <img src="https://i.pinimg.com/564x/77/ef/75/77ef756d65375e2bed903092c592f063.jpg"  height="200" width="200" >
    </div><br>
    <a href="index.php" id="link">Trang chủ / </a> Chi Tiết Sản Phẩm
    <div class="row">
        <div class="col">
        <?php
        if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM sanpham WHERE Ma_SP = '$id'";
        $kq = $tt -> query($sql);
        $row = $kq -> fetch_assoc();
        echo"<div id='pic'><img height='450' width='450' src='". $row['Hinh_anh']."' id='sanpham' ></div>";
        }
        ?>
        </div>
        <div class="col">
        <div class='info'>   
        <p> Thông Tin Sản Phẩm </p>
            <?php
            if ($kq -> num_rows >0) {
                    echo "<table>";
                    echo "<tr><td>Mã sản phẩm:</td><td>".$row['Ma_Sp']."</td></tr>";
                    echo"<tr><td>Trọng lượng:</td><td>".$row['Trong_luong']."</td></tr>";
                    echo"<tr><td>Màu sắc:</td><td>".$row['Mau_sac']."</td></tr>";
                    echo"<tr><td>Độ tinh khiết:</td><td>".$row['Do_tinh_khiet']."</td></tr>";
                    echo"<tr><td>Kích thước:</td><td>".$row['Kich_thuoc']."</td></tr>";
                    echo"<tr><td>Hình dạng:</td><td>".$row['Hinh_dang']."</td></tr>";
                    echo"<tr><td>Mã loại:</td><td>".$row['Ma_loai']."</td></tr>";
                    echo"</table>";
                }
                echo"<p class='price'>Giá sản phẩm: ".$row['Gia_SP']."</p>";
            ?>
            <form method="get" action="giohang.php">
                <button id="mua"> Mua Ngay
                </a>
            </form>
            </div> 
        </div>
    </div>
</body>