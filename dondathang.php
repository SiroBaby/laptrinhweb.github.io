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
                <?php include "xulydondathang.php";
                echo "table border='1'>
                <tr>
                    <th>Mã đơn hàng </th>   
                    <th>Ngày lập</th>    
                    <th>Tên khách hàng </th>   
                    <th>Số điện thoại </th>    
                    <th>Tổng thanh toán</th>    
                    <th>Tình trạng</th>    
                    <th>Nơi nhận</th>   
                </tr>";
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
                ?>
            </table>
        </div>
        <div class="col">
            <img src="https://i.pinimg.com/564x/77/ef/75/77ef756d65375e2bed903092c592f063.jpg" id="sanpham">
        </div>  
    </div>
        <a href="chitietdondathang.php" id="xemchitiet"> Xem chi tiết </a>
</body>
