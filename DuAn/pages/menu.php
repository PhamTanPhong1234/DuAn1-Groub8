<?php


$conn = connect_db();

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

    </style>
</head>
<body>

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
                echo '<p>Mô tả món ăn và thông tin khác...</p>';
                echo '<p>Giá: $' . $item['productPrice'] . ' VNĐ</p>';
                echo '<button onclick="addToCart(\'' . $item['productName'] . '\', ' . $item['productPrice'] . ')">Thêm vào giỏ hàng</button>';
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
</body>
</html>
