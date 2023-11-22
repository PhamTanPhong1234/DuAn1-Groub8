<?php
include "./config/connect.php";

?>

<?php include './layouts/header.php' ?>

<?php
    
    switch ($_GET["action"]) {
        case 'home':
            include './pages/home.php';
            break;
        case 'calendar':
            include './pages/calendar.php';
            break;
        case 'menu':
            include './pages/menu.php';
            break;
        case 'login':
            include './layouts/login.php';
            break;
        case 'news':
            include './pages/news.php';
            break;
        case 'gallery':
            include './pages/gallery.php';
            break;
        case 'introduction':
            include './pages/introduction.php';
            break;    
        case 'booking_contact':
            include './pages/booking_contact.php';
            break;    
            
        default:
            include './pages/home.php';
            break;
    }
?>


<?php include './layouts/footer.php' ?>
