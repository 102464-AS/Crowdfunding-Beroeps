<?php
declare(strict_types=1);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "../cinfo/config.php";
require_once "../auth/session.inc.php";
require_once "../auth/auth.inc.php";
require_once "./functions/functions.php";

requireLogin();

try {
    $works = fetchWorks($pdo);
    $aantalRows = count($works);
} catch (PDOException $e) {
    handleServerError($e);
}

include_once '../';