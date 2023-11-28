<?php
$severname = "127.0.0.1:3309
";
$username = "root";
$password = "";
$dbname = "duan";

$conn = new mysqli($severname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}
$message = '';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $price= $_POST['price'];
    $url = $_POST['url'];
    $create_sql = "INSERT INTO products (productName,productPrice ,productImage ) VALUES ('$name','$price','$url')";
    $result = $conn->query($create_sql);
}
// chọn tất cả từ bảng product
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Khởi tạo mảng để lưu trữ dữ liệu
$menuItems = array();

// Kiểm tra kết quả truy vấn
if ($result->num_rows > 0) {
    //tạo vòng lặp để xuất mảng menuItem
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
            overflow: auto;
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
            position: relative;
        }

        #main-content .add-product-title .main-title {
            width: 100%;
            padding: 10px;
            border-bottom: 1px solid #FFD33A;
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

        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            overflow: hidden;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
            text-align: center;
            font-weight: 600;
        }

        th {
            text-align: center;
            background-color: #002D33;
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
            padding: 2px 20px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border-radius: 10px;
            transition: background-color 0.3s;
        }

        td a:hover {
            background-color: #45a049;
        }

        .return {
            color: #000;
            position: absolute;
            top: 10%;
            right: 3.8%;
            padding: 0 12px;
            /* điều chỉnh giảm hoặc tăng kích thước nút */
            text-decoration: none;
            background-color: #4CAF50;
            /* màu nền */
            color: white;
            /* màu chữ */
            border-radius: 5px;
            /* bo góc */
            transition: background-color 0.3s;
        }

        form {
            position: absolute;
            top: 11%;
            z-index: 10;
            right: 3.8%;
            display: none;
            width: 400px;
            ;
            margin: 50px auto;
            padding: 20px;
            background-color: rgb(255, 211, 58);
            border-radius: 8px;
            box-shadow: 5px 5px rgba(0, 0, 0, 0.1);
        }

        .logo img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        form .header {
            text-align: center;
            font-size: 28px;
            color: #000;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #2196F3;
            color: white;
            border: none;
            cursor: pointer;
            transition: 0.2s;
        }

        input[type="submit"]:hover {
            background-color: #002D33;
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
                <li><a href="./order.php"><i class="fa-solid fa-cart-shopping"></i>Danh Sách Đơn Hàng</a></li>
                <li><a href="./booking-table.php"><i class="fa-solid fa-chair"></i>Danh Sách Đặt Bàn</a></li>
                <li><a href="./gallery_img.php"><i class="fa-solid fa-image"></i>Danh Sách Ảnh</a></li>
                <li><a href="./user_list.php"><i class="fa-solid fa-user"></i>Danh Sách User</a></li>
            </ul>
        </div>
    </div>
    <div id="main-content">
        <!-- có thể thay đổi nội dung -->
        <a onclick="OpenFormCreateUser()" href='#' class='return'><i class='fa-solid fa-square-plus'></i>&nbspThêm Món Ăn</a>
        <form form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="logo"><img src="../images/Logohanquoc.png" alt=""></div>
            <h1 class="header">Thêm Món</h1>
            <input type="text" id="name" name="name" required placeholder="Tên Món">
            <input type="text" id="price" name="price" required placeholder="Giá tiền">
            <br>
            <input type="text" id="quantity" name="quantity" required placeholder="Số Lượng">
            <br>
            <input type="text" id="url" name="url" required placeholder="URL Ảnh (3X4)">
            <br>
            <input type="submit" value="Tạo">
            <br>
            <h4 style="color: red;"><?php echo $message; ?></h4>
        </form>
        <h1 style="width: 100%;text-align: center;padding-top: 30px;">Danh Sách Món Ăn</h1>
        <table>

            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã món ăn</th>
                    <th>Hình Ảnh</th>
                    <th>Tên Món </th>
                    <th>Giá Tiền</th>
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
                    echo "<td><img src=" . $item['productImage'] . "></td>";
                    echo "<td>{$item['productName']}</td>";
                    echo "<td>{$item['productPrice']}</td>";
                    echo "<td>";
                    echo " <a  style='background-color: #2196F3;' href='update.php?id=" . $item['id'] . "'>Sửa</a> ";
                    echo "</td>";
                    echo "<td>";
                    echo " <a style='background-color:red;' href='delete.php?id=" . $item['id'] . "'>Xóa</a> ";
                    echo "</td>";
                    echo "</tr>";
                    $stt++;
                }
                ?>
            </tbody>
        </table>
        <!-- có thể thay đổi nội dung -->
    </div>
    <div class="logout">
        <a href="../../../indexAdmin.php"> <i class="fa-solid fa-right-from-bracket"></i></a>
    </div>
    <script>
        function OpenFormCreateUser() {
            let formCreateUser = document.querySelector('#main-content  form');
            if (formCreateUser.style.display == "block") {
                formCreateUser.style.display = "none"
            } else {
                formCreateUser.style.display = "block"
            }
        }
    </script>
</body>

</html>