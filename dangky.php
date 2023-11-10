<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="CSS/dangky.css">
    </head>
    <body>
    <div class="row1" >     
        <div class="col1"> 
        <a href="index.php">
            <img src="https://i.pinimg.com/564x/77/ef/75/77ef756d65375e2bed903092c592f063.jpg"  height="180" width="180" >
            </a>
        </div>
    </div>
    <form class="dangky" method="post" action="xulydangnhap.php">
    <div class="row2">
        <div class="col2">
            <h3>ĐĂNG KÝ </h3>
            <h4>Vui Lòng Điền Thông Tin Dưới Đây</h4>
        </div>
    </div>
    <div class="thongtin">
    <div class="row3" >
        <input type="text" id="hoten" name="Username" value=""placeholder="Họ và Tên" size="70" required>
    </div>
    <div class="row3">
        <input type="password" id="matkhau" name="Password" value="" placeholder="Mật Khẩu" size="70" required >
        <span onclick="togglePassword()">👁️</span>
    </div>
    <div class="row3">
        <input type="passwprd" id="nhaplai" name="nhaplai" value="" placeholder="Nhập Lại Mật Khẩu" size="70" required>
        <span onclick="togglePassword()">👁️</span>
    </div>
    <div class="row3">
        <input type="email" id="email" name="Email" value="" placeholder="Email" size="70" required  >
    </div>
    <div class="row3">
        <input type="text" id="sodienthoai" name="SDT" value="" placeholder="Số Điện Thoại" size="70" required>
    </div>
    
    <div class="row3">
        <div class="col"><button type="submit" id="dangky"> Đăng Ký </button></div>
    </div>
    <p><a href="dangnhap.php" id="dangnhap">Đã có tài khoản</a></p>
    </div>
    </div>
</form>
    </body>
</html>