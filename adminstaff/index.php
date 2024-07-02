<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhân viên</title>
    <link rel="stylesheet" href="css/styleadmincp.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="menu">
        <li class="logo">
            <a href="index.php">
                <img src="images/Cool_Game_Player_Logo-removebg-preview-removebg-preview.png" class="smaller">
            </a>
        </li>
        <li class="address-form">
            <h2>Chọn địa chỉ</h2>
            <form action="">
                <select name="" id="">
                    <option value="#">Hà Nội</option>
                    <option value="#">Đà Nẵng</option>
                    <option value="#">Thành phố Hồ Chí Minh</option>
                </select>
            </form>
        </li>
        <li class="search-box">
            <input type="text" id="search-input" placeholder="Bạn cần tìm gì">
            <button id="search-button"><i class="fas fa-search"></i></button>
        </li>
        <li><a class="menu-link" href="newss.php"><i class="far fa-newspaper"></i>Tin tức công nghệ</a></li>
        <li><a class="menu-link" href="cart.php"><i class="fas fa-shopping-cart"></i>Giỏ hàng</a></li>
        <li><a class="menu-link" href="login.php"><i class="fas fa-user"></i>Tài khoản</a></li>
    </div>
    <div class="TuyChon">
        <li><a class="menu-link" href="index.php"><i class="fa fa-home"></i> Trang Chủ</a></li>
        <li><a class="menu-link" href="laptopp.php"><i class="fa fa-laptop"></i> Laptop</a></li>
        <li><a class="menu-link" href="PCC.php"><i class="fa fa-desktop"></i> PC</a></li>
        <li><a class="menu-link" href="linhkienn.php"><i class="fa fa-desktop"></i> Linh kiện PC</a></li>
        <li><a class="menu-link" href="mmanhinh.php"><i class="fa fa-desktop"></i> Màn hình</a></li>
    </div>
    <div class="centered-text">
        <h3 class="title_admin">Chào mừng quản lý</h3>
    </div>
    <div class="wrapper">
    <?php
        include("config/config.php");
        include("modules/header.php");
        include("modules/menu.php");
        include("modules/main.php");
    ?>
    </div>
    <div class="logout-link">
        <a href="../login.php">Đăng xuất</a>
    </div>
    <div class="footer">
        <div class="container">
            <p>Bản quyền hình ảnh : <a href="https://nguyencongpc.vn/" target="_blank">https://nguyencongpc.vn/</a></p><br>
            <p>Địa chỉ: Số 2, Tân Triều, Triều Khúc, Thanh trì, Hà Nội</p><br>
            <p>
                Phone:0387178698<br>
                Email:hhhdm4321@gmail.com
            </p>
        </div>
    </div>
</body>
</html>