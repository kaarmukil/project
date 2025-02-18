<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Service Management</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .navbar {
            background: #007BFF;
            padding: 15px;
            text-align: center;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 18px;
        }
        .hero {
            text-align: center;
            padding: 50px;
            background: #f8f9fa;
        }
        .hero h1 {
            font-size: 36px;
            color: #333;
        }
        .hero p {
            font-size: 18px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="services.php">Services</a>
        <a href="about.php">About Us</a>
        <a href="contact.php">Contact</a>
        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        <?php endif; ?>
    </div>
    
    <div class="hero">
        <h1>Welcome to Car Service Management</h1>
        <p>Your trusted partner for vehicle servicing and maintenance.</p>
        <p>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="user_dashboard.php" class="button">Go to Dashboard</a>
            <?php else: ?>
                <a href="register.php" class="button">Get Started</a>
            <?php endif; ?>
        </p>
    </div>
</body>
</html>
