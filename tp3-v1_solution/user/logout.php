<?php
    session_start();

    require_once __DIR__ . "/../utilities/sessiontools.php";

    // variable neede to generate html page properly
    $logged = is_logged();
    $title = 'logout';

    include "../HTML/header.php";
?>
    
    <div class="d-flex justify-content-center">

        <h3 class="h3 mb-3 font-weight-normal text-success">Logout successful</h1>
            
    </div>

<?php
    include "../HTML/footer.html";
?>