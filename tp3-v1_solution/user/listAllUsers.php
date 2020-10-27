<?php
    session_start();
    
    require_once "../user.dom/userDataGateWay.php";
    require_once "../utilities/htmlHelper.php";
    require_once __DIR__ . "/../utilities/sessiontools.php";

    $logged = is_logged();
    $title = 'User list';

    // check session
    if(!$logged){
        header('Location: login.php?errmsg=Login required');
        die();
    }

    include "../HTML/header.php";
?>
    
    <div class="container text-center">

        <h1 class="text-center">hello <?php  echo($_SESSION['username']);?> </h1>

        <h2> user list </h2>

        <?php
            
            $data_array = get_all_users();
            
            $content = html_table_gen($data_array);

            echo "$content";
        
        ?>

    </div>

<?php
    include "../HTML/footer.html";
?>


