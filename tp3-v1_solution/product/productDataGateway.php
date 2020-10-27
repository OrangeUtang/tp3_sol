<?php
    require_once __DIR__ . "/../utilities/connector.php";

    function search_products($prod_name)
    {
        $conn = connect();
        $sql = "SELECT id, productname AS name, price FROM products WHERE productname LIKE '%$prod_name%'";
        $result = $conn->query($sql);
        $data = $result->fetch_all(MYSQLI_ASSOC);
        $conn -> close();
        return $data;
    }

