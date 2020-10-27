<?php
    session_start();

    require_once __DIR__ . "/../utilities/sessiontools.php";

    $logged = is_logged();
    $title = 'Register';

    if($logged){
        header('Location: ../error.php?errmsg=Already logged');
        die();
    }
    
    include "../HTML/header.php";

?>
    
    <div class="d-flex justify-content-center">
        
        <form class="form-signin" method="POST" action="user/register.dom.php">

            <h1 class="h3 mb-3 font-weight-normal">Register</h1>
            
            <?php
                if(isset($_GET['errmsg'])){
                    $msg_error = $_GET['errmsg'];
                    echo "<div class='pt-3 text-danger'>
                        <h5>$msg_error</h5>
                    </div>";
                }
            ?>

            <div class="pt-3">
                <label for="username" class="sr-only">Username</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
            </div>

            <div class="pt-3">
                <label for="email" class="sr-only">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus>
            </div>    

            <div class="pt-3">
                <label for="password" class="sr-only">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            </div>

            <div class="pt-3">
                <label for="confirmpassword" class="sr-only">Confirm password</label>
                <input type="password" id="confirmpassword" name="confirmpassword" class="form-control" placeholder="Confirm password" required>
            </div>

            <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Register</button>

        </form>
    </div>

<?php
    include "../HTML/footer.html";
?>