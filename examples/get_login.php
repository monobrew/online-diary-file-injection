<?php
require_once __DIR__.'/../../../composer/vendor/autoload.php';

$db_host = 'db';
$db_name = 'diary_db';
$db_user = 'postgres';
$db_password = 'piesek';

$dbh = new PDO('pgsql:host=' . $db_host . ';dbname=' . $db_name, $db_user, $db_password);
$sth =$dbh->prepare('SELECT login FROM users');
$sth->execute();

while($row = $sth->fetch(PDO::FETCH_NUM)) {
    echo $row[0]. '<br>';
}

