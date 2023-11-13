<?php 
include '../connect.php';
try {
    $conn = connect_db();
    $sql = " CREATE TABLE admin (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        names VARCHAR(40) NOT NULL,
        sdt INT(11) NOT NULL,
        email VARCHAR(100) )";
    $conn->exec($sql);
    echo "Table users created successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
?>