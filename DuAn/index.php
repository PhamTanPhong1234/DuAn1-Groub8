<?php
include "./config/connect.php";
include "./dao/pdo.php";
include "./dao/useDAO.php";

getAllUser();
// getUserById(10);
// deleteUser(6); 

?>

<?php include './layouts/header.php' ?>


<?php include './pages/home.php' ?>

<?php include './layouts/footer.php' ?>
