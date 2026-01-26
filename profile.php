<?php
require './pages/functions/functions.php';

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

$works = [
    ['id' => 1, 'title' => 'AI Research Project'],
    ['id' => 2, 'title' => 'Mobile App Development'],
    ['id' => 3, 'title' => 'Online Learning Platform'],
    ['id' => 4, 'title' => 'Educational Games']
];


include("./views/profile_view.php")
?>