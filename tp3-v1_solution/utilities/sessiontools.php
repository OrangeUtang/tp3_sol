<?php

    function is_logged(){
        $logged;
        if(isset($_SESSION["userID"]) ? $logged = true : $logged = false )
        return $logged;
    }

