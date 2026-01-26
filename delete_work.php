<?php
session_start();
require_once "./pages/functions/functions.php";
require_once "./cinfo/config.php";

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $workId = $_POST['workId'];
    
    $resultaat = deleteWork($pdo, $workId);

    echo json_encode([
        'success' => true,
        'message' => $resultaat
    ]);
    exit;
}
