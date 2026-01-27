<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$user_id = $_SESSION['user_id'] ?? null;

if ($user_id == null) {
    $logged_in = false;
} else {
    $logged_in = true;
}

include_once("views/header_view.php");
?>