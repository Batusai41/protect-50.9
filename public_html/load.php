<?php

define('URL', '/public_html/img'); 
define('UPLOAD_MAX_SIZE', 1000000); 
define('ALLOWED_TYPES', ['image/jpeg', 'image/png', 'image/gif']);
define('UPLOAD_DIR', 'D://OpenServer/domains/mygalery/public_html/img/');

$errors = [];
 
if (!empty($_FILES)) {
 
    for ($i = 0; $i < count($_FILES['files']['name']); $i++) {
 
        $fileName = $_FILES['files']['name'][$i];
        if ($_FILES['files']['size'][$i] > UPLOAD_MAX_SIZE) {
            $errors[] = 'Недопустимый размер файла ' . $fileName;
            continue;
        }
 
        if (!in_array($_FILES['files']['type'][$i], ALLOWED_TYPES)) {
            $errors[] = 'Недопустимый формат файла ' . $fileName;
            continue;
        }
 
        $filePath = UPLOAD_DIR . '/' . basename($fileName);
         move_uploaded_file($_FILES['files']['tmp_name'][$i], $filePath);
    }
}
include './index.php';