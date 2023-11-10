<?php
include("dbcon.php");
$tt = new dbcon;
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM sanpham WHERE Ma_Sp = '$id'";
    $result = $tt->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Không tìm thấy sản phẩm.";
        exit;
    }
$tt->db->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/suadulieu.css" rel="stylesheet" type="text/css">
</head>
<body class="body">
    <div class="header">
        <img src="https://i.pinimg.com/564x/77/ef/75/77ef756d65375e2bed903092c592f063.jpg"  height="180" width="180" >
         <h2>Diamond Luxury Store</h2>
     </div>
     <div class="row1">Admin/ Quản Lý Kho Sản Phẩm/ Sửa Sản Phẩm</div>
        <div class="contents">
        <form method="POST" action="suadulieu_1.php" class="form"> 
        <legend id="legend"><h2>Sửa Sản Phẩm</h2></legend>
        <input type="hidden" name="id" value="<?php echo $row['Ma_Sp']; ?>">
        <label for="GiaSP">Giá Sản Phẩm</label></br>
        <input type="text" name="GiaSP" value="<?php echo $row['Gia_SP']; ?>" required><br>
        <label for="SL">Số Lượng</label></br>
        <input type="text" name="SL" value="<?php echo $row['So_luong']; ?>" required><br>
        <label for="TL">Trọng Lượng</label></br>
        <input type="text" name="TL" value="<?php echo $row['Trong_luong']; ?>" required><br>
        <label for="mau">Màu Sắc</label></br>
        <input type="text" name="mau" value="<?php echo $row['Mau_sac']; ?>" required><br>
        <label for="dotinhkhiet">Độ Tinh Khiết</label></br>
        <input type="text" name="dotinhkhiet" value="<?php echo $row['Đo_tinh_khiet']; ?>" required><br>
        <label for="KT">Kích Thước</label></br>
        <input type="text" name="KT" value="<?php echo $row['Kich_thuoc']; ?>" required><br>
        <label for="dang">Hình Dạng</label></br>
        <input type="text" name="dang" value="<?php echo $row['Hinh_dang']; ?>" required><br>
        <button type="submit" id="submit" name="sua"> Cập Nhật </button>
            </form>
        </div>
    </div>
    </div>
</body>
</html>