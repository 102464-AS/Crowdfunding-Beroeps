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
    $workId = filter_input(INPUT_POST, 'work_id', FILTER_VALIDATE_INT);

    // Optional referer check (extra layer only)
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
    }
}
