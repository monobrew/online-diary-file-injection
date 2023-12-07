<?php
if (!defined('IN_INDEX')) { exit("This file can only be included in index.php."); }

if (isset($_SESSION['login']) && (!$_SESSION['logged_in'])) {
    header('Location: index.php?page=login');
    exit();
}

$user_id = $_SESSION['user_id'];

if (isset($_POST['title']) && isset($_POST['text'])) {
    
    $title = $_POST['title'];
    $text = $_POST['text'];
    $date = date("Y-m-d");
    
    $stmt = DB::getInstance()->prepare("SELECT nextval('notes_id_seq')");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $note_id = $row['nextval'];

    if (isset($_FILES['images']) && (!$_FILES['images']['name'] == "")) {
        
        $filename = $note_id . '_' .$_FILES['images']['name'];
        $filepath = STORAGE_PATH .'/' . $filename;

        move_uploaded_file($_FILES['images']['tmp_name'], $filepath);

        $stmt = DB::getInstance()->prepare("INSERT INTO media (note_id, filename) VALUES (:note_id, :filename)");
        $stmt->execute([
            ':note_id' => $note_id,
            ':filename' => $filename
        ]);
    }

    $stmt = DB::getInstance()->prepare("INSERT INTO notes (id, user_id, title, text, date) VALUES (:note_id, :user_id, :title, :text, :date)");
    $stmt->execute([
        ':note_id' => $note_id,
        ':user_id' => $user_id,
        ':title' => $title,
        ':text' => $text,
        ':date' => $date
    ]);

}

unset($_POST['title']);
unset($_POST['text']);
unset($_FILES['images']);

header("Location: index.php");
exit();
