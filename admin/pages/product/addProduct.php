<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
    <link rel="shortcut icon" href="../../images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c13a07f3cd.js" crossorigin="anonymous"></script>
    <style>
        /* css chung */
        * {
            font-family: Open Sans;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
            background-color: rgba(0, 45, 51, 1);
        }
        #sitebar {
            width: 25%;
            float: left;
        }
        .admin-profile {
            width: 100%;
        }
        .admin-profile .img {
            margin-top: 2em;
            width: 100%;
            text-align: center;
        }
        .img img {
            height: 80px;
            border: 3px solid #FFF;
            width: 80px;
            border-radius: 50%;
        }
        p {
            color: white;
            margin-top: 10px;
            width: 100%;
            text-align: center;
        }
        .list {
            width: 100%;
            padding: 0 20px;
        }
        ul {
            margin-top: 20px;
            border-top: 1px solid #fff;
            list-style: none;
            padding: 0 20px;
        }
        li {
            margin: 20px 0;
            width: 100%;
            border-radius: 7px;
        }
        li:hover {
            background-color: #C5DEFD;
        }
        li i {
            padding: 0 15px;
        }
        a {
            line-height: 50px;
            text-decoration: none;
            color: white;
        }
        li:hover a {
            color: #000;
        }
        #main-content {
            margin-top: 6vh;
            float: right;
            width: 75%;
            height: 94vh;
            background-color: #F5F5F5;
        }
        /* css chung */
        #main-content .add-product-title {
            width: 70vw;
            height: 90vh;
            background-color: white;
            margin-top: 10px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: auto;
            border-radius: 7px;
            box-shadow: 2px 2px 2px 2px #ccc;
            padding: 0 10px;
        }
        #main-content .add-product-title .main-title {
            width: 100%;
            padding: 10px;
            border-bottom: 1px solid #FFD33A;
        }
        form {
            width: 90%;
            margin-top: 40px;
            margin-left: auto;
            margin-right: auto;
            display: grid;
            grid-template-columns: 33.33% 33.33% 33.33%;
        }
        form div {
            width: 100%;
        }
        input[type="text"] {
            width: 95%;
            padding-left: 10px;
            height: 40px;
            margin: 1em 0;
            font-size: 1em;
            border-radius: 5px;
            border: 2px solid #000;
            transition: 0.3s;
        }
        input[type="text"]:focus {
            outline: none;
            border-radius: 5px;
            border: 2px solid #23AD4A;
        }
        label {
            font-weight: 600;
            font-size: 13px;
        }
        span {
            font-weight: 600;
            font-size: 10px;
        }
        #file {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }
        .upload {
            grid-row: 2/3;
        }
        .upload-img {
            border-radius: 10px;
            padding: 10px 40px;
            background-color: rgba(0, 45, 51, 1);
            color: white;
        }
        .submit {
            grid-column: 3/3;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #submit {
            float: right;
            margin-top: 15px;
            margin-right: 10px;
            width: 100%;
            height: 3em;
            border-radius: 10px;
            font-weight: 700;
            color: white;
            border: 2px solid #23AD4A;
            background-color: #23AD4A;
            transition: 0.2s;
            cursor: pointer;
        }
        #submit:hover {
            background-color: transparent;
            color: #23AD4A;
        }
        .logout {
            position: absolute;
            top: 0;
            right: 0;
            width: 30px;
            height: 30px;
            background-color: rebeccapurple;
            text-align: center;
            cursor: pointer;
            background-color: #FFD33A;
        }
        .logout a {
            color: #000;
            line-height: 30px;
        }
        
    </style>
</head>
<body>
    <div id="sitebar">
        <div class="admin-profile">
            <div class="img"><img src="/../images/mail.png" alt=""></div>
            <p class="name" style="font-weight : 600;">ADMIN</ơ>
                <br>
            <p style="font-size : 10px;">Chào Mừng Quay Trở Lại</p>
        </div>
        <div class="list">
            <ul>
                <li><a href="./index.php"><i class="fa-solid fa-list"></i>Danh Sách Món Ăn</a></li>
                <li style="background-color: #FFD33A;"><a style="color: #000;" href=""><i class="fa-solid fa-square-plus"></i>Thêm Món Ăn</a></li>
                <li><a href="./order.php"><i class="fa-solid fa-list"></i></i>Danh Sách Đơn Hàng</a></li>
                <li><a href="./booking-table.php"><i class="fa-solid fa-list"></i></i>Danh Sách Đặt Bàn</a></li>
                <!-- <li><a href=""><i class="fa-solid fa-list"></i></i>Danh Sách Ảnh</a></li> -->
                <li><a href="./user_list.php"><i class="fa-solid fa-list"></i>Danh Sách User</a></li>
            </ul>
        </div>
    </div>
    <div id="main-content">
        <!-- có thể thay đổi nội dung -->
        <div class="add-product-title">
            <h1 style="width: 100%;text-align: center;padding-top: 30px;">Thêm Món Ăn</h1>
            <form action="./process_product.php" method="POST">
                <div>
                    <label for="productName">Tên Món</label>
                    <br>
                    <input type="text" name="productName" id="productName">
                </div>
                <div>
                    <label for="productPrice">Giá Tiền</label>
                    <br>
                    <input type="text" name="productPrice" id="productPrice">
                </div>
                <!-- <div>
                    <label for="cost">Nguyên Liệu</label>
                    <br>
                    <input type="text" name="cost" id="cost">
                </div> -->
                <div>
                    <label for="productImage">Url Ảnh</label>
                    <br>
                    <input type="text" name="productImage" id="productImage">
                </div>
                <div class="submit">
                    <input type="submit" id="submit" value="Nhập">
                </div>
            </form>
        </div>
        <!-- có thể thay đổi nội dung -->
    </div>
    <div class="logout">
        <a href="../../../indexAdmin.php"> <i class="fa-solid fa-right-from-bracket"></i></a>
    </div>
</body>
</html>
