<?php

if (!defined('IN_INDEX')) { exit("This file can only be included in index.php."); }

if(isset($_SESSION['logged_in'])) {
    header('Location: index.php?page=main'); 
    exit();
}

$login = "";
$password = "";
$incorrect_login = false;
$incorrect_password = false;

if (isset($_POST['login']) && isset($_POST['password'])){
    $login = $_POST['login'];
    $password = $_POST['password'];

    unset($_POST);

    $stmt = DB::getInstance()->prepare("SELECT id, login, password_hash FROM users WHERE login=:login");
    $stmt->execute([
        ':login' => $login
    ]);
    
    
    if ($stmt->rowCount() == 0) {
        $incorrect_login = true;
    } else if ($stmt->rowCount() > 1) {
        exit('Database inconsistency occured');
    } else {
        
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (password_verify($password, $row['password_hash'])) {
        
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['login'] = $row['login'];
            $_SESSION['logged_in'] = true;

            header('Location: index.php?page=main'); 
        } else {
            $incorrect_password = true;
        }
    }

} 


$twig_loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($twig_loader);
echo $twig->render('login.html', [  'login' => $login, 
                                    'password' => $password, 
                                    'incorrect_login' => $incorrect_login,
                                    'incorrect_password' => $incorrect_password,
                                    'logged_in' => false]);
