<?php
session_start();

$conn = connect_db();

$username = $_SESSION["username"];

$sql = "SELECT * FROM products";
echo $sql; // Thêm lệnh debug

$result = $conn->query($sql);

// Khởi tạo mảng để lưu trữ dữ liệu
$menuItems = array();

// Kiểm tra kết quả truy vấn
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $menuItems[] = $row;
    }
}else {
    echo "Không có dữ liệu trả về từ truy vấn!";
}


$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food & Drink</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


    <style>
        .section-titles {
            position: relative;
            padding-top: 75px;
        }

        .text-center {
            text-align: center !important;
        }

        .section-titles h2 {
            font-size: 34px;
            color: #a80e0e;
            margin: 0px;
            line-height: 120%;
        }

        .section-titles .section-title-border {
            width: 50%;
            margin: 20px auto;
            display: inline-block;
        }

        img {
            vertical-align: middle;
            max-width: 100%;
            border: 0 none;
        }

        p {
            margin: 0 0 15px 0;
        }

        .containers {
            width: 100%;
        }

        .items {
            width: 80%;
            margin: 50px auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
        }

        .product {
            display: flex;
            border: 1px solid #ddd;
            margin: 10px;
            padding: 10px;
            max-width: 300px;
            transition: transform 0.3s ease-in-out;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 8px;
        }

        .product:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .product img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-right: 10px;
            border-radius: 4px;
        }

        .product-info {
            flex-grow: 1;
        }

        .product h2 {
            font-size: 18px;
            margin-bottom: 8px;
            color: #333;
        }

        .product p {
            margin-bottom: 12px;
            color: #666;
        }

        .product p.price {
            font-weight: bold;
            color: #e44d26;
        }

        .product button {
            background-color: #e44d26;
            color: white;
            padding: 8px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .product button:hover {
            background-color: #333;
        }

        .hidden {
            display: none;
        }
        button {
    background-color: #e44d26;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    border-radius: 4px;
    font-size: 16px;
    transition: background-color 0.3s ease-in-out;
    display: block;
    margin: 20px auto;
}

button:hover {
    opacity:0.7;
}
/*  */



#toast {
    position: fixed;
    top: 10px;
    right: 5px;
    z-index: 99999;
}

.toasts {
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
    border-color: red;
  }
  
  .toast--info .toast__icon {
    color: red;
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

    <section class="bread-crumb has-bg">
        <div class="overlay"></div>
        <div class="breadcrumb-container text-center">
            <h1 class="title-page">Food &amp; Drink</h1>
        </div>
    </section>

    <div class="section-titles wow fadeInDown text-center" style="visibility: visible; animation-name: fadeInDown;">
        <h2>
            Bạn muốn ăn gì? 
        </h2>
        <span class="section-title-border text-center">
            <img src="//theme.hstatic.net/1000093072/1001049829/14/title_border.png?v=162" alt="title border">
        </span>
        <p>
            Với thực đơn gồm nhiều món ăn, đậm chất miền Nam Bộ, nhà hàng Phương Nam chắc chắn sẽ chinh phục được vị giác của bạn chỉ sau 1 lần thử!
        </p>
    </div>

    <div class="containers">
        <div class="items" id="product-container">
            
        <?php
            foreach ($menuItems as $item) {
                echo '<div class="product">';
                echo '<img src="' . $item['productImage'] . '" alt="' . $item['productName'] . '">';
                echo '<div class="product-info">';
                echo '<h2>' . $item['productName'] . '</h2>';
                echo '<h2 style="display:none;">' . $item['id'] . '</h2>';
                // echo '<p>Mô tả món ăn và thông tin khác...</p>';
                echo '<p>Giá: ' . $item['productPrice'] . ' VNĐ</p>';


                echo '<form class="add-to-cart-form" method="post" action="./pages/process_add_to_cart.php">';
                echo '<input type="hidden" name="productId" value="' . $item['id'] . '">';
                echo '<input type="hidden" name="productName" value="' . $item['productName'] . '">';
                echo '<input type="hidden" name="productPrice" value="' . $item['productPrice'] . '">';
                echo '<input type="hidden" name="productImage" value="' . $item['productImage'] . '">';
                echo '<input type="hidden" name="username" value="' . $username . '">';
                echo '<button type="submit">Thêm vào giỏ hàng</button>';
                echo '</form>';
               
                echo '</div></div>';
            }

            ?>
        
            
        </div>
        <button onclick="toggleHidden()">Hiển thị thêm</button>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const productContainer = document.getElementById("product-container");
            const products = productContainer.getElementsByClassName("product");

            // Hide products after the 8th one
            for (let i = 6; i < products.length; i++) {
                products[i].classList.add("hidden");
            }
        });

        function toggleHidden() {
            const hiddenProducts = document.querySelectorAll('.product.hidden');

            // Toggle the 'hidden' class for the remaining products
            hiddenProducts.forEach(product => {
                product.classList.toggle('hidden');
            });

            // Change the button text based on the state
            const button = document.querySelector('button');
            const buttonText = hiddenProducts.length > 0 ? 'Hiển thị thêm' : 'Ẩn bớt';
            button.innerText = buttonText;
        }
    </script>


<script>
$(document).ready(function() {
    $('.add-to-cart-form').submit(function(e) {
        // Ngăn chặn gửi form mặc định
        e.preventDefault();

        // Lấy dữ liệu từ form
        var formData = $(this).serialize();

        // Gửi Ajax request
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: formData,
            success: function(response) {
                // Xử lý kết quả thành công
                console.log(response);


                toast({
                    message: "Đã thêm giỏ hàng thành công.",
                    type: "success",
                    duration: 3000
                });
                
            },
            error: function(error) {
                // Xử lý lỗi
                console.error(error);

                // Hiển thị thông báo lỗi
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
      }, duration + 2000);
  
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
  
      toast.classList.add("toasts", `toast--${type}`);
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
