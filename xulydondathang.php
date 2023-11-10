<?php
$itemPerPage = 2; // 5 dữ liệu/trang

$page = isset($_GET['page']) ? $_GET['page'] : 1;

//Lấy đơn hàng cho trang hiện tại
function Laydonhang($page, $itemPerPage)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dlstore";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Lỗi." . $conn->connect_error);
    }

    $offset = ($page - 1) * $itemPerPage;

    //Truy vấn nhận đơn hàng với LIMIT Và OFFSET
    //Limit giới hạn số lượng trả về là n hàng, offset bỏ qua n hàng phía trước
    $query = "SELECT * FROM dondathang LIMIT $itemPerPage OFFSET $offset";
    $result = $conn->query($query);

    // Kiểm tra có đơn hàng hay không.
    if ($result->num_rows > 0) {
        // Lấy đơn hàng và trả về danh sách
        while ($row = $result->fetch_assoc()) {
            $dondathang[] = $row;
        }
    } else {
        $dondathang = array();
    }

    $conn->close();

    return $dondathang;
}
<<<<<<< Updated upstream
function laydonhang(){
global $conn;    
$query = "SELECT * FROM dondathang";
$result = $conn->query($query);
$result = laydonhang();
if ($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Ma_DH"] . "</td>";
        echo "<td>" . $row["Ngay_lap"] . "</td>";
        echo "<td>" . $row["Username"] . "</td>";
        echo "<td>" . $row["SDT"] . "</td>";
        echo "<td>" . $row["Tong_thanh_toan"] . "</td>";
        echo "<td>" . $row["Tinh_trang"] . "</td>";
        echo "<td>" . $row["Noi_nhan"] . "</td>";
        echo "</tr>";
    }
}else {
    echo "<tr><td colspan='7'>Không có đơn đặt hàng nào.</td></tr>";
}

echo "</table>";

$conn->close();
=======

function Demdonhang()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dlstore";
>>>>>>> Stashed changes

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Lỗi." . $conn->connect_error);
    }

    $query = "SELECT COUNT(*) as soluong FROM dondathang";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    $conn->close();
    return $row['soluong'];
}

//Lấy đơn hàng cho trang hiện tại
$dondathang = Laydonhang($page, $itemPerPage);

// Hiển thị đơn hàng
if ($dondathang) {
    foreach ($dondathang as $order) {
        echo '<tr><td>Mã đơn hàng</td><td>' . $order['Ma_DH'] . '</td></tr>';
        echo '<tr><td>Ngày lập</td><td>' . $order['Ngay_lap'] . '</td></tr>';
        echo '<tr><td>Tên khách hàng</td><td>' . $order['Username'] . '</td></tr>';
        echo '<tr><td>Số điện thoại</td><td>' . $order['SDT'] . '</td></tr>';
        echo '<tr><td>Tổng thanh toán</td><td>' . $order['Tong_thanh_toan'] . '</td></tr>';
        echo '<tr><td>Tình trạng</td><td>' . $order['Tinh_trang'] . '</td></tr>';
        echo '<tr><td>Nơi nhận</td><td>' . $order['Noi_nhan'] . '</td></tr>';
    }

    // Hiển thị nút Trang trước
    if ($page > 1) {
        $prevPage = $page - 1;
        echo '<a href="?page=' . $prevPage . '">Trang trước</a>';
    }

    echo '<span class="trang">';
    if ($itemPerPage > 0) {
        $totalOders = Demdonhang();
        $totalPerPage = ceil($totalOders / $itemPerPage);

        for ($i = max(1, $page - 2); $i <= min($page + 2, $totalPerPage); $i++) {
            //đánh dấu trang hiện tại.
            if ($i == $page) {
                echo '<strong>' . $i . '</strong>';
            } else {
                echo '<a href="?page=' . $i . '">' . $i . '</a>';
            }
        }
    } else {
        echo '<strong>Số mục trên mỗi trang phải lớn hơn 0.</strong>';
    }
    echo '</span>';

    // Hiển thị nút Trang tiếp theo
    if ($page < $totalPerPage) {
        $nextPage = $page + 1;
        echo '<a href="?page=' . $nextPage . '">Trang tiếp theo</a>';
    }
} elseif ($page < $totalPerPage) {
    $nextPage = $page + 1;
    echo '<a href="?page=' . $nextPage . '">Trang tiếp theo</a>';
}
// Sau khi thêm dữ liệu mới
// Cập nhật lại số lượng tổng đơn hàng
$totalOders = Demdonhang();
$totalPerPage = ceil($totalOders / $itemPerPage);

// Chuyển hướng về trang cuối cùng
header("Location: ?page=" . $totalPerPage);
exit();
?>
