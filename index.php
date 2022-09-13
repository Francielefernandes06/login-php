<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-PHP</title>
</head>
<body>
    <?php
        if(!isset($_SESSION['login'])){
            if(isset($_POST['submit'])){
                $login='Franciele';
                $password='123456';

                $loginForm = $_POST['username'];
                $passwordForm = $_POST['password'];

                if($loginForm == $login && $passwordForm == $password){
                    $_SESSION['login'] = $login;
                    header('Location: index.php');
                }else{
                    echo 'Login ou senha incorretos';
                }   
            }
            include('login.php');
        }else{
            if(isset($_GET['logout'])){
                unset($_SESSION['login']);
                
                header('Location: index.php');
            }
            include('home.php');
        }
    ?>
</body>
</html>