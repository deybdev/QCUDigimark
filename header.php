<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Header</title>
</head>
<body>
    <div class="container">
        <nav id="header">
            <div class="logo">
                <p class="logo-name">QCU | Digimark</p>
            </div>
            <div class="nav-menu" id="myMenu">
                <ul class="nav-menu-list">
                    <li class="nav-list">
                        <a href="#home" class="nav-link">Home</a>
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
            <div class="login-btn">
                <button id="show-register" class="btn"><i class="fa-regular fa-user"></i> Sign Up</button>
            </div>
            <div class="logined-icons">    
                <div class="login-icon">
                   <i class="fa-solid fa-heart"></i>
                </div>
                <div class="login-icon">
                    <i class="fa-regular fa-circle-user"></i>
                </div>
            </div>
            <div class="nav-menu-btn">
                <i class="fa-solid fa-bars" onclick="menuFunction()" id="menu-bar"></i>
            </div>
        </nav>

<!-- LOGIN FORM -->
        <div class="register-form">
            <div class="close-btn">&times;</div>
                <div class="form">
                    <h2>Sign Up</h2>
                    <div class="form-element full-width">
                        <label for="email">Full Name : </label> 
                        <input type="text" id="name" placeholder="E.g. Dela Cruz, Juan A.">
                    </div>
                    <div class="form-element full-width">
                        <label for="email">Email : </label>
                        <input type="email" id="email" placeholder="example@gmail.com">
                    </div>
                    <div class="form-element">
                        <label for="password">Password : </label>
                        <input type="email" id="password" placeholder="Enter Password">
                    </div>
                    <div class="form-element">
                        <label for="confirm_password">Confirm Password : </label>
                        <input type="password" id="confirm_password" placeholder="Confirm Password">
                    </div>
                    <div class="form-element">
                            <label for="user_type">Type : </label>
                            <select name="user_type" id="user_type">
                                <option value="seller">Seller</option>
                                <option value="customer">Customer</option>
                            </select>
                    </div>
                    <div class="form-element">
                        <label for="store_name">Store Name : </label>
                        <input type="text" id="store_name" placeholder="Enter Store Name">
                    </div>
                    <div class="form-element full-width terms">
                        <input type="checkbox" id="terms">
                        <label for="store_name">I have agreed to the <a href="">Terms</a> and <a href="">Conditions</a></label>                
                    </div>

                    <div class="form-element full-width">
                        <button class="btn">Sign Up</button>
                    </div>
                    <div class="form-element full-width">
                        <hr>
                        <p> Have an account? <a href="#" id="show-login">Sign In</a></p>
                    </div>

                </div>
        </div>

    </div>


    <script src="js/script.js"></script>
</body>
</html>