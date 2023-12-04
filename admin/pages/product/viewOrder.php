<?php
session_start();

$user = $_SESSION["username"];
$kqUser = 0;

$maDsmon = $_GET['maDsmon'];

function generateRandomString() {
    $prefix = "M";
    $suffix = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);
    return $prefix . $suffix;
}

// Sử dụng hàm để tạo chuỗi ngẫu nhiên
$randomString = generateRandomString();

// // 
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

$sql = "SELECT * FROM dsMon WHERE maHang = '$maDsmon'";
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
        }

        #main-content .add-product-title .main-title {
            width: 100%;
            padding: 10px;
            border-bottom: 1px solid #FFD33A;
        }
/* 
        form {
            width: 90%;
            margin-top: 40px;
            margin-left: auto;
            margin-right: auto;
            display: grid;
            grid-template-columns: 33.33% 33.33% 33.33%;
        } */

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

        /* #submit {
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
        } */

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
        /*  */

        #submit {
            width: auto;
    height: 40px;
    font-size: 16px;
    font-weight: bold;
    color: #fff;
    background-color: #23AD4A;
    border: 2px solid #23AD4A;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
    margin: 15px auto;
    display: block;
}

#submit:hover {
    background-color: #1C8E3E;
}

/* Thêm một lớp mới cho ô select để chỉnh sửa kiểu */
.trangThaiSelect {
    width: 100%;
    padding: 8px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 14px;
    margin-top: 5px;
}

/* Đặt kích thước chữ và màu sắc cho option trong select */
.trangThaiSelect option {
    font-size: 14px;
    color: #000;
}
/*  */


#toast {
    position: fixed;
    top: 10px;
    right: 5px;
    z-index: 999;
}

.toast {
    display: flex;
    align-items: center;
    background-color: #fff;
    border-radius: 2px;
    padding: 5px 0;
    min-width: 400px;
    max-width: 450px;
    border-left: 4px solid #47d864;
    box-shadow: 0 5px 8px rgba(0, 0, 0, 0.08);
    transition: all linear 0.5s;
    margin-bottom: 10px;
  }
  
  @keyframes slideInLeft {
    from {
      opacity: 0;
      transform: translateX(calc(100% + 32px));
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }
  
  @keyframes fadeOut {
    to {
      opacity: 0;
    }
  }
  .toast__icon {
    font-size: 20px;


  }

  .toast--success {
    border-color: #47d864;
  }
  
  .toast--success .toast__icon {
    color: #47d864;
  }
  
  .toast--info {
    border-color: #47d864;
  }
  
  .toast--info .toast__icon {
    color: #47d864;
  }
  
  .toast__icon,
  .toast__close {
    padding: 0 16px;
  }
  .toast__body {
    flex-grow: 1;
  }
  .toast__msg {
    font-size: 14px;
    color: #888;
    margin: 10px;
    line-height: 1.5;
  }

  .toast__close {
    font-size: 20px;
    color: rgba(0, 0, 0, 0.3);
    cursor: pointer;
  }
    </style>
</head>
<body>
<div id="notificationBar" class="notification-bar"></div>


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
                <li style="background-color: #FFD33A;"><a style="color: #000;" href="./order.php"><i class="fa-solid fa-cart-shopping"></i>Danh Sách Đơn Hàng</a></li>
                <li><a href="./booking-table.php"><i class="fa-solid fa-chair"></i>Danh Sách Đặt Bàn</a></li>
                <li><a href="./gallery_img.php"><i class="fa-solid fa-image"></i>Danh Sách Ảnh</a></li>
                <li><a href="./user_list.php"><i class="fa-solid fa-user"></i>Danh Sách User</a></li>
                <li><a href="./thongKe.php"><i class="fa-solid fa-bars"></i>Thống Kê</a></li>
            </ul>
        </div>
    </div>
    <div id="main-content">
        <!-- có thể thay đổi nội dung -->
        <h1 style="width: 100%;text-align: center;padding-top: 30px;">Chi Tiết Đơn Hàng</h1>
        <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Hình Ảnh</th>
                <th>Tên Món</th>
                <th>Giá</th>
                <th>Số Lượng</th>
            </tr>
        </thead>
        <tbody>
        <?php
                $stt = 1;
                foreach ($menuItems as $item) {

                    echo "<tr>";
                    echo "<td>{$stt}</td>";
                    echo "<td><img name='hinhAnh' src=".$item['hinhAnh']."></td>";
                    echo "<td>{$item['tenMon']}</td>";
                    echo "<td>" . number_format($item['giaTien'], 0, ',', '.') . 'đ' . "</td>";
                    echo "<td>{$item['quantity']}</td>";
                    echo "</tr>";
                  
                    $stt++;
                }

                ?>
        </tbody>
      </table>
    
        <!-- có thể thay đổi nội dung -->
    </div>
    <div class="logout">
        <a href="../../../indexAdmin.php"> <i class="fa-solid fa-house"></i></a>
    </div>
   
    


   
       

  


</body>
</html>
