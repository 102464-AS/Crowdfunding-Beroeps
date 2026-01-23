<?php
declare(strict_types=1);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "../cinfo/config.php";
require_once "../auth/session.inc.php";
require_once "../auth/auth.inc.php";
require_once "../functions/functions.php";

requireLogin();

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $amount = filter_input(INPUT_POST, 'amount', FILTER_VALIDATE_FLOAT);
}

$sender = $_SERVER['HTTP_REFERER'];
if (!empty($sender) && strpos($sender, '102575.stu.sd-lab.nl') === false) {
    $errors['sender'] = "<p>Verkeerde afzender!</p>";
}

if (empty($amount)) {
    $errors['amount'] = "<p>Dit is verplicht!</p>";
}

if ($amount !== false && $amount > 0) {
    $message = uploadDonations($pdo, $amount);
} else {
    $message = "Ongeldig donatiebedrag.";
}

if (empty($errors)) {
    try {
        $pdo->beginTransaction();

        $upload = uploadDonations($pdo, $_SESSION['user_id'], $amount);

        $pdo->commit();

        header("Location: /pages/");
        exit();
    } catch (Exception $e) {
        $pdo->rollBack();
        $errors['exception'] = "<p>Fout bij het verwerken van de donatie: " . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8') . "</p>";
    }
}