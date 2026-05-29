<?php

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdrepeat'];

    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $email, $uid, $pwd, $pwdRepeat) !== false) {
        header("Location: ../signup.php?error=emptyinput");
        exit();
    }

    if (invalidUid($uid) !== false) {
        header("Location: ../signup.php?error=invaliduid");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("Location: ../signup.php?error=invalidemail");
        exit();
    }

    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("Location: ../signup.php?error=passwordsdontmatch");
        exit(); 
    }

    if (uidExists($conn, $uid, $email) !== false) {
        header("Location: ../signup.php?error=usernametaken");
        exit(); 
    }
    
    createUser($conn, $name, $email, $uid, $pwd);

} else {
    header("Location: ../signup.php");
    exit();
}