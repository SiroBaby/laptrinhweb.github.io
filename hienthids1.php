<?php
include("dbcon.php");
$tt = new dbcon;

$productsPerPage = 5;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $productsPerPage;
$sql = "SELECT * FROM sanpham LIMIT $productsPerPage OFFSET $offset";
$kq = $tt->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/hienthidanhsach1.css" rel="stylesheet" type="text/css">
</head>
<body class="body">
    <div class="header">
        <img src="https://i.pinimg.com/564x/77/ef/75/77ef756d65375e2bed903092c592f063.jpg" height="180" width="180">
        <h2>Diamond Luxury Store</h2>
    </div>
    <div class="row1">Admin/ Quản Lý Kho Sản Phẩm/ Hiển Thị Danh Sách Sản Phẩm</div>
    <form>
        <table class="table">
            <tr>
                <td>Mã SP</td>
                <td>Giá SP</td>
                <td>Số lượng</td>
                <td>Trọng Lượng</td>
                <td>Màu Sắc</td>
                <td>Độ Tinh Khiết</td>
                <td>Kích Thước</td>
                <td>Hình Dạng</td>
                <td>Hình Ảnh</td>
                <td>Mã Loại</td>
                <td>Thao tác</td>
            </tr>
            <?php
            if ($kq->num_rows > 0) {
                while ($row = $kq->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['Ma_Sp'] . "</td>";
                    echo "<td>" . $row['Gia_SP'] . "</td>";
                    echo "<td>" . $row['So_luong'] . "</td>";
                    echo "<td>" . $row['Trong_luong'] . "</td>";
                    echo "<td>" . $row['Mau_sac'] . "</td>";
                    echo "<td>" . $row['Đo_tinh_khiet'] . "</td>";
                    echo "<td>" . $row['Kich_thuoc'] . "</td>";
                    echo "<td>" . $row['Hinh_dang'] . "</td>";
                    echo "<td><img height='180px' width='' src='" . $row['Hinh_anh'] . "' alt='Hình ảnh sản phẩm'></td>";
                    echo "<td>" . $row['Ma_loai'] . "</td>";
                    echo "<td>
                            <button type='submit' id='sua' name='sua'><a id='sua' href='suadulieu.php?id=" . $row['Ma_Sp'] . "'>Sửa</a></button>
                            <button type='submit' id='xoa'><a id='xoa' href='xoadulieu.php?id=" . $row['Ma_Sp'] . "'>Xóa</a></button>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='11'>Không có dữ liệu sản phẩm.</td></tr>";
            }
            ?>
        </table>
    </form>

    <div class="pagination">
        <?php
        $sql = "SELECT COUNT(*) as count FROM sanpham";
        $result = $tt->query($sql);
        $row = $result->fetch_assoc();
        $totalProducts = $row['count'];
        $totalPages = ceil($totalProducts / $productsPerPage);

        if ($page > 1) {
            $prevPage = $page - 1;
            echo "<a class='pagination-link' style='margin-right: 5px;' href='hienthids1.php?page=$prevPage'>&laquo; Previous</a>";
        }

        if ($page < $totalPages) {
            $nextPage = $page + 1;
            echo "<a class='pagination-link' style='margin-right: 5px;' href='hienthids1.php?page=$nextPage'>Next &raquo;</a>";
        }
        ?>
    </div>
</body>
</html>
