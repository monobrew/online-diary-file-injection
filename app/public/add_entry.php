<?php
if (!defined('IN_INDEX')) { exit("This file can only be included in index.php."); }

$user_id = 1;

if (isset($_POST['title']) && isset($_POST['text'])) {
    
    $title = $_POST['title'];
    $text = $_POST['text'];
    $date = date("Y-m-d");
    
    /*if (isset($_FILES['images'])) {
        $stmt = DB::getInstance()->prepare("SELECT currval('notes_id_seq')");
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        var_dump($row);
        exit();
        $note_id = $row['currval'];
        

        $filepath = STORAGE_PATH .'/' . $note_id . '_' .$_FILES['images']['name'];

        move_uploaded_file($_FILES['images']['tmp_name'], $filepath);

        $stmt = DB::getInstance()->prepare("INSERT INTO media (note_id, filename) VALUES (:note_id, :filepath)");
        $stmt->execute([
            ':note_id' => $note_id,
            ':filepath' => $filepath
        ]);
    }*/

    $stmt = DB::getInstance()->prepare("INSERT INTO notes (user_id, title, text, date) VALUES (:user_id, :title, :text, :date)");
    $stmt->execute([
        ':user_id' => $user_id,
        ':title' => $title,
        ':text' => $text,
        ':date' => $date
    ]);

}

unset($_POST['title']);
unset($_POST['text']);
unset($_FILES['images']);

header("Location: index.php?page=main");
exit();
