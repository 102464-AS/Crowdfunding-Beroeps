<?php
session_start();
require_once "./pages/functions/functions.php";
require_once "./cinfo/config.php";

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $_SESSION['user_id'] ?? 1; 
    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';
    $photo = $_POST['photo'] ?? '';
    $role = $_POST['role'] ?? '';

    // Call the actual function to insert the work
    $resultaat = uploadWorks($pdo, $userId, $title, $description, $photo, $role);

    // Return the result as JSON
    echo json_encode([
        'success' => true,
        'message' => $resultaat
    ]);
    exit;
}
