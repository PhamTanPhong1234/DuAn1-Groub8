<?php 
function getAllUser() {
    $sql = "SELECT * FROM users";
    $data = getData($sql);
    return $data;
}

function getUserById($id) {
    $sql = "SELECT * FROM users WHERE id=:id";
    $data = getDataWidthParams($sql, ["id"=>$id]);
    return $data;
}

function getUserByName($names) {
    $sql = "SELECT * FROM users WHERE names=:names";
    $data = getDataWidthParams($sql, ["name"=>$name]);
    return $data;
}

function deleteUser($id) {
    $sql = "DELETE FROM users WHERE id=:id";
    $data = executeCUD($sql, ["id"=>$id]);
    var_dump($data);
}

?>