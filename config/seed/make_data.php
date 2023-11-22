<?php 
include '../connect.php';

try {
    $conn = connect_db();
    for ($i=1; $i <= 5; $i++) { 
        $sql = "INSERT INTO users (names, sdt, email)
        VALUES ('John $i', '037323$i', 'john$i@example.com')";
        $conn->exec($sql);
    }
    echo "Make data successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
?>