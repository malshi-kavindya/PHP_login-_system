<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        header {
            background-color: rgba(0, 0, 0, 0.9);
            padding: 1rem 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            color: #667eea;
            font-size: 1.5rem;
            font-weight: bold;
        }
        nav {
            display: flex;
            gap: 2rem;
            align-items: center;
        }
        nav a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }
        nav a:hover {
            color: #667eea;
        }
        .btn-logout {
            background-color: #ff6b6b;
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .btn-logout:hover {
            background-color: #ff5252;
        }
        main {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 20px;
        }
    </style>
</head>
<body>
<header>
    <div class="header-container">
        <div class="logo">MyApp</div>
        <nav>
            <?php if (isset($_SESSION['useruid'])): ?>
                <span style="color: #667eea;">Welcome, <?php echo htmlspecialchars($_SESSION['useruid']); ?>!</span>
                <a href="index.php">Home</a>
                <a href="includes/logout.inc.php" class="btn-logout">Logout</a>
            <?php else: ?>
                <a href="index.php">Home</a>
                <a href="login.php">Login</a>
                <a href="signup.php">Sign Up</a>
            <?php endif; ?>
        </nav>
    </div>
</header>
<main>
