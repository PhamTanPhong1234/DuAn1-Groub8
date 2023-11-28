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
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/category_gallery.css">
</head>

<body>
    <section class="bread-crumb has-bg">
        <div class="overlay"></div>
        <div class="breadcrumb-container text-center">
            <h1 class="title-page">Gallery</h1>
        </div>
    </section>

    <div class="news-category__gallery">
        <section class="right-content list-blog-page">
            <section id="blog-area" class="list-blogs blog-main gallery">
                <div class="section-block bg-green">
                    <div class="container-fluid">
                        <div class="section-title section-title-left">
                            <h2>
                                Food &amp; Event </h2>
                        </div>
                        <!-- php food and drink img -->
                        <div class='gallery__list'>
                            <?php
                            $stt = 0;
                            foreach ($menuItems as $item) {
                                echo "<a class='venobox vbox-item' href='#'>";
                                echo "<img src='" . $item['image_url'] . "' alt='gallery Array &nbsp" . $stt . "' width='600' height='600'";
                                echo "</a>";
                                $stt++;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>
    <!-- php food and drink img -->
    <div class="news-category__gallery">
        <section class="right-content list-blog-page">
            <section id="blog-area" class="list-blogs blog-main gallery">
                <div class="section-block bg-green-dark">
                    <div class="container-fluid">
                        <div class="section-title section-title-left">
                            <h2>
                                VIP &amp; Cigar Room </h2>
                        </div>
                        <div class="gallery__list">
                            <a class="venobox vbox-item"  href="#">
                                <img src="https://bizmansky.vn/image/cache/catalog/gallery/Vvip/BIZMAN23-600x373.png" alt="gallery Array 0" width="600" height="400">
                            </a>
                            <a class="venobox vbox-item"  href="#">
                                <img src="https://bizmansky.vn/image/cache/catalog/gallery/Vvip/BIZMAN22-600x373.png" alt="gallery Array 1" width="600" height="400">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="section-block bg-green">
                    <div class="container-fluid">
                        <div class="section-title section-title-left">
                            <h2>
                                Restaurant &amp; Lounge </h2>
                        </div>
                        <div class="gallery__list">
                            <a class="venobox vbox-item" data-gall="gallery11" href="#">
                                <img src="https://bizmansky.vn/image/cache/catalog/slider/PVO-58-min-600x373.jpg" alt="gallery Array 1" width="600" height="400">
                            </a>
                            <a class="venobox vbox-item" data-gall="gallery11" href="#">
                                <img src="https://bizmansky.vn/image/cache/catalog/slider/PVO-14-min-600x373.jpg" alt="gallery Array 2" width="600" height="400">
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>
    <!-- vungf -->

    <div class="newsletter__social social bg-green">
        <span>Follow us:</span>
        <ul class="list-inline">
            <li>
                <a href="#" target="_blank">
                    <img src="./images/fb.png" />
                </a>
            </li>
            <li>
                <a href="#" target="_blank">
                    <img src="./images/ins.png" />
                </a>
            </li>
            <li>
                <a href="#" target="_blank">
                    <img src="./images/youtube.png" />
                </a>
            </li>
            <li>
                <a href="#" target="_blank">
                    <img src="./images/tri.png" />
                </a>
            </li>
        </ul>
    </div>
</body>

</html>