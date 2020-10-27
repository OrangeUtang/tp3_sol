<?php

    function connect(){

        //le nom de notre serveur
        $servername = "localhost:3308";

        //les paramatres de phpmyadmin
        $username = "root"; 
        $password = "";

        //le nom de votre Database
        $dbname = "webdevtp2";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        return $conn;
    }
