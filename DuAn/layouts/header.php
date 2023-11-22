<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bizman Sky - An amazingly welcome space for business profressionals</title>
    <link href="https://bizmansky.vn/image/catalog/logo/logo-fav.png" rel="icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c13a07f3cd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./public/css/venobox.min.css">
    <link rel="stylesheet" href="./public/css/base.css">
    <link rel="stylesheet" href="./public/css/header.css">
    <link rel="stylesheet" href="./public/css/index.css">
    <link rel="stylesheet" href="./public/css/main.css">
    <style>
        .bread-crumb {
            background-image: url(https://bizmansky.vn/image/cache/catalog/background/Thumbnail-1920x0.png);
            padding: 140px 0;
            margin-top: 95px;
        }
       .header-login-cart a i:hover{
        color: #CC9902;
        
       }
    </style>


</head>

<body class="common-home">
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-2 col-lg-3 header__mobile">
                    <div class="header__logo">
                        <a href="/duan/index.php?action=home">
                            <img class="header__logo-main" src="./images/Logohome.png" width="247" height="31" />
                        </a>
                    </div>
                    <button type="button" class="nav-line-group d-block d-lg-none">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <nav class="header__menu">
                        <ul id="nav" class="nav">
                            <li class="nav-item"><a class="nav-link" href="/duan/index.php?action=home">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Calendar of event</a></li>
                            <li class="nav-item has-child">
                                <a href="#" class="nav-link">Menu <i class="fa fa-angle-down" data-toggle="dropdown"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="level1 parent nav-item">
                                        <a href="#" class="nav-link">Banquet</a>
                                    </li>

                                    <li class="level1 parent nav-item">
                                        <a href="/duan/index.php?action=menu" class="nav-link">Food &amp; Drink</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/duan/index.php?action=news">News</a></li>
                            <li class="nav-item"><a class="nav-link" href="/duan/index.php?action=gallery">Gallery</a></li>
                            <li class="nav-item"><a class="nav-link" href="/duan/index.php?action=introduction">Introduction</a></li>
                            <li class="nav-item"><a class="nav-link" href="/duan/index.php?action=booking_contact">Booking &amp; Contact</a></li>

                        </ul>
                    </nav>
                </div>
                <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                    <div class="d-none d-xl-block">
                        <div class="header__social social">
                            <span>Follow us:</span>
                            <ul>

                            </ul>
                        </div>
                    </div>
                    <div class="header__language">
                        <div class="header-login-cart" style="width: 100%; height:30px ; display: grid;grid-template-columns: 1fr 1fr; gap:15px;">
                            <a class="" style="color: #fff;" href=""><i class="fa-solid fa-cart-shopping"></i></a>
                            <a class="" style="color: #fff;" href=""><i class="fa-solid fa-user"></i></a>

                        </div>

                        <div class="language">
                            <form action="https://bizmansky.vn/common/language/language" method="post" enctype="multipart/form-data" id="form-language" class="form-language">
                                <ul>
                                    <li class="active">
                                        <button class="btn btn-link btn-block language-select" type="button" name="en-gb">
                                            EN </button>
                                    </li>
                                    <li class="devide">|</li>
                                    <li class="">
                                        <button class="btn btn-link btn-block language-select" type="button" name="vi-vn">
                                            VN </button>
                                    </li>
                                </ul>
                                <input type="hidden" name="code" value="" />
                                <input type="hidden" name="redirect" value="https://bizmansky.vn/" />
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>