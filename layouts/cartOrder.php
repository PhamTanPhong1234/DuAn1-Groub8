
<?php
session_start();

$user = $_SESSION["username"];
$kqUser = 0;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "duan";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

$sqlUser = "SELECT * FROM admin WHERE username = '$user'";
$resulT = $conn->query($sqlUser);

if ($resulT->num_rows > 0) {
    $kqUser = 1;
} 



$sql = "SELECT * FROM donOnline Where tenKH = '$user'";
$result = $conn->query($sql);


$menuItems = array();

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
    <title>Menu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/c13a07f3cd.js" crossorigin="anonymous"></script>
    <style>
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
            margin: 0 auto;
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
            max-with: 250px;
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
            height: 100vh;
            /* Giữ chiều cao của sitebar là 100% chiều cao của viewport */
            overflow-y: auto;
        }

        /* Form and Table Styles */


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
            top: -18px;
            right: 0;
            width: 36px;
            height: 30px;
            text-align: center;
            cursor: pointer;
            border-radius: 0 0 0 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
        }

        
        .logout a {
            color: #000;
            line-height: 30px;
            text-decoration: none;
            display: block;
        }



        .tongCar {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px 0;
            position: absolute;
            right: 22px;
            width: 190px;
            top: 65px;
            border: 4px solid #4caf50;
            padding: 10px 0;
            border-radius: 10px;
        }

        label {
            margin-bottom: 8px;
        }

        input {
            padding: 8px;
            margin-bottom: 12px;
            width: 150px;
        }

        button {
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        /*  */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        #orderForm {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            display: none;
        }

        #orderForm label {
            display: block;
            margin: 10px 0;
        }

        #orderForm input,
        #orderForm select {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #orderForm button {
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #orderForm button:hover {
            background-color: #45a049;
        }

        #orderButton {
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #orderButton:hover {
            background-color: #45a049;
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
            <div class="img"><img
                    src="https://png.pngtree.com/png-vector/20191030/ourlarge/pngtree-cart-plain-shoping-trolly-icon-vector-illustration-for-web-png-image_1927620.jpg"
                    alt=""></div>
            <p class="name" style="font-weight : 600;">Chào  <?php echo $user ?>  </ơ>
                <br>
            <p style="font-size : 10px;">Chào Mừng Quay Trở Lại</p>
        </div>
        <div class="list">
            <ul>
                <li><a href="./cart.php"><i class="fa-solid fa-credit-card"></i>Giỏ hàng</a></li>
                <li><a style="background-color:#1C8FC8 ;" href="./cartOrder.php"><i class="fa-solid fa-truck"></i> Đơn
                        Hàng</a></li>
            </ul>
        </div>
    </div>
    <div id="main-content">
        <!-- có thể thay đổi nội dung -->

        <h1 style=" font-weight: bold; width: 100%;text-align: center;padding-top: 30px;">Theo Dõi Đơn Hàng</h1>
        <table>
            <thead>
                <tr>
                    <th>ID Đơn Hàng</th>
                    <th>Tên Khách Hàng</th>
                    <th>Địa Chỉ</th>
                    <th>Món</th>
                    <th>Tổng Tiền</th>
                    <th>Trạng Tái Đơn Hàng</th>
                </tr>
            </thead>
            <tbody>
                 <?php               
                        foreach ($menuItems as $item) {
                            echo "<tr>";
                            echo "<td>{$item['maDsmon']}</td>";
                            echo "<td>{$item['tenKH']}</td>";
                            echo "<td>{$item['Dchi']}</td>";
                            echo "<td> <a class='view-detail' data-maDsmon='{$item['maDsmon']}' href='view_detail.php?maDsmon={$item['maDsmon']}'>Xem Chi Tiết</a> </td>";
                            echo "<td>" . number_format($item['tongTien'], 0, ',', '.') . 'đ' . "</td>";
                            echo "<td>";

                            if ($item['trangThai'] == 1) {
                                echo "Xong";
                            } else {
                                echo "<span style='color:red;'>Đang chuẩn bị</span>";
                            }
                        
                            echo "</td>";
                            echo "</tr>";
                        }
                ?>
            </tbody>
        </table>
        <!-- có thể thay đổi nội dung -->
    </div>
    <div class="logout">
            <?php
                if($kqUser==1) {
                    echo '<a href="../indexAdmin.php"><i class="fa-solid fa-house"></i></a>';
                } else if($kqUser==0) {
                    echo '<a href="../index.php"><i class="fa-solid fa-house"></i></a>';
                }
            ?>

    </div>



        
        <script>
    document.addEventListener("DOMContentLoaded", function () {
        var viewDetailLinks = document.querySelectorAll('.view-detail');

        viewDetailLinks.forEach(function (link) {
            link.addEventListener('click', function (event) {
                // Ngăn chặn hành động mặc định của nút
                event.preventDefault();

                // Lấy mã sản phẩm từ thuộc tính data-maDsmon
                var maDsmon = link.getAttribute('data-maDsmon');

                // Chuyển hướng đến trang view_detail.php với mã sản phẩm qua URL
                window.location.href = 'view_detail.php?maDsmon=' + maDsmon;
            });
        });
    });
</script>



</body>

</html>