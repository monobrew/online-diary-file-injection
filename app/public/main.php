<?php
if (!defined('IN_INDEX')) { exit("This file can only be included in index.php."); }

$user_id = 1;


$stmt = DB::getInstance()->prepare("SELECT notes.id, notes.title, notes.text, media.filename date FROM notes LEFT JOIN media ON notes.id=media.note_id WHERE user_id=:user_id ORDER BY date DESC, id DESC");
$stmt->execute([
    ':user_id' => $user_id
]);

$notes = array();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    if (isset($row["filename"])) {
        array_push($notes, array("id" => $row["id"],
                                 "text" => $row["text"],
                                 "title" => $row["title"],
                                 "date" => $row["date"],
                                 "filename" => $row["filename"]));
    } else {
        array_push($notes, array("id" => $row["id"],
                                 "text" => $row["text"],
                                 "title" => $row["title"],
                                 "date" => $row["date"],
                                 "filename" => ""));
    }
}



$twig_loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($twig_loader);

echo $twig->render('base.html', ["notes" => $notes]);

