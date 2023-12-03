<?php

session_start();

include('config.inc.php');

define('IN_INDEX', true);

require_once __DIR__.'/../composer/vendor/autoload.php';
 
if ((isset($_GET['page'])) && file_exists($_GET['page'] . '.php')) {
    include($_GET['page'] . '.php');
} elseif (!isset($_GET['page'])) {
    include('main.php');
} else {
    $twig_loader = new \Twig\Loader\FilesystemLoader('./templates');
    $twig = new \Twig\Environment($twig_loader);
    echo $twig->render('not_found.html');
}
