
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/danhsachkhachhang.css" rel="stylesheet" type="text/css">
</head>
<body class="body">
    <div class="header">
        <img src="https://i.pinimg.com/564x/77/ef/75/77ef756d65375e2bed903092c592f063.jpg"  height="180" width="180" >
         <h2>Diamond Luxury Store</h2>
     </div>
     <div class="row1">Admin/ Quản Lý Đơn Hàng/ Hiển Thị Danh Sách Khách Hàng</div>
     <form>
        <table class="table">
        <?php include "xulydskhachhang.php"?>

        </table>
     </form>
     <script>
        function suaKhachHang(maKhachHang) {
            // Xử lý khi nhấn nút "Sửa"
            // Chuyển hướng đến trang sửa với mã khách hàng được truyền
            window.location.href = "suakhachhang.php?maKhachHang=" + maKhachHang;
        }

        function xoaKhachHang(maKhachHang) {
            // Xử lý khi nhấn nút "Xóa"
            // Thực hiện xóa khách hàng với mã khách hàng được truyền
            // Gọi đến một file PHP xử lý việc xóa khách hàng từ cơ sở dữ liệu
            window.location.href = "xoakhachhang.php";        }

        function themKhachHang() {
            // Xử lý khi nhấn nút "Thêm"
            // Chuyển hướng đến trang thêm
            window.location.href = "themkhachhang.php";
        }
    </script>
</body>