<?php
declare(strict_types=1);

function requireLogin(): void
{
    if (empty($_SESSION['username'])) {
        header('Location: /login.php', true, 302);
        exit;
    }
}