<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../cinfo/config.php';
require 'session.inc.php';

$errorMessages = [];

function sanitizeInput(string $input): string
{
    return trim(htmlspecialchars(strip_tags($input), ENT_QUOTES, 'UTF-8'));
}

function validateInput(array $data): array
{
    $errors = [];

    if ($data['username'] === '' || $data['password'] === '') {
        $errors[] = "Email en wachtwoord zijn verplicht!";
    }
    if ($data['name'] === '') {
        $errors[] = "Naam is verplicht!";
    }
    if ($data['email'] === '') {
        $errors[] = "Geen e-mailadres ingevoerd!";
    } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Ongeldig e-mailadres!";
    }

    $begin = strtotime($data['DoB']);
    if ($begin === false) {
        $errors[] = "Onbegrijpelijke datum invoer!";
    } else {
        $data['DoB'] = date("Y-m-d", $begin);
    }

    return ['errors' => $errors, 'data' => $data];
}

function registerUser(PDO $pdo, array $data): bool|string
{
    $hashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);

    try {
        $stmt = $pdo->prepare(
            "INSERT INTO users (username, password, name, email, DoB) 
            VALUES (:username, :password, :name, :email, :DoB)"
        );
        $stmt->execute([
            'username' => $data['username'],
            'password' => $hashedPassword,
            'name' => $data['name'],
            'email' => $data['email'],
            'DoB' => $data['DoB']
        ]);
        return true;
    } catch (PDOException $e) {
        if ($e->getCode() == 23000) return "Username already exists!";
        return "Database error!";
    }
}

function loginUser(string $username): void
{
    session_regenerate_id(true);
    $_SESSION['username'] = $username;
    header("Location: main_page.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = [
        'username' => sanitizeInput($_POST['username'] ?? ''),
        'password' => sanitizeInput($_POST['password'] ?? ''),
        'name' => sanitizeInput($_POST['name'] ?? ''),
        'email' => sanitizeInput($_POST['email'] ?? ''),
        'DoB' => sanitizeInput($_POST['DoB'] ?? ''),
    ];

    $validation = validateInput($input);
    $errorMessages = $validation['errors'];
    $input = $validation['data'];

    if (empty($errorMessages)) {
        $result = registerUser($pdo, $input);

        if ($result === true) {
            loginUser($input['username']);
        } else {
            $errorMessages[] = $result;
        }
    }
}