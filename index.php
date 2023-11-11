<?php
include ("dbcon.php");
$tt = new dbcon;
$sql = "SELECT * FROM sanpham LIMIT 5";
$kq = $tt -> query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/index.css" rel="stylesheet" type="text/css">
</head>
<body class="body">
    <div class="container" >
          <div class="row" >
            <div class="col" id="head1" >
                Hotline:113114115
            </div>
            <div class="col" >
                <a href="index.php"><img src="https://i.pinimg.com/564x/77/ef/75/77ef756d65375e2bed903092c592f063.jpg"  height="200" width="200" ></a>
            </div>
            <div class="col" >
                <div class="row">
                    <div class="col">
                    <a href="dangky.php">
                        <img id="head" src="https://i.pinimg.com/originals/cf/01/a1/cf01a172c5910595e5de7aa7717edfe3.png" height="50" width="50">
                    </a>
                    </div>
                    
                    <div class="col">
                        <a href="giohang.php">
                        <img id="head" src="https://i.pinimg.com/originals/4f/0c/c6/4f0cc62d854d4cf770a009974c007edd.png" height="50" width="50" > 
                    </a>
                    </div>
                </div>
                <div >
                    <form method="GET">
                        <input type="text" id="timkiem" name="timkiem" placeholder="Tìm Kiếm" required >      
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="mid1">
        <div class="container" >
            <div class="row">
              <div class="col">
                <dl id="main-menu">
                    <dt><a id="link" href="index.php?id=tunhien">Kim Cương Tự Nhiên</a>
                        <dl class="sub-menu">
                            <dt><a id="link" href="index.php?id=tunhiengiamdan">Giá giảm dần</a></dt>
                            <dt><a id="link" href="index.php?id=tunhientangdan">Giá tăng dần</a></dt>
                        </dl>
                    </dt>
                </dl>
              </div>
              <div class="col">
                <dl id="main-menu">
                    <dt><a id="link" href="index.php?id=nhantao">Kim Cương Nhân Tạo</a>
                        <dl class="sub-menu">
                        <dt><a id="link" href="index.php?id=nhantaogiamdan">Giá giảm dần</a></dt>
                        <dt><a id="link" href="index.php?id=nhantaotangdan">Giá tăng dần</a></dt>
                        </dl>
                    </dt>
                </dl>
              </div>
              <div class="col">
                  <b><i><a  id="col1" href="khuyenmai.php">Khuyến Mãi</a></i></b> 
              </div>
              </div>
          </div>
    </div>
    <div>
        <p id="link1"><b>Sản Phẩm Bán Chạy </b></p>
    </div>
    <div class="conveyor-belt">
        <div class="row">
        <?php
            if ($kq -> num_rows > 0) {
                while ($row = $kq -> fetch_assoc()) {
                    echo "<div class='col'> <a id='chitietsanpham' name='chitietsanpham' href='chitietsanpham.php?id=".$row['Ma_Sp']."'><img id='pic' src='". $row['Hinh_anh']."'> </a>
                    <table class='table'>
                    <tr>
                        <td>Mã SP</td><td>".$row['Ma_Sp']."</td>
                        </tr>
                        <tr>
                        <td>Giá SP</td><td>".$row['Gia_SP']."</td>
                    </tr>
                    </table>
                    </div>";
                }
            }

        ?>
        </div>

      </div>
      <div>
        <p id="link1"><b>Kiểu Dáng Ưa Chuộng</b></p>
    </div>
    <div class="conveyor-belt">
        <div class="row">
            
            <?php
        $sql = "SELECT * FROM sanpham LIMIT 5 OFFSET 5";
        $kq = $tt -> query($sql);
            if ($kq -> num_rows > 0) {
                while ($row = $kq -> fetch_assoc()) {
                    
                    echo "<div class='col'> <a id='chitietsanpham' name='chitietsanpham' href='chitietsanpham.php?id=".$row['Ma_Sp']."'><img id='pic' src='". $row['Hinh_anh']."'>    </a>
                    <table class='table'>
                    <tr>
                        <td>Mã SP</td><td>".$row['Ma_Sp']."</td>
                        </tr>
                        <tr>
                        <td>Giá SP</td><td>".$row['Gia_SP']."</td>
                    </tr>
                    </table> </div>";
                
                }
            }

        ?>
         

        </div>
    </div >
    <div>
        <p id='link1'><b>Danh Sách Sản Phẩm</b></p>
    </div>
    <div class="conveyor-belt">
        <div class="row">
        <?php
        if (isset($_GET['timkiem'])) {
            $timkiem = $_GET['timkiem'];
            $sql = "SELECT * FROM sanpham WHERE Trong_luong LIKE $timkiem";
            $kq = $tt->query($sql);
            if ($kq -> num_rows >0) {
                while($row = $kq -> fetch_assoc()){
                   echo "<div class='col'><a id='chitietsanpham' name='chitietsanpham' href='chitietsanpham.php?id=".$row['Ma_Sp']."'><img id='pic' src='". $row['Hinh_anh']."'>    </a> <table class='table'>
                   <tr>
                       <td>Mã SP</td><td>".$row['Ma_Sp']."</td>
                       </tr>
                       <tr>
                       <td>Giá SP</td><td>".$row['Gia_SP']."</td>
                   </tr>
                   </table></div>";
               }
           }
        } else {
        switch (isset($_GET['id']) ? $_GET['id'] : null) {
            case 'tunhien':
                $sql = "SELECT * FROM sanpham WHERE Ma_loai = '101'";
                $kq = $tt -> query($sql);
                    if ($kq -> num_rows >0) {
                        while($row = $kq -> fetch_assoc()){
                            echo "<div class='col'><a id='chitietsanpham' name='chitietsanpham' href='chitietsanpham.php?id=".$row['Ma_Sp']."'><img id='pic' src='". $row['Hinh_anh']."'>    </a> <table class='table'>
                            <tr>
                                <td>Mã SP</td><td>".$row['Ma_Sp']."</td>
                                </tr>
                                <tr>
                                <td>Giá SP</td><td>".$row['Gia_SP']."</td>
                            </tr>
                            </table></div>";
                        }
                    }
                break;
            case 'tunhiengiamdan':
                $sql = "SELECT * FROM sanpham WHERE Ma_loai = '101' ORDER BY Gia_SP DESC";
                $kq = $tt -> query($sql);
                    if ($kq -> num_rows >0) {
                        while($row = $kq -> fetch_assoc()){
                            echo "<div class='col'><a id='chitietsanpham' name='chitietsanpham' href='chitietsanpham.php?id=".$row['Ma_Sp']."'><img id='pic' src='". $row['Hinh_anh']."'>    </a> <table class='table'>
                            <tr>
                                <td>Mã SP</td><td>".$row['Ma_Sp']."</td>
                                </tr>
                                <tr>
                                <td>Giá SP</td><td>".$row['Gia_SP']."</td>
                            </tr>
                            </table></div>";
                        }
                    }
                    break;
            case 'tunhientangdan':
                $sql = "SELECT * FROM sanpham WHERE Ma_loai = '101' ORDER BY Gia_SP ASC";
                $kq = $tt -> query($sql);
                    if ($kq -> num_rows >0) {
                        while($row = $kq -> fetch_assoc()){
                            echo "<div class='col'><a id='chitietsanpham' name='chitietsanpham' href='chitietsanpham.php?id=".$row['Ma_Sp']."'><img id='pic' src='". $row['Hinh_anh']."'>    </a> <table class='table'>
                            <tr>
                                <td>Mã SP</td><td>".$row['Ma_Sp']."</td>
                                </tr>
                                <tr>
                                <td>Giá SP</td><td>".$row['Gia_SP']."</td>
                            </tr>
                            </table></div>";
                        }
                    }
                    break;
            case 'nhantao':
                $sql = "SELECT * FROM sanpham WHERE Ma_loai = '102'";
                $kq = $tt -> query($sql);
                    if ($kq -> num_rows >0) {
                         while($row = $kq -> fetch_assoc()){
                            echo "<div class='col'><a id='chitietsanpham' name='chitietsanpham' href='chitietsanpham.php?id=".$row['Ma_Sp']."'><img id='pic' src='". $row['Hinh_anh']."'>    </a> <table class='table'>
                            <tr>
                                <td>Mã SP</td><td>".$row['Ma_Sp']."</td>
                                </tr>
                                <tr>
                                <td>Giá SP</td><td>".$row['Gia_SP']."</td>
                            </tr>
                            </table></div>";
                        }
                    }
                break;
            case 'nhantaogiamdan':
                $sql = "SELECT * FROM sanpham WHERE Ma_loai = '102' ORDER BY Gia_SP DESC";
                $kq = $tt -> query($sql);
                    if ($kq -> num_rows >0) {
                        while($row = $kq -> fetch_assoc()){
                            echo "<div class='col'><a id='chitietsanpham' name='chitietsanpham' href='chitietsanpham.php?id=".$row['Ma_Sp']."'><img id='pic' src='". $row['Hinh_anh']."'>    </a> <table class='table'>
                            <tr>
                                <td>Mã SP</td><td>".$row['Ma_Sp']."</td>
                                </tr>
                                <tr>
                                <td>Giá SP</td><td>".$row['Gia_SP']."</td>
                            </tr>
                            </table></div>";
                        }
                    }
                    break;
            case 'nhantaotangdan':
                $sql = "SELECT * FROM sanpham WHERE Ma_loai = '102' ORDER BY Gia_SP ASC";
                $kq = $tt -> query($sql);
                    if ($kq -> num_rows >0) {
                        while($row = $kq -> fetch_assoc()){
                            echo "<div class='col'><a id='chitietsanpham' name='chitietsanpham' href='chitietsanpham.php?id=".$row['Ma_Sp']."'><img id='pic' src='". $row['Hinh_anh']."'>    </a><table class='table'>
                            <tr>
                                <td>Mã SP</td><td>".$row['Ma_Sp']."</td>
                                </tr>
                                <tr>
                                <td>Giá SP</td><td>".$row['Gia_SP']."</td>
                            </tr>
                            </table></div>";
                        }
                    }
                    break;
            case 'nhantaotangdan':
                $sql = "SELECT * FROM sanpham WHERE Ma_loai = '102' ORDER BY Gia_SP ASC";
                $kq = $tt -> query($sql);
                    if ($kq -> num_rows >0) {
                        while($row = $kq -> fetch_assoc()){
                            echo "<div class='col'><a id='chitietsanpham' name='chitietsanpham' href='chitietsanpham.php?id=".$row['Ma_Sp']."'><img id='pic' src='". $row['Hinh_anh']."'>    </a><table class='table'>
                            <tr>
                                <td>Mã SP</td><td>".$row['Ma_Sp']."</td>
                                </tr>
                                <tr>
                                <td>Giá SP</td><td>".$row['Gia_SP']."</td>
                            </tr>
                            </table></div>";
                        }
                    }
                    break;
            default:
                $sql = "SELECT * FROM sanpham";
                $kq = $tt -> query($sql);
                    if ($kq -> num_rows >0) {
                        while($row = $kq -> fetch_assoc()){
                            echo "<div class='col'><a id='chitietsanpham' name='chitietsanpham' href='chitietsanpham.php?id=".$row['Ma_Sp']."'><img id='pic' src='". $row['Hinh_anh']."'>    </a><table class='table'>
                            <tr>
                                <td>Mã SP</td><td>".$row['Ma_Sp']."</td>
                                </tr>
                                <tr>
                                <td>Giá SP</td><td>".$row['Gia_SP']."</td>
                            </tr>
                            </table></div>";
                        }
                    }
                break;
        }
    }
        ?>
        </div>
    </div>
</body>
</html>