<?php
if (!defined('IN_INDEX')) { exit("This file can only be included in index.php."); }

if (isset($_POST['title'])) {

}

$twig_loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($twig_loader);

$user_id = 1;

$stmt = DB::getInstance()->prepare("SELECT title, text, date FROM notes WHERE user_id=:user_id");
$stmt->execute([
    ':user_id' => $user_id
]);


$notes = array();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    array_push($notes, array("text" => $row["text"],
                             "title" => $row["title"],
                             "date" => $row["date"]));
}

echo $twig->render('base.html', ["notes" => $notes]);
