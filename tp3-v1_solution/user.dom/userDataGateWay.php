<?php
    require_once __DIR__ . "/../utilities/connector.php";

    function get_user_by_iD($id)
    {
        $conn = connect();
        $sql = "SELECT * FROM users WHERE id=$id";
        $result = $conn->query($sql);
        $data = $result->fetch_row();
        $conn -> close();
        return $data;
    }

    function get_user_by_username($username)
    {
        $conn = connect();
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = $conn->query($sql);
        $data = $result->fetch_row();
        $conn -> close();
        return $data;
    }

    function get_user_by_email($email)
    {
        $conn = connect();
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($sql);
        $data = $result->fetch_row();
        $conn -> close();
        return $data;
    }

    function get_all_users()
    {
        $conn = connect();
        $sql = "SELECT id, username AS Username, email AS Email FROM users";
        $result = $conn->query($sql);
        $data = $result->fetch_all(MYSQLI_ASSOC);
        $conn -> close();
        return $data;
    }

    function insert_user($name, $email, $pw, $isAdmin)
    {
        $isAdmin = (int)$isAdmin;
        $conn = connect();
        $sql = "INSERT INTO users (username, email, pw, isAdmin) VALUES ('$name', '$email','$pw', $isAdmin);";
        $result = $conn->query($sql);
        $conn -> close();
        return $result;
    }

    function verify_unique($name, $email)
    {
        $conn = connect();
        $sql = "SELECT * FROM users WHERE username='$name' OR email='$email';";
        $result = $conn->query($sql);
        $data = $result->fetch_row();
        $conn->close();
        return $data;
    }

    function verify_login($name, $pw)
    {
        $conn = connect();
        $sql = "SELECT * FROM users WHERE username='$name' AND pw='$pw';";
        $result = $conn->query($sql);
        $data = $result->fetch_row();
        $conn->close();
        return $data;
    }

?>