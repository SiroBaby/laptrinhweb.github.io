<?php
include("dbcon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tt = new dbcon;

    $id = $_POST['id'];
    $GiaSP = $_POST['GiaSP'];
    $SL = $_POST['SL'];
    $TL = $_POST['TL'];
    $mau = $_POST['mau'];
    $dotinhkhiet = $_POST['dotinhkhiet'];
    $KT = $_POST['KT'];
    $dang = $_POST['dang'];

    $sql = "UPDATE sanpham SET Gia_SP='$GiaSP', So_luong='$SL', Trong_luong='$TL', Mau_sac='$mau', Đo_tinh_khiet='$dotinhkhiet', Kich_thuoc='$KT', Hinh_dang='$dang' WHERE Ma_Sp='$id'";
    if ($tt->query($sql) === TRUE) {
        header("location:hienthids1.php");
    } else {
        echo "Lỗi: " . $tt->error;
    }

    $tt->db->close();
}
?>
