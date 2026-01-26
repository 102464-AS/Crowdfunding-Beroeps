<?php
declare(strict_types=1);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "../../cinfo/config.php";
require_once "../../auth/session.inc.php";
require_once "../../auth/auth.inc.php";
require_once "../functions/functions.php";

requireLogin();

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['title']) &&
        isset($_POST['description']) &&
        isset($_FILES['photo']) &&
        isset($_POST['role'])) { 

        $title = trim(htmlspecialchars(strip_tags($_POST['title']), ENT_QUOTES, 'UTF-8'));
        $description = trim(htmlspecialchars(strip_tags($_POST['description']), ENT_QUOTES, 'UTF-8'));
        $photo = basename($_FILES['photo']['name']);
        $role = trim(htmlspecialchars(strip_tags($_POST['role']), ENT_QUOTES, 'UTF-8'));
        }
}

$sender = $_SERVER['HTTP_REFERER'];
if (!empty($sender) && strpos($sender, '102464.stu.sd-lab.nl') === false) {
    $errors['sender'] = "<p>Verkeerde afzender!</p>";
}

if (empty($title) || empty($description) || empty($photo) || empty($role)) {
    $errors['title'] = "<p>Dit is verplicht!</p>";
}

if (empty($errors)) {
    try {
        $pdo->beginTransaction();

        $photoName = uniqid('', true) . '_' . preg_replace('/[^a-zA-Z0-9_\.-]/', '_', $_FILES['photo']['name']);
        $targetDir = dirname(__DIR__, 2) . '/upload-img/';
        $targetPath = $targetDir . $photoName;
        $photoUrl = '/Beroeps/Crowdfunding/upload-img/' . $photoName;


        $fileTmp = $_FILES['photo']['tmp_name'];

        $imageInfo = getimagesize($fileTmp);
        if ($imageInfo === false) {
            throw new Exception("Dit is geen geldige afbeelding.");
        }

        if (!move_uploaded_file($fileTmp, $targetPath)) {
            throw new Exception("Uploaden van foto mislukt.");
        }   

        $upload = uploadWorks($pdo, $_SESSION['user_id'], $title, $description, $photoUrl, $role);

        $pdo->commit();
         echo json_encode([
         'success' => true,
         'message' => "Uploaden gelukt!"
        ]);
    exit;
    } catch (Throwable $e) {
        $pdo->rollBack();
        if (file_exists($targetPath)) {
            unlink($targetPath);
        }
        handleServerError($e);
    }
}
