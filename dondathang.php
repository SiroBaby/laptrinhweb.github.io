<!DOCTYPE html>
<html lang="en">
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/donhang.css" rel="stylesheet" type="text/css">
</head>
<body class="body">
    <div id="logo">
        <img src="https://i.pinimg.com/564x/77/ef/75/77ef756d65375e2bed903092c592f063.jpg"  height="200" width="200" >
    </div><br>
    <a href="index.php" id="link" >Trang chủ / </a> Đơn hàng 
    <div class="row">
        <div class="col">
            <table class="bang">

                <?php include "xulydondathang.php"?>
        

            </table>
        </div>
        <div class="col">
            <img src="https://i.pinimg.com/564x/77/ef/75/77ef756d65375e2bed903092c592f063.jpg" id="sanpham">
        </div>  
    </div>
        <a href="chitietdondathang.php" id="xemchitiet"> Xem chi tiết </a>
</body>
