<?php
include 'header.php';
?>

<style>
    .form-container {
        max-width: 500px;
        margin: 2rem auto;
        background: white;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .form-container h2 {
        color: #333;
        margin-bottom: 1.5rem;
        text-align: center;
    }
    .form-group {
        margin-bottom: 1.5rem;
    }
    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        color: #333;
        font-weight: 500;
    }
    .form-group input {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 1rem;
        transition: border-color 0.3s;
    }
    .form-group input:focus {
        outline: none;
        border-color: #667eea;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }
    .btn-submit {
        width: 100%;
        padding: 0.75rem;
        background-color: #667eea;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 1rem;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    .btn-submit:hover {
        background-color: #764ba2;
    }
    .error-message {
        background-color: #fff3cd;
        border: 1px solid #ffc107;
        color: #856404;
        padding: 1rem;
        border-radius: 4px;
        margin-bottom: 1rem;
    }
    .success-message {
        background-color: #d4edda;
        border: 1px solid #28a745;
        color: #155724;
        padding: 1rem;
        border-radius: 4px;
        margin-bottom: 1rem;
    }
    .form-footer {
        text-align: center;
        margin-top: 1rem;
    }
    .form-footer a {
        color: #667eea;
        text-decoration: none;
    }
    .form-footer a:hover {
        text-decoration: underline;
    }
</style>

<div class="form-container">
    <h2>Sign Up</h2>

    <?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyinput") {
            echo '<div class="error-message">Please fill in all fields!</div>';
        }
        else if ($_GET['error'] == "invaliduid") {
            echo '<div class="error-message">Choose a proper username (letters and numbers only)!</div>';
        }
        else if ($_GET['error'] == "invalidemail") {
            echo '<div class="error-message">Please enter a valid email address!</div>';
        }
        else if ($_GET['error'] == "passwordsdontmatch") {
            echo '<div class="error-message">Passwords do not match!</div>';
        }
        else if ($_GET['error'] == "usernametaken") {
            echo '<div class="error-message">Username or email already taken!</div>';
        }
        else if ($_GET['error'] == "none") {
            echo '<div class="success-message">You have successfully signed up! You can now <a href="login.php">log in</a>.</div>';
        }
    }
    ?>

    <form action="./includes/signup.inc.php" method="post">
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="uid">Username</label>
            <input type="text" id="uid" name="uid" placeholder="Enter a username" required>
        </div>
        <div class="form-group">
            <label for="pwd">Password</label>
            <input type="password" id="pwd" name="pwd" placeholder="Enter a password" required>
        </div>
        <div class="form-group">
            <label for="pwdrepeat">Repeat Password</label>
            <input type="password" id="pwdrepeat" name="pwdrepeat" placeholder="Repeat your password" required>
        </div>
        <button type="submit" name="submit" class="btn-submit">Sign Up</button>
    </form>

    <div class="form-footer">
        <p>Already have an account? <a href="login.php">Log in here</a></p>
    </div>
</div>

<?php
include 'footer.php';
?>