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
            padding: 0 20px;
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
        #main-content .add-product-title{
            width: 70vw;
            height: 90vh;
            background-color: white;
            margin-top: 10px;
            margin-left:  auto;
            margin-right:  auto;
            margin-bottom:  auto;
            border-radius: 7px;
            box-shadow: 2px 2px 2px 2px #ccc;
            padding: 0 10px;
        }
        #main-content .add-product-title .main-title{
            width: 100%;
            padding: 10px;
            border-bottom: 1px solid #FFD33A;
            
        }
    </style>
</head>

<body>
    <div id="sitebar">
        <div class="admin-profile">
            <div class="img"><img src="../../images/mail.png" alt=""></div>
            <p class="name" style="font-weight : 600;">ADMIN</ơ>
                <br>
            <p style="font-size : 10px;">Chào Mừng Quay Trở Lại</p>
        </div>
        <div class="list">
            <ul>
                <li><a href=""><i class="fa-solid fa-list"></i>Danh Sách Món Ăn</a></li>
                <li><a href=""><i class="fa-solid fa-list"></i>Danh Sách Đặt Bàn</a></li>
                <li style="background-color: #FFD33A;"><a style="color: #000;" href=""><i class="fa-solid fa-square-plus"></i>Thêm Món Ăn</a></li>
                <li><a href=""><i class="fa-solid fa-square-plus"></i></i>qeqweqwe</a></li>
                <li><a href=""><i class="fa-solid fa-square-plus"></i></i>qưeqweqwe</a></li>
            </ul>
        </div>
    </div>
    <div id="main-content">
        <!-- có thể thay đổi nội dung -->
        <div class="add-product-title">
            <div class="main-title"><h3>Thêm Sản Phẩm</h3></div>
        </div>
        <form action="">
            <div></div>
        </form>

        <!-- có thể thay đổi nội dung -->
    </div>
</body>

</html>
<!-- <form action="process_product.php" method="post">
        <h2>Add Product</h2>
        <label for="productName">Product Name:</label>
        <input type="text" id="productName" name="productName" required>

        <label for="productPrice">Product Price:</label>
        <input type="number" id="productPrice" name="productPrice" required>

        <label for="productImage">Product Image URL:</label>
        <input type="url" id="productImage" name="productImage" required>

        <button type="submit">Add Product</button>
    </form> -->