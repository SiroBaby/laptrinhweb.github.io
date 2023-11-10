<?php
include("dbcon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tt = new dbcon;

    $MaSP = $_POST["MaSP"];
    $GiaSP = $_POST["GiaSP"];
    $SL = $_POST["SL"];
    $TL = $_POST["TL"];
    $mau = $_POST["mau"];
    $dotinhkhiet = $_POST["dotinhkhiet"];
    $KT = $_POST["KT"];
    $dang = $_POST["dang"];
    $maloai =$_POST["maloai"];

    if (isset($_FILES['hinh']) && $_FILES['hinh']['error'] === UPLOAD_ERR_OK) {
        $targetDirectory = "Resource/";
        $targetFile = $targetDirectory . basename($_FILES["hinh"]["name"]);

        if (move_uploaded_file($_FILES['hinh']['tmp_name'], $targetFile)) {
            $sql = "INSERT INTO sanpham (Ma_Sp, Gia_SP, So_luong, Trong_luong, Mau_sac, Do_tinh_khiet, Kich_thuoc, Hinh_dang, Hinh_anh, Ma_loai) 
                VALUES ('$MaSP', '$GiaSP', '$SL', '$TL', '$mau', '$dotinhkhiet', '$KT', '$dang', '$targetFile', '$maloai')";

            if ($tt->query($sql) === TRUE) {
                header("Location: hienthids1.php");
            } else {
                echo "Lỗi: " . $tt->error;
            }

            $tt->close();
        } else {
            echo "Lỗi khi tải lên hình ảnh.";
        }
    } else {
        echo "Hãy chọn một tệp hình ảnh để tải lên.";
    }
}
?>
