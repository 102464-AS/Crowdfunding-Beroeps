<?php
declare(strict_types=1);

function requireLogin($redirect = null): void
{
    if (empty($redirect)) {
        $redirect = "./index.php";
    }

    if (empty($_SESSION['username'])) {
        header("Location: ./login/login.html?redirect=" . $redirect, true, 302);
        exit;
    }
}
