<?php
    session_start();
    include 'config.php';

    if(isset($_POST['signup'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));
        $cpassword = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
        $user_type = mysqli_real_escape_string($conn,$_POST['user_type']);
        $store_name = mysqli_real_escape_string($conn,$_POST['store_name']);
        
        $check_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email ='$email' AND password = '$password' ") or die ('query failed');

        if(empty($name) || empty($email) || empty($_POST['password']) || empty($_POST['cpassword']) || empty($user_type)){
            $message = 'All fields are required. Please fill in all the fields.';
        }else if($password !== $cpassword){
            $message = 'Confirm password not matched';
        }else{
            if (mysqli_num_rows($check_users) > 0) {
                // User already exists
                $message = 'User with this email already exists';
            } else {
                // Insert new user into database
                mysqli_query($conn, "INSERT INTO `users` (name, email, password, user_type, store_name) VALUES ('$name', '$email', '$password', '$user_type', '$store_name')") or die('Query failed');
                $message = 'Registered Successfully!';
                header('location: verify.php');
             }

         }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Register</title>
</head>
<body>
    <div class="container">
        <?php include'header.php';?>
     <!-- SIGN UP FORM -->
        <div class="form-wrapper">
            <div class=" form-container sign-up-form active">
                <div class="close-btn" onclick="location.href='home.php'">&times;</div>
                        <form action="sign_up.php" method="post">
                            <div class="form">
                                <h2>Sign Up</h2>
                                    <div class="form-element full-width">
                                        <label for="email">Full Name: </label> 
                                        <input type="text" id="name" name="name" placeholder="E.g. Dela Cruz, Juan A.">
                                    </div>
                                    <div class="form-element full-width">
                                        <label for="email">Email: </label>
                                        <input type="email" id="email" name="email" placeholder="example@gmail.com">
                                    </div>
                                    <div class="form-element">
                                        <label for="password">Password: </label>
                                        <input type="password" id="password" name="password" placeholder="Create your Password">
                                    </div>
                                    <div class="form-element">
                                        <label for="confirm_password">Confirm Password: </label>
                                        <input type="password" id="confirm_password" name="cpassword" placeholder="Confirm your Password">
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
                                        <input type="text" name="store_name" placeholder="Enter Store Name">
                                    </div>
                        </form>
                    <div class="form-element full-width terms">
                        <input type="checkbox" id="terms">
                        <label for="terms">I have agreed to the <a href="#">Terms</a> and <a href="#">Conditions</a></label>
                    </div>
                    <div class="form-element full-width">
                        <button class="btn" name="signup" >Sign Up</button>
                    </div>
                    <div class="form-element full-width">
                        <hr>
                        <p> Have an account? <a href="sign_in.php" id="show-signin">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
     </div> 
    <script src="js/script.js"></script>
</body>
</html>