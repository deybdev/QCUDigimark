<?php
    include 'config.php';

    if(isset($_POST['signup'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']); 
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
        $user_type = mysqli_real_escape_string($conn, $_POST['user_type']);
        $store_name = mysqli_real_escape_string($conn, $_POST['store_name']);


        if(empty($name) || empty($email) || empty($password) || empty($cpassword) || empty($user_type)){
            $message = 'All fields are required. Please fill in all the fields.';
        } else if ($password !== $cpassword) {
            $message = 'Confirm password does not match';
        } else if (strlen($_POST['password']) < 8) {
            $message = 'Password must be at least 8 characters long';
        } else {
            $check_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email'") or die ('Query failed');
            if (mysqli_num_rows($check_users) > 0) {
                $message = 'User with this email already exists';
            } else {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                if ($user_type === 'customer') {
                    $store_name = '-';
                }

                mysqli_query($conn, "INSERT INTO `users` (name, email, password, user_type, store_name) VALUES ('$name', '$email', '$hashed_password', '$user_type', '$store_name')") or die('Query failed');

                header('Location: verify.php');
                exit();
            }
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
    <title>Register</title>
</head>
<body>
    <div class="container">
        <?php include'../main/header.php';?>
     <!-- SIGN UP FORM -->
        <div class="form-wrapper">
            <div class=" form-container sign-up-form active">
                <div class="close-btn" onclick="location.href='home.php'">&times;</div>
                        <form action="sign_up.php" method="post">
                            <div class="form">
                                <h2>Sign Up</h2>
                                    <div class="form-element full-width">
                                        <label for="name">Name:</label>
                                        <input type="text" id="name" placeholder="E.g. Dela Cruz, Juan A." name="name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
                                    </div>
                                    <div class="form-element full-width">
                                        <label for="email">Email:</label>
                                        <input type="email" id="email" placeholder="E.g. example@gmail.com" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
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
                                        <label for="user_type">User Type:</label>
                                            <select id="user_type"  name="user_type" >
                                                <option value="customer" selected>Customer</option>
                                                <option value="seller">Seller</option>
                                            </select>
                                    </div>
                                    <div class="form-element">
                                        <label for="store_name">Store Name: </label>
                                        <input type="text" id="store_name" name="store_name" placeholder="Only for sellers" readonly>
                                    </div>
                        </form>
                    <div class="form-element full-width terms">
                        <input type="checkbox" id="terms">
                        <label for="terms">I have agreed to the <a href="#">Terms</a> and <a href="#">Conditions</a></label>
                    </div>
                    <?php 
                        if(isset($message)){
                            echo'<div class="alert-message">
                                    <p><i class="fa-solid fa-circle-exclamation"></i>'.$message.'</p>
                                </div>';
                          }
                    ?>
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