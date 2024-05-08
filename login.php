<?php
session_start();
if (isset($_SESSION['userId'])) {
    header("Location: index.php");
    exit;
}
include __DIR__ ."/Controllers/auth.php";
include __DIR__ ."/Views/header.php";
?>
<head>
    <style>
        .container-login {
            width: 300px;
            padding: 16px;
            background-color: #f1f1f1;
            margin: 0 auto;
            margin-top: 100px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .container-login input[type=text],.container-login input[type=password],.container-login input[type=email] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 10px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }
        .container-login input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
    </style>
</head>
<main>
    <form class="container-login" action="login.php" method="POST">
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Inserisci l'email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Inserisci la password" name="password" required>

        <button type="submit">Invia</button>
</form>
</main>

<?php 
include __DIR__ ."/Views/footer.php";