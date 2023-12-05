<?php
if (!defined('IN_INDEX')) { exit("This file can only be included in index.php."); }

$user_id = 1;

if (isset($_POST['title']) && isset($_POST['text']) ) {
    
    $title = $_POST['title'];
    $text = $_POST['text'];
    $date = date("Y-m-d");

    $stmt = DB::getInstance()->prepare("INSERT INTO notes (user_id, title, text, date) VALUES (:user_id, :title, :text, :date)");
    $stmt->execute([
        ':user_id' => $user_id,
        ':title' => $title,
        ':text' => $text,
        ':date' => $date
    ]);

    unset($_POST['title']);
    unset($_POST['text']);
}



$stmt = DB::getInstance()->prepare("SELECT title, text, date FROM notes WHERE user_id=:user_id ORDER BY date DESC, id DESC");
$stmt->execute([
    ':user_id' => $user_id
]);


$notes = array();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    array_push($notes, array("text" => $row["text"],
                             "title" => $row["title"],
                             "date" => $row["date"]));
}

$twig_loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($twig_loader);

echo $twig->render('base.html', ["notes" => $notes]);
