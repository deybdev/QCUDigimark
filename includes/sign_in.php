<?php
    include 'config.php';
    session_start();

    if(isset($_POST['signin'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']); 
    
        // Check if the email exists
        $check_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email ='$email'") or die('query failed');
    
        if(mysqli_num_rows($check_users) > 0){
            $row = mysqli_fetch_assoc($check_users);
    
            // Verify the password using password_verify if the password was hashed during registration
            if(password_verify($password, $row['password'])) {
                if($row['user_type'] == 'customer') { 
                    $_SESSION['customer_name'] = $row['name'];
                    $_SESSION['customer_email'] = $row['email'];
                    $_SESSION['customer_id'] = $row['id'];
                    header("location: ../customer/home.php");
                } elseif ($row['user_type'] == 'seller') {
                    $_SESSION['customer_name'] = $row['name'];
                    $_SESSION['customer_email'] = $row['email'];
                    $_SESSION['customer_id'] = $row['id'];
                    header("location: seller_dashboard.php");
                }
            } else {
                // Incorrect password
                $message = 'Incorrect password';
            }
        } else {
            // Email not found
            $message = 'Email not found!';
        }
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>
<body>
    <?php include'../main/header.php';?>
    <div class="container">
        <!-- SIGN IN FORM -->
             <div class="form-wrapper">   
                <div class="form-container sign-in-form active">
                        <div class="close-btn" onclick="location.href='../main/landing_page.php'">&times;</div>
                            <form action="sign_in.php" method="post">
                                <div class="form">
                                    <h2>Sign In</h2>
                                    <div class="form-element full-width">
                                        <label for="email">Email: </label>
                                        <input type="email" name="email" id="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" placeholder="example@gmail.com">
                                    </div>
                                    <div class="form-element full-width">
                                        <label for="password">Password: </label>
                                        <input type="password" name="password" id="password" placeholder="Enter Password">
                                    </div>
                                    <div class="form-element full-width terms">
                                        <input type="checkbox" id="remember">
                                        <label for="remember">Remember Me</label>
                                    </div>
                                    <?php 
                                        if(isset($message)){
                                            echo'<div class="alert-message">
                                                    <p><i class="fa-solid fa-circle-exclamation"></i>'.$message.'</p>
                                                </div>';
                                        }
                                    ?>
                                    <div class="form-element full-width">
                                        <button class="btn" name="signin">Sign In</button>
                                    </div>
                                    <div class="form-element full-width">
                                        <p><a href="forgot.php">Forgot Password?</a></p>
                                    </div>
                                    <div class="form-element full-width">
                                        <hr>
                                        <p> Don't have an account? <a href="sign_up.php" id="show-signup">Sign Up</a></p>
                                    </div>
                                </div>
                            </form> 
                    </div>
                </div>
            </div>
    </div>
</body>
</html>