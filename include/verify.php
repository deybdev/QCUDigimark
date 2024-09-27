<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Verify Email</title>
</head>
<body>
    <div class="container">
        <?php include '../main/header.php';?>
        <div class="form-wrapper">
            <!-- OTP VERIFICATION -->
        <div class="form-container otp-verify active">
                <div class="form">
                    <h2>OTP Verification</h2>
                <div class="message-box">
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
        </div>
    </div>
</body>
</html>