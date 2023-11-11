<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dlstore";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Lỗi." . $conn->connect_error);
}

$itemPerPage = 3;
$page = isset($_GET['page']) ? $_GET['page'] : 1; // Trang hiện tại, mặc định là 1.
$offset = ($page - 1) * $itemPerPage; // Vị trí bắt đầu lấy dữ liệu

// Truy vấn dữ liệu từ cơ sở dữ liệu với LIMIT và OFFSET
$sql = "SELECT * FROM chitietdondathang LIMIT $itemPerPage OFFSET $offset";
$result = $conn->query($sql);

// Kiểm tra và hiển thị dữ liệu
if ($result->num_rows > 0) {
    foreach ($result as $row) {
        echo '<tr><td>Mã chi tiết đơn hàng </td><td>' . $row['Ma_chi_tiet_DH'] . '</td></tr>';
        echo '<tr><td>Mã sản phẩm</td><td>' . $row['Ma_Sp'] . '</td></tr>';
        echo '<tr><td>Giá sản phẩm </td><td>' . $row['Gia_SP'] . '</td></tr>';
        echo '<tr><td>Số Lượng</td><td>' . $row['So_luong'] . '</td></tr>';
        echo '<tr><td>Thành tiền</td><td>' . $row['Thanh_tien'] . '</td></tr>';
        echo '<tr><td>Mã Giỏ Hàng</td><td>' . $row['Ma_GH'] . '</td></tr>';
        echo '<tr><td colspan="2">&nbsp;</td></tr>';
    }

    // Hiển thị vị trí đang đứng

    // Hiển thị nút Trang trước
    if ($page > 1) {
        $prevPage = $page - 1;
        echo '<a style="text-decoration: none" href="?page=' . $prevPage . '">Trang Trước  </a>';
    }

    echo '<span class="trang">';
    if ($itemPerPage > 0) {
        // Đếm tổng số dòng dữ liệu
        $totalrows = $conn->query("SELECT COUNT(*) as soluong FROM chitietdondathang")->fetch_assoc()['soluong'];

        // Tính tổng số trang
        $totalpage = ceil($totalrows / $itemPerPage);

        // Hiển thị các trang xung quanh trang hiện tại
        $start = max(1, $page - 2);
        $end = min($page + 2, $totalpage);

        for ($i = $start; $i <= $end; $i++) {
            // Đánh dấu trang hiện tại
            if ($i == $page) {
                echo '<strong>' . $i . '</strong>';
            } else {
                echo '<a style="text-decoration: none"= href="?page=' . $i . '">' . $i . '</a>';
            }
        }
    }
    echo '</span>'; 

    // Hiển thị nút Trang tiếp theo
    if ($page < $totalpage) {
        $nextPage = $page + 1;
        echo '<a style="text-decoration: none" href="?page=' . $nextPage . '">  Trang Tiếp theo</a>';
    } else {
        echo '<a style="text-decoration: none" href="?page=' . $totalpage . '">  Trang Tiếp theo</a>';
    }
} else {
    echo "Không có dữ liệu.";
}

$conn->close();
?>
