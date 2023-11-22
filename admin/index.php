
<?php

include "../config/connect.php";

?>

<?php include './layouts/header.php' ?>

<?php 
switch ($_GET["controller"]) {
    case 'product':
        switch ($_GET["action"]) {
            case 'index':
                include './pages/product/index.php';
                break;
            case 'addproduct':
                include './pages/product/addProduct.php';
                break;
            
            default:
                include './pages/product/index.php';
                break;
        }
        break;
    case 'user':
        include './pages/user/index.php';
        break;
    
    default:
        include './pages/dashboard.php';
        break;
}
 ?>

<?php include './layouts/footer.php' ?>
