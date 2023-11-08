<?php 
include('dbcon.php');
$tt = new dbcon;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM sanpham WHERE Ma_Sp = '$id'";
    if ($tt->query($sql) == TRUE) {
        header("location:hienthids1.php");
    }
    else
        echo "Lỗi: " . $tt->error;
}
$tt->close();
?>