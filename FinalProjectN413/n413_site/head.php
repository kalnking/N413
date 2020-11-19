<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <title>Training With Kyla</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script src="js/jquery-3.4.1.min.js" type="application/javascript"></script>
    <script src="js/bootstrap.min.js" type="application/javascript"></script>
    <script src="js/bootstrap.min.js.map" type="application/javascript"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="index.php">Training With Kyla</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li id="home_item" class="nav-item">
                <a id="home_link" class="nav-link" href="index.php">Home</a>
            </li>
            <li id="list_item" class="nav-item">
                <a id="list_link" class="nav-link" href="list.php">Memberships</a>
            </li>
            <li id="contact_item" class="nav-item">
                <a id="contact_link" class="nav-link" href="form.php">Sign Up</a>
            </li>



            <?php
            session_start();
            if(isset($_SESSION["user_id"])){
                echo '
            <li id="logout_item" class="nav-item">
                <a id="logout_link" class="nav-link" href="logout.php">Log-Out</a>
            </li>';
            }else{
                echo '        
            <li id="login_item" class="nav-item">
                <a id="login_link" class="nav-link" href="login.php">Log-In</a>
            </li>';
            }


            ?>

            <li id="shoppingcart" style="height: 10px; width: 10px;">
                <a href="showcart.php">
                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                    </svg>
                </a>
            </li>
        </ul>

    </div>
</nav>