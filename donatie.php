<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require './pages/functions/functions.php';
require_once "./cinfo/config.php";
require_once "./auth/auth.inc.php";

$work_id = isset($_GET['work_id']) ? (int) $_GET['work_id'] : null;

if (!$work_id) {
    header("Location: ./index.php"); 
    exit();
}

session_start();

$user_id = $_SESSION['user_id'] ?? null;

if ($user_id == null) {
    requireLogin('./donatie.php');
}


$works = fetchWorks($pdo);

$work = array_values(array_filter($works, function($w) use ($work_id) {
    return $w['work_id'] == $work_id;
}));

include("./views/donatie_view.php");
?>