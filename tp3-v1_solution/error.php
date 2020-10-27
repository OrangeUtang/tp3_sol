<?php 

    if(isset($_GET['errmsg'])){
        $msg = $_GET['errmsg'];
        echo "<h1 style='color:red'>$msg</h1>";
    }
