<?php
require './pages/functions/functions.php';
require_once "./cinfo/config.php";

session_start();

$works = fetchWork($pdo, $_SESSION['user_id']);

$userData = [
    [
        "username" => "dummy_user",
        "name" => "John Doe",
        "email" => "john@example.com",
        "title" => "Dummy Project",
        "description" => "This is a test description",
        "photo" => "dummy.jpg",
        "role" => "developer",
        "total_works" => 2,
        "total_donations" => 50.00
    ]
];

include("./views/profile_view.php")
?>