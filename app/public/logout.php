<?php

if (!defined('IN_INDEX')) { exit("This file can only be included in index.php."); }

unset($_SESSION['logged_in']);
unset($_SESSION['login']);
unset($_SESSION['user_id']);

$files = glob(__DIR__ . '/img/blog_img/*');
foreach($files as $file){ // iterate files
  if(is_file($file)) {
    unlink($file); // delete file
  }
}

header('Location: index.php?page=login');
exit();
