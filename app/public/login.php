<?php
if (!defined('IN_INDEX')) { exit("This file can only be included in index.php."); }

$twig_loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($twig_loader);
echo $twig->render('login.html');
