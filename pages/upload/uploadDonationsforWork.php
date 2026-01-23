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
$amount = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['work_id']) &&
        isset($_POST['amount'])) {
        
        $workId = (int) $_POST['work_id'];
        $amount = (float) $_POST['amount'];
    }
}

if (!empty($_SERVER['HTTP_REFERER']) &&
    strpos($_SERVER['HTTP_REFERER'], '102575.stu.sd-lab.nl') === false) {
    $errors['sender'] = "<p>Verkeerde afzender!</p>";
}

if ($amount === false || $amount <= 0) {
    $errors['amount'] = "<p>Ongeldig donatiebedrag.</p>";
}

if ($workId === false) {
    $errors['work_id'] = "<p>Ongeldig werk.</p>";
}

if (empty($errors)) {
    try {
        $pdo->beginTransaction();
        $message = uploadDonationsForWork($pdo, $workId, $amount);

        $pdo->commit();

        header("Location: /pages/");
        exit();

    } catch (Exception $e) {
        $pdo->rollBack();
        $errors['exception'] =
             "<p>Fout bij het verwerken van de donatie.</p>";
    }
} else {
    header("Location: /pages/");
    exit();
}