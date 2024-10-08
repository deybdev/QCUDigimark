<?php
    $conn = mysqli_connect('localhost', 'root','','qcudigimark') or die('connection failed');

    if(isset($_SESSION['customer_name'])){
        $customer_name = $_SESSION['customer_name'];
        $trim_name = explode(',',$customer_name);
        $last_name = trim($trim_name[0]);
    } else {
        // Redirect to login if the session is not set
        header("location: sign_in.php");
        exit();
    }
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
                <p class="logo-name">QCU | Digimart</p>
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
                <div class="login-icon">
                    <p>Hi, <?php echo htmlspecialchars($last_name); ?></p>
                    <i class="fa-regular fa-circle-user"></i>
                </div>
                <div class="sub-menu-wrap">
                    <div class="sub-menu">
                        <div class="user-info">
                            <h3><?php echo htmlspecialchars($customer_name); ?></h3>
                        </div>
                        <hr>
                        <a href="#" class="sub-menu-link">
                            <i class="fa-regular fa-heart"></i>
                            <p>Saved Products</p>
                            <span>></span>
                        </a>
                        <a href="#" class="sub-menu-link">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <p>Search Product</p>
                            <span>></span>
                        </a>
                        <a href="#" class="sub-menu-link">
                            <i class="fa-regular fa-message"></i>
                            <p>Messages</p>
                            <span>></span>
                        </a>
                        <a href="#" class="sub-menu-link">
                            <i class="fa-regular fa-flag"></i>
                            <p>Report</p>
                            <span>></span>
                        </a>
                        <a href="#" class="sub-menu-link">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            <p>Logout</p>
                            <span>></span>
                        </a>
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