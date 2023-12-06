<?php

if (!defined('IN_INDEX')) { exit("This file can only be included in index.php."); }

unset($_SESSION['logged_in']);
unset($_SESSION['login']);
unset($_SESSION['user_id']);

header('Location: index.php?page=login');
exit();
