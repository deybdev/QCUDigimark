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

           <!-- CONTAINER FOR BOTH FORMS -->
        <div class="form-wrapper">
            <!-- SIGN UP FORM -->
            <div class=" form-container sign-up-form">
                <div class="close-btn">&times;</div>
                <div class="form">
                    <h2>Sign Up</h2>
                    <div class="form-element full-width">
                        <label for="email">Full Name: </label> 
                        <input type="text" id="name" placeholder="E.g. Dela Cruz, Juan A.">
                    </div>
                    <div class="form-element full-width">
                        <label for="email">Email: </label>
                        <input type="email" id="email" placeholder="example@gmail.com">
                    </div>
                    <div class="form-element">
                        <label for="password">Password: </label>
                        <input type="password" id="password" placeholder="Create your Password">
                    </div>
                    <div class="form-element">
                        <label for="confirm_password">Confirm Password: </label>
                        <input type="password" id="confirm_password" placeholder="Confirm your Password">
                    </div>
                    <div class="form-element">
                        <label for="user_type">Type: </label>
                        <select name="user_type" id="user_type">
                            <option value="seller">Seller</option>
                            <option value="customer">Customer</option>
                        </select>
                    </div>
                    <div class="form-element">
                        <label for="store_name">Store Name: </label>
                        <input type="text" id="store_name" placeholder="Enter Store Name">
                    </div>
                    <div class="form-element full-width terms">
                        <input type="checkbox" id="terms">
                        <label for="terms">I have agreed to the <a href="#">Terms</a> and <a href="#">Conditions</a></label>
                    </div>
                    <div class="form-element full-width">
                        <button class="btn">Sign Up</button>
                    </div>
                    <div class="form-element full-width">
                        <hr>
                        <p> Have an account? <a href="#" id="show-signin">Sign In</a></p>
                    </div>
                </div>
            </div>

            <!-- SIGN IN FORM -->
            <div class="form-container sign-in-form">
                <div class="close-btn">&times;</div>
                <div class="form">
                    <h2>Sign In</h2>
                    <div class="form-element full-width">
                        <label for="email">Email: </label>
                        <input type="email" id="email" placeholder="example@gmail.com">
                    </div>
                    <div class="form-element full-width">
                        <label for="password">Password: </label>
                        <input type="password" id="password" placeholder="Enter Password">
                    </div>
                    <div class="form-element full-width terms">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                    <div class="form-element full-width">
                        <button class="btn">Sign In</button>
                    </div>
                    <div class="form-element full-width">
                        <p><a href="#"">Forgot Password?</a></p>
                    </div>
                    <div class="form-element full-width">
                        <hr>
                        <p> Don't have an account? <a href="#" id="show-signup">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- OTP VERIFICATION -->
        <div class="form-container otp-verify">
            <div class="close-btn">&times;</div>
                <div class="form">
                    <h2>OTP Verification</h2>
                <div class="box-form">
                    <p>We've sent a verification code to your <br> Email - example@gmail.com</p>
                </div>
                <div class="form-element full-width">
                        <label for="verify-email">Verification Code: </label> 
                        <input type="text" id="verify-email" placeholder="Enter verification code">
                </div>
                <div class="form-element full-width">
                        <button class="btn">Submit</button>
                </div>
            </div>
        </div>
        <!-- FORGOT PASSWORD -->
        <div class="form-container otp-verify ">
            <div class="close-btn">&times;</div>
                <div class="form">
                    <h2>Forgot Password</h2>
                <div class="form-element full-width">
                        <label for="verify-email">Email Address: </label> 
                        <input type="text" id="verify-email" placeholder="Enter your email address">
                </div>
                <div class="form-element full-width">
                        <button class="btn">Submit</button>
                </div>
            </div>
        </div>
        <!-- NEW PASSWORD -->
        <div class="form-container otp-verify">
            <div class="close-btn">&times;</div>
                <div class="form">
                    <h2>New Password</h2>
                        <div class="box-form">
                        <p>Please create a new password that you don't use on any other site</p>
                    </div>
                    <div class="form-element full-width">
                        <label for="new-password">Create your new Password: </label>
                        <input type="password" id="new-password" placeholder="Enter new password">
                    </div>
                    <div class="form-element full-width">
                        <label for="new-password">Confirm new Password: </label>
                        <input type="password" id="new-password" placeholder="Re-enter new password">
                    </div>
                <div class="form-element full-width">
                        <button class="btn">Submit</button>
                </div>
            </div>
        </div>
        


    </div>


    <script src="js/script.js"></script>
</body>
</html>