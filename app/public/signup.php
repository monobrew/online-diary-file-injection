<?php
if (!defined('IN_INDEX')) { exit("This file can only be included in index.php."); }

$errors = array('invalid_email' => false,
                'too_long_username' => false,
                'too_short_username' => false,
                'taken_username' => false,
                'too_long_password' => false,
                'too_short_password' => false,
                'different_passwords' => false);

$added_user = false;

if (isset($_POST['email']) &&
    isset($_POST['login']) &&
    isset($_POST['password']) &&
    isset($_POST['repeat_password'])) {

    $ok = true;

    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['invalid_email'] = true;
        $ok = false;
    }

    if (strlen($login) > 50) {
        $errors['too_long_username'] = true;
        $ok = false;
    }

    if (strlen($login) < 4) {
        $errors['too_short_username'] = true;
        $ok = false;
    }

    $stmt = DB::getInstance()->prepare('SELECT login from users WHERE login=:login');
    $stmt->execute([
        ':login' => $login
    ]);

    if ($stmt->rowCount() > 0) {
        $errors['taken_username'] = true;
        $ok = false;
    }

    if (strlen($password) > 50) {
        $errors['too_long_password'] = true;
        $ok = false;
    }

    if (strlen($password) < 8) {
        $errors['too_short_password'] = true;
        $ok = false;
    }


    if ($password != $repeat_password) {
        $errors['different_password'] = true;
        $ok = false;
    }

    unset($_POST);

    if ($ok) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        
        $stmt = DB::getInstance()->prepare("INSERT INTO users (login, password_hash, status, email) VALUES (:login, :password_hash, 'user', :email)");
        $stmt->execute([
            ':login' => $login,
            ':password_hash' => $password_hash,
            ':email' => $email
        ]);
        
        $added_user = true;
    }

}

$twig_loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($twig_loader);

echo $twig->render('signup.html', ['errors' => $errors, 'added_user' => $added_user, 'logged_in' => isset($_SESSION['logged_in'])]);
