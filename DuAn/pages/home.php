<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/c13a07f3cd.js" crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        * {
            font-family: Raleway;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .home-main-banner {}

        
        .home-event-show {
            width: 100%;
            height: 90vh;
            margin-top: -0.5%;
            background: #011D16;
            background-image: url('https://bizmansky.vn/catalog/view/theme/bizman/image/background/Pattern.png');
        }

        .home-event-wrap {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .home-event-show .event-title-container {
            width: 40%;
            padding-left: 2%;
            padding-right: 20px;
            height: 100%;
            color: #fff;
            float: left;

        }

        .event-title-container h1 {
            width: 80%;
            line-height: 1em;
            font-size: 70px;
            letter-spacing: -2px;
            font-weight: 800;
        }

        .event-title-container p {
            font-size: 1.5em;
            font-weight: 400;
            word-spacing: 2px;
            line-height: 1.5em;
            margin: 10px 0;
        }

        .event-title-container .show-btn {
            background: none;
            border: none;
            color: #fff;
            font-weight: bold;
            font-size: 25px;
            transition: 0.3s;
        }

        .event-title-container .show-btn:hover {
            color: #CC9902;
        }

        .home-slide-event {
            float: right;
            position: relative;
            width: 60%;
            height: 70vh;
            background-color: #CC9902;
            margin-top: 5%;

            /* overflow: hidden; */

        }

        .home-slide-event button {
            width: 100%;
            height: 70px;
            font-size: 1.5em;
            background-color: rgb(245, 235, 204);
            cursor: pointer;
            border: none;
        }

        .home-slide-event .prev {
            position: absolute;
            z-index: 10;
            background-color: #CC9902;
            display: grid;
            align-items: center;
            height: 100%;
            width: 5%;
            top: 0;
            left: 0;
        }

        .home-slide-event .next {
            position: absolute;
            background-color: #CC9902;
            z-index: 10;
            display: grid;
            align-items: center;
            height: 100%;
            width: 5%;
            top: 0%;
            right: 0;
        }

        .home-slide-event .event-slider {
            height: 100%;
            width: 100%;
            margin: 0 auto;
            padding: 0 5%;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .home-slide-event .event-slider .slider-box {
            position: relative;
            width: 30%;
            height: 90%;
            color: #fff;
            padding: 10px;
            transition: 0.3s;

        }

        .home-slide-event .event-slider .slider-box:hover {
            background-color: #fff;
            color: #000;
        }

        .slider-box .img {
            width: 100%;
            height: 50%;
            overflow: hidden;
            background: url('https://bizmansky.vn/image/cache/catalog/340500372_445193644475401_2173054832202182465_n-500x274.jpg') center center no-repeat;
        }

        .slider-box p {
            padding: 5% 0px;
        }

        .slider-box .sub-title {
            font-weight: 700;
        }

        .slider-box .btn {
            margin-top: 5%;
            width: 100%;

            font-weight: 600;
            color: white;
            background-color: #D1A31C;
            border: 1px solid #fff;
            border-radius: none;
        }

        .discover-our-menu {}

        .our-menu-title-contain {
            position: relative;
            width: 100%;
            height: 40vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
        }

        .our-menu-title-contain .layer {
            position: absolute;
            z-index: -1;
            width: 100%;
            height: 100%;
            background: url('https://bizmansky.vn/catalog/view/theme/bizman/image/background/bg-our-menu.png') center center no-repeat;
            filter: blur(2px);
            height: 100%;
        }

        .our-menu-content-contain {
            width: 100%;
            height: 80vh;
            background-color: #004333;
            padding: 2em;
            color: #fff;
        }

        .our-menu-content-contain .wrap {}

        .our-menu-content-contain .menu-left-banner {
            width: 30%;
            height: 70vh;
            background-color: #CC9902;
            float: left;
        }

        .our-menu-content-contain .menu-option {
            width: 65%;
            float: right;
        }

        .our-menu-content-contain .menu-option p {
            font-size: 1.3em;
            font-weight: 500;
        }

        .our-menu-content-contain .menu-option .option {
            display: flex;
            justify-content: center;
            width: 100%;
            height: 70px;
            margin-top: 10px;
            margin-bottom: 10px;

        }

        .menu-option .option .table {
            width: 150px;
            height: 100%;
            color: #99B4AD;
            text-align: center;
            border-radius: 4px;
            cursor: pointer;
        }

        .menu-option .option .table:hover {
            color: #004333;
            background-color: #fff;
        }

        .our-menu-content-contain .slider-box {
            position: relative;
            overflow: hidden;
            width: 90%;
            height: 35vh;
            margin-top: 0px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 40px;
            background-color: #D1A31C;

        }

        .our-menu-content-contain .slider-box button {
            position: absolute;
            z-index: 10;
            font-size: 30px;
            color: #fff;
            border: none;
            background-color: transparent;
        }

        .our-menu-content-contain .slider-box .right {
            right: 0;
            top: 45%;
        }

        .our-menu-content-contain .slider-box .left {
            left: 0;
            top: 45%;
        }

        button:focus {
            outline: none;
        }

        .our-menu-content-contain .button-contain {
            width: 90%;
            height: 10vh;
            margin: 0 auto;
            text-align: center;
        }

        .our-menu-content-contain .button-contain .view-menu {
            height: 90%;
            width: 250px;
            font-size: 20px;
            font-weight: bold;
            border: 1px solid #fff;
            color: #fff;
            background-color: #1A5648;
            transition: 0.3s;
        }

        .our-menu-content-contain .button-contain .view-menu:hover {
            background-color: #CC9902;
        }

        .latest-news {
            width: 100%;
            height: 90vh;
            background-image: url('https://bizmansky.vn/catalog/view/theme/bizman/image/background/Pattern.png');
            background-color: #011D16;
            padding: 5%;
        }

        .latest-news .latest-heading {
            width: 100%;
            height: 30%;
            /* background-color: red; */

        }

        .latest-news .latest-heading .left {
            float: left;
        }

        .latest-news .latest-heading span {
            font-size: 50px;
            font-weight: bold;
            color: #fff;
        }

        .latest-news .news {
            width: 100%;
            height: 65%;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 10px;
        }

        .latest-news .news .news-box {
            position: relative;
            padding: 10px;
            cursor: pointer;
            color: #fff;
            transition: 0.3s;
        }

        .latest-news .news .news-box:hover {
            background-color: #fff;
            color: #011D16;
        }

        .latest-news .news-box .bottom {
            position: absolute;
            bottom: 10px;
        }

        .home-gallery {
            width: 100%;
            height: 80vh;
            background-color: #004333;

        }
    </style>
</head>

<body>
    <div class="home-main-banner">
        <img src="https://bizmansky.vn/image/cache/catalog/slider/Valentine-banner-web-06-06-06-1920x995.jpg"
            width="100%" alt="">
    </div>
    <div class="home-event-show">
        <div class="home-event-wrap">
            <div class="event-title-container">
                <h1 style="margin-top: 20pxs;">EVENT AND SHOW</h1><br>
                <p>Exciting events & shows at Bizman Sky - Chic & sophisticated rooftop space with breath-taking,
                    panoramic
                    city views. And Enjoying live musical performances by “Sky Jazz” to create a relaxed atmosphere and
                    comfortable environment.</p><br>
                <button class="show-btn"><i class="fa-solid fa-minus"></i>&nbsp&nbsp VIEW FULL CALENDAR OF
                    EVENT</button>
            </div>
            <div class="home-slide-event">
                <div class="prev"><button><i class="fa-solid fa-angle-left"></i></button></div>
                <div class="next"><button><i class="fa-solid fa-angle-right"></i></button></i></div>
                <div class="event-slider">
                    <!-- bổ sung thêm ở đây -->
                    <div class="slider-box">
                        <div class="img"></div>
                        <hr style="margin: 5% 0;">
                        <div class="sub-title">HAVE LUNCH WITH PARTNER - 25 PAX</div>
                        <p>11:30 - 11:30, 24/01/2024 <br>
                            Operated by Hangoug</p>
                        <button class="btn">BOOK A TABLE</button>
                    </div>
                    <div class="slider-box">
                        <div class="img"></div>
                        <hr style="margin: 5% 0;">
                        <div class="sub-title">HAVE LUNCH WITH PARTNER - 25 PAX</div>
                        <p>11:30 - 11:30, 24/01/2024 <br>
                            Operated by Hangoug</p>
                        <button class="btn">BOOK A TABLE</button>
                    </div>
                    <div class="slider-box">
                        <div class="img"></div>
                        <hr style="margin: 5% 0;">
                        <div class="sub-title">HAVE LUNCH WITH PARTNER - 25 PAX</div>
                        <p>11:30 - 11:30, 24/01/2024 <br>
                            Operated by Hangoug</p>
                        <button class="btn">BOOK A TABLE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="discover-our-menu">
        <div class="our-menu-title-contain">
            <div class="layer"></div>
            <div class="wrap">
                <span style="font-size: 1.5em; ">DISCOVER</span>
                <h1 style="font-size: 3em; font-weight: bolder;">OUR MENU</h1>
            </div>
        </div>
        <div class="our-menu-content-contain">
            <div class="wrap">
                <div class="menu-left-banner">
                </div>
                <div class="menu-option">
                    <p>Bizman Sky features a dazzling open bar and mesmerizing live musical stage. We also serve a wide
                        range of café options and high-powered, business lunches and dinners.</p>
                    <div class="option">
                        <div class="table">
                            <h3>BIG LUNCH</h3>
                            <span>11:30 - 13:40</span>
                        </div>
                        <div class="table">
                            <h3>BIG LUNCH</h3>
                            <span>11:30 - 13:40</span>
                        </div>
                        <div class="table">
                            <h3>BIG LUNCH</h3>
                            <span>11:30 - 13:40</span>
                        </div>
                        <div class="table">
                            <h3>BIG LUNCH</h3>
                            <span>11:30 - 13:40</span>
                        </div>
                    </div>
                    <div class="slider-box">
                        <button class="left"><i class="fa-solid fa-angle-left"></i></button>
                        <button class="right"><i class="fa-solid fa-angle-right"></i></button>
                        <div class="slider-wrap">
                            <!-- code tập hợp sản phẩm ở đây -->
                        </div>
                    </div>
                    <div class="button-contain">
                        <button class="view-menu">
                            VIEW FULL MENU
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="latest-news">
        <div class="latest-heading">
            <div class="left">
                <h4 style="color: #CC9902;">DON’T MISS OUR NEW ARTICLES</h4>
                <span>LATEST NEWS</span>
            </div>
            <div class="right">
                <!-- view alll -->
            </div>
        </div>
        <div class="news">
            <div class="news-box">
                <img src="https://bizmansky.vn/image/cache/catalog/Callendar/Valentine-banner-web-06-06-500x260.jpg"
                    width="100%" alt="">
                <h3>VALENTINE’S COUPLE DINNER SET</h3>
                <span>14/02/2024</span>
                <h3 class="bottom">READ MORE</h3>
            </div>
            <div class="news-box"><img
                    src="https://bizmansky.vn/image/cache/catalog/gallery/Grand%20Event/HINH-1_-THUMBNAIL-1-500x260.jpg"
                    width="100%" alt="">
                <h3>GRAND OPENING PARTY 12.12</h3>
                <span>14/02/2024</span>
                <h3 class="bottom">READ MORE</h3>
            </div>
            <div class="news-box"><img src="https://bizmansky.vn/image/cache/catalog/news/Bizman-4-500x260.jpg"
                    width="100%" alt="">
                <h3>GRAND OPENING HANGOUG</h3>
                <span>14/02/2024</span>
                <h3 class="bottom">READ MORE</h3>
            </div>
        </div>
    </div>
    <div class="section-block section_gallery bg-green">
        <div class="container">
            <div class="section-title">
                <h2>Gallery</h2>
            </div>
            <div class="section_gallery__album">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                        <div class="section_gallery__item">
                            <a class="venobox" data-gall="gallery01"
                                href="https://bizmansky.vn/image/cache/catalog/gallery/Grand%20Event/PVO-48-min-0x0.jpg">
                                <img
                                    src="https://bizmansky.vn/image/cache/catalog/gallery/Grand%20Event/HINH-4-0x0.jpg" />
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-12 section_gallery__grid">
                        <div class="section_gallery__item d-lg-none">
                            <a class="venobox" data-gall="gallery01"
                                href="https://bizmansky.vn/image/cache/catalog/gallery/Grand%20Event/PVO-48-min-0x0.jpg">
                                <img
                                    src="https://bizmansky.vn/image/cache/catalog/gallery/Grand%20Event/HINH-4-0x0.jpg" />
                            </a>
                        </div>
                        <div class="section_gallery__item">
                            <a class="venobox" data-gall="gallery01"
                                href="https://bizmansky.vn/image/cache/catalog/gallery/Grand%20Event/HINH-1_-THUMBNAIL-1%20(1)-0x0.jpg">
                                <img
                                    src="https://bizmansky.vn/image/cache/catalog/gallery/Grand%20Event/HINH-1_-THUMBNAIL-1%20(1)-0x0.jpg" />
                            </a>
                        </div>
                        <div class="section_gallery__item">
                            <a class="venobox" data-gall="gallery01"
                                href="https://bizmansky.vn/image/cache/catalog/gallery/Grand%20Event/PVO-48-min-0x0.jpg">
                                <img
                                    src="https://bizmansky.vn/image/cache/catalog/gallery/Grand%20Event/PVO-48-min-0x0.jpg" />
                            </a>
                        </div>
                        <div class="section_gallery__item">
                            <a class="venobox" data-gall="gallery01"
                                href="https://bizmansky.vn/image/cache/catalog/slider/PVO-58-min-0x0.jpg">
                                <img src="https://bizmansky.vn/image/cache/catalog/slider/PVO-58-min-0x0.jpg" />
                            </a>
                        </div>
                        <div class="section_gallery__item">
                            <a class="venobox" data-gall="gallery01"
                                href="https://bizmansky.vn/image/cache/catalog/gallery/Grand%20Event/PVO-43-min-0x0.jpg">
                                <img
                                    src="https://bizmansky.vn/image/cache/catalog/gallery/Grand%20Event/PVO-43-min-0x0.jpg" />
                            </a>
                        </div>

                        <div class="section_gallery__item d-lg-none">
                            <a class="venobox" data-gall="gallery01"
                                href="https://bizmansky.vn/image/cache/catalog/gallery/Grand%20Event/HINH-4-0x0.jpg">
                                <img
                                    src="https://bizmansky.vn/image/cache/catalog/gallery/Grand%20Event/HINH-4-0x0.jpg" />
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                        <div class="section_gallery__item">
                            <a class="venobox" data-gall="gallery01"
                                href="https://bizmansky.vn/image/cache/catalog/gallery/Grand%20Event/HINH-4-0x0.jpg">
                                <img
                                    src="https://bizmansky.vn/image/cache/catalog/gallery/Grand%20Event/HINH-4-0x0.jpg" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a class="bizman-button" href="gallery">
                    View all </a>
            </div>
        </div>
    </div>
    <div class="section-block section-service section_video_text bg-green-dark pb-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="section-service__video">
                        <a data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=JHNMIXNua_0"
                            class="venobox">
                            <img src="./images/imager_11_20248_700.jpg" alt="image Welcome to Hangug" class="w-100"
                                width="640" height="360" />
                            <i class="fa fa-play-circle"></i>

                        </a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="section-title section-title-left">
                        <span>Welcome to Hangug</span>
                        <h2>Introduction</h2>
                    </div>
                    <div class="item-des">
                        <p>Hangug &ndash; a spectacular rooftop restaurant and lounge located in Saigon serves a wide
                            range of special coffees, English breakfast, brunch, biz-lunch, and relaxed dinners with
                            inspiring drinks.</p>
                        <p>Being wholly owned and operated by Huge-Fam, Hangug will be an elegant and welcoming space
                            where business professionals can build connections and networking. Hangug is the place of
                            choice for business professionals to share ultimate business opportunities, friendly
                            conversations and nights of mesmerizing live music, authentic menus, and cool 360-views of
                            the city from the rooftop of a 15 story building.
                        </p><a class="view-more" href="our-story">Learn more </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <h1 class="d-none">Hangug - </h1>
    <div class="">
        <div class="">
            <div id="content">
            </div>

        </div>
    </div>

    <div class="section-service section_our_menu  d-none d-xl-block">
        <div class="section_our_menu__album owl-carousel owl-theme" data-lgg-items="1" data-lg-items="1"
            data-md-items="" data-sm-items="2" data-xs-items="1" data-xss-items="1" data-autoplay="true" data-dot="true"
            data-loop="true">
            <div class="section_our_menu__item">
                <img src="https://bizmansky.vn/image/cache/catalog/album/343166877_981796319622743_7986516752562804208_n-0x0.jpg"
                    width="" height="" />
            </div>
            <div class="section_our_menu__item">
                <img src="https://bizmansky.vn/image/cache/catalog/album/340688695_6599101996776221_4809452217739031082_n-0x0.jpg"
                    width="" height="" />
            </div>
            <div class="section_our_menu__item">
                <img src="https://bizmansky.vn/image/cache/catalog/album/339926930_1378898902858472_2027860225718777949_n-0x0.jpg"
                    width="" height="" />
            </div>
            <div class="section_our_menu__item">
                <img src="https://bizmansky.vn/image/cache/catalog/341626357_766580811850419_2496155783828533358_n-0x0.jpg"
                    width="" height="" />
            </div>
            <div class="section_our_menu__item">
                <img src="https://bizmansky.vn/image/cache/catalog/z4543101944326_10193293eb958fd875cc797e65ca9371-0x0.jpg"
                    width="" height="" />
            </div>
        </div>
    </div>


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
    </div>
</body>

</html>