<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "duan";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Khởi tạo mảng để lưu trữ dữ liệu
$menuItems = array();

// Kiểm tra kết quả truy vấn
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $menuItems[] = $row;
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c13a07f3cd.js" crossorigin="anonymous"></script>
    <style>
        /* body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        a {
            display: block;
            text-align: center;
            margin: 20px 0;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: #fff;
        }

        td img {
            width: 100px; 
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
        }

        td a {
            display: inline-block;
            padding: 6px 10px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
            transition: background-color 0.3s;
        }

        td a:hover {
            background-color: #45a049;
        } */


        /*  */

        /* body {
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

        }

        #submit {
            float: right;
            margin-top: 15px;
            margin-right: 10px;
            width: 100px;
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
        } */


        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        a {
            display: block;
            text-align: center;
            margin: 20px 0;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #45a049;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: #fff;
        }

        td img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
        }

        td a {
            display: inline-block;
            padding: 6px 10px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
            transition: background-color 0.3s;
        }

        td a:hover {
            background-color: #45a049;
        }

        /* Dashboard Styles */

        body {
            background-color: #f4f4f4;
            margin: 0;
            font-family: 'Open Sans', sans-serif;
            display: flex;
        }

        #sitebar {
            width: 20%;
            background-color: #102027;
            height: 100vh;
            overflow: auto;
            color: white;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            transition: width 0.3s;
        }

        #sitebar:hover {
            width: 25%;
        }

        .admin-profile {
            text-align: center;
            padding: 20px 0;
        }

        .admin-profile .img {
            margin-top: 2em;
            text-align: center;
        }

        .img img {
            height: 80px;
            width: 80px;
            border-radius: 50%;
            border: 3px solid #fff;
        }

        p {
            color: white;
            margin-top: 10px;
        }

        .list {
            padding: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin: 20px 0;
            border-radius: 7px;
            transition: background-color 0.3s;
        }

        li:hover {
            background-color: #1c313a;
        }

        li i {
            padding: 0 15px;
        }

        a {
            line-height: 50px;
            text-decoration: none;
            color: white;
            display: block;
        }

        li:hover a {
            color: #FFD33A;
        }

        #main-content {
            width: 80%;
            background-color: #f4f4f4;
            padding: 20px;
            box-sizing: border-box;
        }

        /* Form and Table Styles */

        form {
            width: 100%;
            margin: 40px auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 1em;
            border-radius: 5px;
            border: 2px solid #4caf50;
            transition: 0.3s;
        }

        input[type="text"]:focus {
            outline: none;
            border-radius: 5px;
            border: 2px solid #45a049;
        }

        label {
            font-weight: 600;
            font-size: 13px;
            color: #333;
        }

        span {
            font-weight: 600;
            font-size: 10px;
            color: #333;
        }

        .upload {
            grid-row: 2/3;
        }

        .upload-img {
            border-radius: 10px;
            padding: 10px 20px;
            background-color: #4caf50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .upload-img:hover {
            background-color: #45a049;
        }

        .submit {
            grid-column: span 2;
            text-align: right;
        }

        #submit {
            width: 100px;
            height: 3em;
            border-radius: 10px;
            font-weight: 700;
            color: white;
            border: 2px solid #45a049;
            background-color: #45a049;
            transition: 0.2s;
            cursor: pointer;
        }

        #submit:hover {
            background-color: transparent;
            color: #45a049;
        }

        .logout {
            position: absolute;
            top: 0;
            right: 0;
            width: 30px;
            height: 30px;
            text-align: center;
            cursor: pointer;
            background-color: #FFD33A;
            border-radius: 0 0 0 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
        }

        .logout:hover {
            background-color: #F44336;
        }

        .logout a {
            color: #000;
            line-height: 30px;
            text-decoration: none;
            display: block;
        }
    </style>
</head>
<body>
    <!-- <h2>Các Món ăn</h2>
    <a href="addProduct.php">Them san pham</a>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã món ăn</th>
                <th>Hình Ảnh</th>
                <th>Name</th>
                <th>Price</th>
                <th>Chỉnh sửa</th>
                <th>Xoá sản phẩm</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stt = 1;
            foreach ($menuItems as $item) {
                echo "<tr>";
                echo "<td>{$stt}</td>";
                echo "<td>{$item['id']}</td>";
                echo "<td><img src=".$item['productImage']."></td>";
                echo "<td>{$item['productName']}</td>";
                echo "<td>{$item['productPrice']}</td>";
                echo "<td>";
                echo " <a href='update.php?id=" . $item['id'] ."'>Sửa</a> ";
                echo "</td>";
                echo "<td>";
                echo " <a href='delete.php?id=" . $item['id'] ."'>Xóa</a> ";
                echo "</td>";
                echo "</tr>";
                $stt ++;
            }
            ?>
        </tbody>
    </table> -->


    <div id="sitebar">
        <div class="admin-profile">
            <div class="img"><img src="../../../images/mail.png" alt=""></div>
            <p class="name" style="font-weight : 600;">ADMIN</ơ>
                <br>
            <p style="font-size : 10px;">Chào Mừng Quay Trở Lại</p>
        </div>
        <div class="list">
            <ul>
                <li><a href="#"><i class="fa-solid fa-list"></i>Danh Sách Món Ăn</a></li>
                <li><a  href="../addProduct.php"><i class="fa-solid fa-square-plus"></i>Thêm Món Ăn</a></li>
                <li><a href=""><i class="fa-solid fa-list"></i></i>Danh Sách Đơn Hàng</a></li>
                <li><a href=""><i class="fa-solid fa-list"></i></i>Danh Sách Đặt Bàn</a></li>
                <li><a href=""><i class="fa-solid fa-list"></i></i>Danh Sách Ảnh</a></li>
                <li><a href=""><i class="fa-solid fa-list"></i>Danh Sách User</a></li>
            </ul>
        </div>
    </div>
    <div id="main-content">
        <!-- có thể thay đổi nội dung -->
        <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã món ăn</th>
                <th>Hình Ảnh</th>
                <th>Name</th>
                <th>Price</th>
                <th>Chỉnh sửa</th>
                <th>Xoá sản phẩm</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stt = 1;
            foreach ($menuItems as $item) {
                echo "<tr>";
                echo "<td>{$stt}</td>";
                echo "<td>{$item['id']}</td>";
                echo "<td><img src=".$item['productImage']."></td>";
                echo "<td>{$item['productName']}</td>";
                echo "<td>{$item['productPrice']}</td>";
                echo "<td>";
                echo " <a href='update.php?id=" . $item['id'] ."'>Sửa</a> ";
                echo "</td>";
                echo "<td>";
                echo " <a href='delete.php?id=" . $item['id'] ."'>Xóa</a> ";
                echo "</td>";
                echo "</tr>";
                $stt ++;
            }
            ?>
        </tbody>
    </table>
        <!-- có thể thay đổi nội dung -->
    </div>
    <div class="logout">
        <a href="../../../indexAdmin.php"> <i class="fa-solid fa-right-from-bracket"></i></a>
    </div>
</body>
</html>
