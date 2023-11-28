<?php
$servername = "127.0.0.1:3309
";
$username = "root";
$password = "";
$dbname = "duan";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}
?>

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
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
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




        /* Style for the form container */
        form {
            width: 90%;
            margin: 0 auto;
            display: block;
            background-color: #002D33;
            background-color: #002D33;
            padding: 50px 50px;
            border-radius: 10px;

        }

        /* Style for form headings */
        h2 {
            color: #fff;
            text-align: center;

        }

        /* Style for form labels */
        form label {

            display: block;
            margin: 10px 0 5px;
            color: #555;
        }

        /* Style for form input fields */
        form input[type='text'] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            margin-bottom: 10px;
            box-sizing: border-box;
            background-color: none;
            border-top: none;
            border-right: none;
            border-left: none;
        }

        form input[type='text']:focus {
            background-color: transparent;
            outline: none;
        }

        /* Style for form submit button */
        form input[type="submit"] {
            margin: 10px 0;
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

        /* Style for form image display */
        form img {
            width: 100%;
            scale: 100%;
            height: auto;
            margin-top: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            display: block;
            /* Ensure images don't affect inline alignment */
            margin-bottom: 10px;
        }

        /* Hover effect for the submit button */
        form input[type="submit"]:hover {
            background-color: transparent;
            color: #23AD4A;
        }

        .left-img {
            float: left;
            width: 40%;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .text-pro {
            float: right;
            color: #fff;
            width: 60%;
            background-color: #002D33;
            padding: 50px 50px;

        }

        .return {
            color: #000;
            position: absolute;
            top: 0;
            left: 10px;
        }

        .return:hover {
            text-decoration: underline;
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
                <li style="background-color: #FFD33A;"><a style="color: #000;" href="./index.php"><i class="fa-solid fa-list"></i>Danh Sách Món Ăn</a></li>
                <li><a href="./order.php"><i class="fa-solid fa-list"></i></i>Danh Sách Đơn Hàng</a></li>
                <li><a href="./booking-table.php"><i class="fa-solid fa-list"></i></i>Danh Sách Đặt Bàn</a></li>
                <li><a href="./gallery_img.php"><i class="fa-solid fa-list"></i></i>Danh Sách Ảnh</a></li>
                <li><a href="./user_list.php"><i class="fa-solid fa-list"></i>Danh Sách User</a></li>
            </ul>
        </div>
    </div>
    <div id="main-content">
        <!-- có thể thay đổi nội dung -->

        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM products WHERE id = $id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                // Hiển thị form cập nhật với dữ liệu cũ
                echo " <a href='./index.php'class='return'><i class='fa-solid fa-angle-left'></i> Về trang chủ</a>";
                echo "<form action='update_process.php' method='post'>";
                echo "<div class='text-pro'>";
                echo "<h2>Cập Nhật Sản Phẩm</h2> <br>";
                echo "<input type='hidden' name='id' value='$id'>";
                echo "Tên mới:<input type='text' name='new_name' value='{$row['productName']}'><br>";
                echo "Giá mới: <input type='text' name='new_price' value='{$row['productPrice']}'><br>";
                echo "Ảnh mới: <input type='text' name='new_image' value='{$row['productImage']}'><br>";
                echo "<input type='submit' value='Cập nhật'>";
                echo "</div>";
                echo "<div class='left-img'>";
                echo "<img src='{$row['productImage']}' alt='Product Image'><br>";

                echo "</form>";
            } else {
                echo "Không tìm thấy dữ liệu.";
            }
        }

        $conn->close();
        ?>
        <!-- có thể thay đổi nội dung -->
    </div>
    </div>
    <div class="logout">
        <a href="../../../indexAdmin.php"> <i class="fa-solid fa-right-from-bracket"></i></a>
    </div>
</body>

</html>