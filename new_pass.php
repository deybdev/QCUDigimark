<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>New Password</title>
</head>
<body>
    <div class="container">
        <?php include'header.php';?>
        <div class="form-wrapper">
            <!-- NEW PASSWORD -->
        <div class="form-container otp-verify active">
                <div class="form">
                    <h2>New Password</h2>
                        <div class="message-box">
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
    </div>
    
</body>
</html>