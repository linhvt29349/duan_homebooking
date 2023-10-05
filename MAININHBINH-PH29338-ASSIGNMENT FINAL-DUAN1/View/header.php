<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Css/style.css">
    <link rel="stylesheet" href="./Css/button.css">
    <link rel="stylesheet" href="./Css/tables.css">
    <link rel="stylesheet" href="./Css/News.css">
    <link rel="stylesheet" href="./Css/booking.css">
    <link rel="stylesheet" href="./Css/detail.css">
    <title>Trang Chủ | Agoda</title>
</head>

<body>
    <div class="container_nav">
        <header class="header">
            <div class="logo">
                <a href="./">
                    <img src="./img/colordefault.svg" alt="">
                </a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.php?goto=listRooms_booking">Đặt Phòng</a></li>
                    <li><a href="index.php?goto=viewRooms">Hotel & Rooms</a></li>
                    <li><a href="index.php?goto=viewNews">Tin Tức</a></li>
                    <li><a href="index.php?goto=add_pay">Thông Tin Phòng Đặt</a></li>
                    <li><a href="index.php?goto=btn_contact">Liên hệ</a></li>
                </ul>
            </div>
            <div class="login">
                <ul>
                    <?php
                    if (isset($_SESSION['ten_tk'])) {
                        extract($_SESSION['ten_tk']);
                    ?>
                        <li>
                            <a href="index.php?goto=login">
                                <button class="btn5-hover btn5">
                                    <?= $ten_tk ?>
                                </button>
                            </a>
                        </li>
                        <li><a href="index.php?goto=exit"><button class="btn5-hover btn5">Thoát</button></a></li>
                    <?php
                    } else {
                    ?>
                        <li><a href="index.php?goto=login">
                                <button class="btn5-hover btn5">
                                    Đăng nhập
                                </button>
                            </a>
                        </li>
                        <li><a href="index.php?goto=register"><button class="btn5-hover btn5">ĐĂNG KÝ</button></a></li>
                    <?php } ?>
                </ul>
            </div>
        </header>