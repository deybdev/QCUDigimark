<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>
<body>
    <?php include'header.php';?>
    <div class="container">
        <!-- SIGN IN FORM -->
             <div class="form-wrapper">   
                <div class="form-container sign-in-form active">
                        <div class="close-btn" onclick="location.href='home.php'">&times;</div>
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
                                <p><a href="forgot.php">Forgot Password?</a></p>
                            </div>
                            <div class="form-element full-width">
                                <hr>
                                <p> Don't have an account? <a href="sign_up.php" id="show-signup">Sign Up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>