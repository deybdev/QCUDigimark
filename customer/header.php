<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Header</title>
</head>
<body>
    <div class="container">
        <nav id="header">
            <div class="logo">
                <p class="logo-name">QCU | DigimarT</p>
            </div>
            <div class="nav-menu" id="myMenu">
                <ul class="nav-menu-list">
                    <li class="nav-list">
                        <a href="home.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-list">
                        <a href="#browse" class="nav-link">Browse Products <i class="fa-solid fa-angle-down"></i></a>
                    </li>
                    <li class="nav-list">
                        <a href="#blogs" class="nav-link">Blogs</a>
                    </li>
                    <li class="nav-list">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                </ul>
            </div>
            <div class="logined-icons">    
                <div class="login-icon">
                   <i class="fa-regular fa-heart"></i>
                </div>
                <div class="login-icon">
                   <i class="fa-regular fa-message"></i>
                </div>
                <div class="login-icon">
                    <p>Hi, Name <i class="fa-regular fa-circle-user"></i><i class="fa-solid fa-angle-down"></i></p>
                </div>
            </div>
            <div class="nav-menu-btn">
                <i class="fa-solid fa-bars" onclick="menuFunction()" id="menu-bar"></i>
            </div>
        </nav>

    </div>


    <script src="../js/script.js"></script>
</body>
</html>