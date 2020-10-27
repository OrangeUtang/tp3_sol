<?php
    if($logged){
        $nav ='
        <li class="nav-item">
            <a class="nav-link" href="../user.dom/logout.dom.php">LOGOUT</a>
        </li>';
    }
    else{
        $nav = '
        <li class="nav-item">
            <a class="nav-link" href="../user/login.php">LOGIN</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../user/register.php">REGISTER</a>
        </li>';
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- dynamic title -->
        <title> <?php echo "$title" ?> </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    </head>
    
    <body>
        <div class="jumbotron text-center" style="margin-bottom:0">
            <div class="container">
                <h1>Travail pratique 3</h1>      
                <p>Paul Blart vend des trucs sur internets</p>
            </div>
        </div>


            <nav class="navbar navbar-expand-sm bg-dark navbar-dark mb-4">
                <div class="container collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <!--Dynamic menu depending on session status-->
                        <?php echo "$nav" ?>
                    </ul>
                
                    <form class="form-inline my-2 my-lg-0" action="../product/search.php">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" name="search">
                        <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        
        <div class="container">