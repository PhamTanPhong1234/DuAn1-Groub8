<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "duan";

$conn = new mysqli($severname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}
// chọn tất cả từ bảng product

$sql = "SELECT * FROM donOnline";
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
    <title>Thêm Sản Phẩm</title>
    <link rel="shortcut icon" href="../../images/favicon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c13a07f3cd.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

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
<div id="toast"></div>

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
            </ul>
        </div>
    </div>
    <div id="main-content">
        <!-- có thể thay đổi nội dung -->
        <h1 style="width: 100%;text-align: center;padding-top: 30px;">Danh Sách Đặt Hàng</h1>
    <form method="POST" action="update_trangthai.php" id="updateForm">

        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>ID Đơn Hàng</th>
                    <th>Tên Khách Hàng</th>
                    <th>Địa Chỉ</th>
                    <th>Danh Sách Món</th>
                    <th>Tổng Tiền</th>
                    <th>Trạng Tái Đơn Hàng</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $stt = 1;
                foreach ($menuItems as $item) {
                    echo "<tr>";
                    echo "<td>{$stt}</td>";
                    echo "<td>{$item['maDH']}</td>";
                    echo "<td>{$item['tenKH']}</td>";
                    echo "<td>{$item['Dchi']}</td>";
                    echo "<td>{$item['maDsmon']}</td>";
                    echo "<td>{$item['tongTien']}</td>";
                    echo "<td><select name='trangThai[]' class='trangThaiSelect'>";
                    echo "<option value='0' " . ($item['trangThai'] == 0 ? 'selected' : '') . ">Đang chuẩn bị</option>";
                    echo "<option value='1' " . ($item['trangThai'] == 1 ? 'selected' : '') . ">Đã xong</option>";
                    echo "</select></td>";
                    echo "<input type='hidden' name='maDH[]' value='{$item['maDH']}'>";
                    $stt++;                  
                }
                ?>
            </tbody>

        </table>
        <input type="submit" id="submit" value="Cập nhật trạng thái">
    </form>
        <!-- có thể thay đổi nội dung -->
    </div>
    <div class="logout">
        <a href="../../../indexAdmin.php"> <i class="fa-solid fa-right-from-bracket"></i></a>
    </div>
    <script>
$(document).ready(function () {
    // Sự kiện nút submit được click
    $('#updateForm').submit(function (event) {
        // Ngăn chặn hành động mặc định của form (chặn việc load lại trang)
        event.preventDefault();

        // Lấy dữ liệu từ form
        var formData = $(this).serialize();

        // Gửi dữ liệu lên server bằng Ajax
        $.ajax({
            type: 'POST',
            url: 'update_trangthai.php',
            data: formData,
            success: function (response) {
                console.log(response); // In response từ server (có thể xóa dòng này sau khi đã kiểm tra)
                // Có thể thêm các xử lý khác nếu cần
                toast({
                        message: "Đã chỉnh sửa thành công.",
                        type: "success",
                        duration: 3000
                    });
            },
            error: function (error) {
                console.error('Lỗi Ajax:', error);
                toast({
                        message: "Đã xảy ra lỗi khi chỉnh sửa.",
                        type: "info",
                        duration: 3000
                    });
            }
        });
    });

    // Sự kiện thay đổi của trạng thái
    $('select.trangThaiSelect').change(function () {
        // Lấy giá trị mới
        var trangThai = $(this).val();

        // Lấy id của bản ghi
        var maDH = $(this).siblings('input[type="hidden"]').val();

        // Gửi dữ liệu lên server bằng Ajax
        $.ajax({
            type: 'POST',
            url: 'update_trangthai.php',
            data: {
                trangThai: trangThai,
                maDH: maDH
            },
            success: function (response) {
                console.log(response); // In response từ server (có thể xóa dòng này sau khi đã kiểm tra)
                // Có thể thêm các xử lý khác nếu cần
                toast({
                        message: "Hãy xác nhận cập nhật ở dưới.",
                        type: "success",
                        duration: 3000
                    });
            },
            error: function (error) {
                console.error('Lỗi Ajax:', error);
                toast({
                        message: "Đã xảy ra lỗi khi thêm đơn hàng.",
                        type: "info",
                        duration: 3000
                    });
            }
        });
    });
});
</script>


<script>
        function toast({  message = "", type = "info", duration = 3000 }) {
    const main = document.getElementById("toast");
    if (main) {
      const toast = document.createElement("div");
  
      // Auto remove toast
      const autoRemoveId = setTimeout(function () {
        main.removeChild(toast);
      }, duration + 1000);
  
      // Remove toast when clicked
      toast.onclick = function (e) {
        if (e.target.closest(".toast__close")) {
          main.removeChild(toast);
          clearTimeout(autoRemoveId);
        }
      };
  
      const icons = {
        success: "fa-solid fa-cart-shopping",
        info: "fas fa-info-circle"

      };
      const icon = icons[type];
      const delay = (duration / 1000).toFixed(2);
  
      toast.classList.add("toast", `toast--${type}`);
      toast.style.animation = `slideInLeft ease .3s, fadeOut linear 1s ${delay}s forwards`;
  
      toast.innerHTML = `
                      <div class="toast__icon">
                          <i class="${icon}"></i>
                      </div>
                      <div class="toast__body">
                          <p class="toast__msg">${message}</p>
                      </div>
                      <div class="toast__close">
                          <i class="fas fa-times"></i>
                      </div>
                  `;
      main.appendChild(toast);
    }
  }
    </script>

</body>

</html>