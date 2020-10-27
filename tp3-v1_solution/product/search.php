<?php
    session_start();

    require_once "productDataGateWay.php";
    require_once __DIR__ . "/../utilities/htmlHelper.php";
    require_once __DIR__ . "/../utilities/sessiontools.php";

    $logged = is_logged();
    $title = "search";
    
    // check session
    if(!$logged){
        header('Location: ../user/login.php?errmsg=Login required');
        die();
    }
    
    include "../HTML/header.php";

    echo "
        <div class='text-center justify-content-center'>
            <h2>Products</h2>
        </div>    
        ";


    // if query exists, 
    if(isset($_GET['search'])){

        $search = $_GET['search'];
        $search_res = search_products($search);
        
        if(!$search_res){
            echo "<h2>No search result</h2>";
        }
        else{
            echo html_table_gen($search_res);
        }
    }

    include "../HTML/footer.html";
?>