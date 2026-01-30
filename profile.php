<?php
require './pages/functions/functions.php';
require_once "./cinfo/config.php";
require_once "./auth/auth.inc.php";

session_start();

$user_id = $_SESSION['user_id'] ?? null;

if ($user_id == null) {
    requireLogin('./profile.php');
}

$works = fetchWork($pdo, $_SESSION['user_id']);

$userData = fetchUser($pdo, $_SESSION['user_id']);

include("./views/profile_view.php")
?>