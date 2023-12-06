<?php
if (!defined('IN_INDEX')) { exit("This file can only be included in index.php."); }

if (!(isset($_SESSION['logged_in']))) {
    header('Location: index.php?page=login');
    exit();
}

$user_id = $_SESSION['user_id'];

$stmt = DB::getInstance()->prepare("SELECT filename FROM notes, media, users WHERE notes.id=media.note_id AND notes.user_id=:user_id");
$stmt->execute([
    ':user_id' => $user_id
]);

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    copy(STORAGE_PATH . '/' . $row["filename"], __DIR__ . '/img/blog_img/' . $row["filename"]); 
}


$stmt = DB::getInstance()->prepare("SELECT title, text, filename, date FROM notes LEFT JOIN media ON notes.id=media.note_id WHERE user_id=:user_id ORDER BY date DESC, notes.id DESC");
$stmt->execute([
    ':user_id' => $user_id
]);

$notes = array();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    if (isset($row["filename"])) {
        array_push($notes, array("text" => $row["text"],
                                 "title" => $row["title"],
                                 "date" => $row["date"],
                                 "filename" => $row["filename"]));
    } else {
        array_push($notes, array("text" => $row["text"],
                                 "title" => $row["title"],
                                 "date" => $row["date"],
                                 "filename" => ""));
    }
}



$twig_loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($twig_loader);

echo $twig->render('base.html', ["notes" => $notes,
                                'logged_in' => true]);

