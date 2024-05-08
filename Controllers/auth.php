<?php
session_start();
if (!isset($_SESSION['userId'])) {
    header("Location: login.php");
    exit;
}

include __DIR__ ."/../Models/user.php";
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $authenticated = array_filter($users, function ($user) use ($email, $password) {
        return $user['email'] == $email && $user['password'] == $password;
    });
    if (count($authenticated) > 0) {
        $user = array_filter($authenticated);
        $_SESSION['userId'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        header('Location: index.php');
    } else {
        
    }
    
}
