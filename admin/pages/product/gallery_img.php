<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "duan";

$conn = new mysqli($severname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $img_url = $_POST['url_img'];
    $img_type = $_POST['choices'];
    $img_note = $_POST['url_note'];
    $img_sql = "INSERT INTO gallery (image_url, image_type, image_note) VALUES ('$img_url','$img_type','$img_note')";
    if (empty($img_url)) {
        $message = "Vui Lòng Nhập Url ảnh";
    } else {
        $img_result = $conn->query($img_sql);
        $message = "Nhập Thành Công";
    }
}
// chọn tất cả từ bảng product
$sql = "SELECT * FROM gallery";
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
            width: 150px;
            height: 150px;
            object-fit: cover;
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

        #enter {
            position: fixed;
            bottom: 0;
            right: 0;
            width: 75%;
            display: block;
            background-color: #000;
        }

        #enter .wrap {
            width: 90%;
            margin: 0 auto;
        }

        #enter input[type='text'] {
            margin-top: 2px;
            width: 20%;
        }

        #enter input[type='text']:focus {
            color: red;
        }


        ::placeholder {
            font-style: italic;
            color: rgba(0, 0, 0, 0.3);
        }

        #enter input[type='submit'] {
            width: 150px;
            height: 3em;
            border-radius: 10px;
            font-weight: 700;
            color: white;
            border: 2px solid #23AD4A;
            background-color: #23AD4A;
            transition: 0.2s;
            cursor: pointer;
            float: right;
        }

        #choices {
            width: 200px;
            padding: 6px;
            font-size: 16px;
            border-radius: 5px;

        }

        #choices option {
            font-size: 14px;
        }

        #choices:hover {}

        #choices:focus {
            outline: none;
            border-color: #72ACFC;
            box-shadow: 0 0 5px rgba(92, 184, 92, 0.5);
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
            <li ><a  href="./index.php"><i class="fa-solid fa-list"></i>Danh Sách Món Ăn</a></li>
                <li><a href="./order.php"><i class="fa-solid fa-cart-shopping"></i>Danh Sách Đơn Hàng</a></li>
                <li><a href="./booking-table.php"><i class="fa-solid fa-chair"></i>Danh Sách Đặt Bàn</a></li>
                <li style="background-color: #FFD33A;"><a style="color: #000;" href="./gallery_img.php"><i class="fa-solid fa-image"></i>Danh Sách Ảnh</a></li>
                <li><a href="./user_list.php"><i class="fa-solid fa-user"></i>Danh Sách User</a></li>
            </ul>
        </div>
    </div>
    <div id="main-content">
        <!-- có thể thay đổi nội dung -->
        <h1 style="width: 100%;text-align: center;padding-top: 30px;">Thư Viện Ảnh</h1>
        <table>
            <thead>
                <th>Hình Ảnh</th>
                <th>Loại</th>
                <th>Ghi chú</th>
                <th>Chỉnh Sửa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $stt = 1;
                foreach ($menuItems as $item) {
                    echo "<tr>";
                    echo "<td><img src=" . $item['image_url'] . "></td>";
                    echo "<td>" . $item['image_type'] . "</td>";
                    echo "<td>" . $item['image_note'] . "</td>";

                    echo "<td>";

                    echo " <a style='background-color:red;' href='gallery_delete.php?id=" . $item['id'] . "'>Xóa</a> ";
                    echo "</td>";
                    echo "</tr>";
                    $stt++;
                }
                ?>
            </tbody>
        </table>
        <form id="enter" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            <div class="wrap"><span style="font-size: 15px; font-weight: bold;color: #fff;line-height: 50px;">THÊM ẢNH &nbsp &nbsp <span style="font-size: 12px; font-weight: bold;color: #FFD33A;line-height: 50px;margin: 10px 0;"><?php echo $message; ?></span></span><br>
                <input type="text" name="url_img" id="url_img" placeholder="Nhập URL Ảnh ">

                <select id="choices" name="choices">
                    <option value="Food & Drink">Food & Drink</option>
                    <option value="Vip & Cigar Room">Vip & Cigar Room</option>
                    <option value="Restaurant & Lounge">Restaurant & Lounge</option>
                </select>
                <input type="text" name="url_note" id="url_note" placeholder="Ghi Chú" value='None'>

                <input type="submit" value="Nhập">
                <br><br>
            </div>
        </form>
        <!-- có thể thay đổi nội dung -->
    </div>
    <div class="logout">
        <a href="../../../indexAdmin.php"> <i class="fa-solid fa-right-from-bracket"></i></a>
    </div>
</body>
</html>