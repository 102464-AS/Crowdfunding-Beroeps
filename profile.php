<?php
require './pages/functions/functions.php';
require_once "./cinfo/config.php";

session_start();

$works = fetchWork($pdo, $_SESSION['user_id']);

$userData = fetchUser($pdo, $_SESSION['user_id']);

include("./views/profile_view.php")
?>