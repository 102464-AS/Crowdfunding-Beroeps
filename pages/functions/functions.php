<?php
declare(strict_types=1);

function fetchHome(PDO $pdo): array {
    $query = "
        SELECT title, description, photo
        FROM works 
        ORDER BY created_at DESC LIMIT 3
        ";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function fetchUser(PDO $pdo, int $ID): array {
    $query = "
        SELECT 
            u.username,
            u.name,
            u.email,
            w.title,
            w.description,
            w.photo,
            uw.role,
            work_counts.total_works,
            donation_sums.total_donations
        FROM users u
        JOIN user_works uw ON u.user_id = uw.user_id
        JOIN works w ON uw.work_id = w.work_id
        LEFT JOIN (
            SELECT user_id, COUNT(*) AS total_works
            FROM user_works
            GROUP BY user_id
        ) AS work_counts ON u.user_id = work_counts.user_id
        LEFT JOIN (
            SELECT user_id, SUM(amount) AS total_donations
            FROM donations
            GROUP BY user_id
        ) AS donation_sums ON u.user_id = donation_sums.user_id
        WHERE u.user_id = :user_id;
        ";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':user_id', $ID, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function fetchSessionUser(PDO $pdo): array {
    if (!isset($_SESSION['username'])) {
        return [];
    }

    $query = "SELECT * FROM users WHERE username = :username";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':username', $_SESSION['username'], PDO::PARAM_STR);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}


function fetchWorks(PDO $pdo): array {
    $query = "
        SELECT w.title, w.description, w.photo, u.name
        FROM works w
        JOIN user_works uw ON w.work_id = uw.work_id
        JOIN users u       ON uw.user_id = u.user_id
        ";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function fetchWork(PDO $pdo, int $ID): array {
    $query = "
    SELECT 
        w.title,
        w.description,
        w.photo,
        uw.role,
        u.name,
        d.amount
    FROM works w
    JOIN user_works uw ON w.work_id = uw.work_id
    JOIN donations d   ON w.work_id = d.work_id
    JOIN users u       ON d.user_id = u.user_id
    WHERE uw.user_id = :user_id
        ";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':user_id', $ID, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function uploadWorks(PDO $pdo, int $userId, string $title, string $description, string $photo, string $role): string {
    $queryWorks = "INSERT INTO works (title, description, photo) VALUES (:title, :description, :photo)";
    $stmt = $pdo->prepare($queryWorks);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':photo', $photo);
    $stmt->execute();

    $workId = $pdo->lastInsertId();

    $queryUserWorks = "INSERT INTO user_works (user_id, work_id, role) VALUES (:user_id, :work_id, :role)";
    $stmt = $pdo->prepare($queryUserWorks); 
    $stmt->bindParam(':user_id', $userId);
    $stmt->bindParam(':work_id', $workId);
    $stmt->bindParam(':role', $role);
    $stmt->execute();

    if ($stmt->rowCount()){
        $resultaat = "Het item is toegevoegd!";
    } else {
        $resultaat = "Er is iets fout gegaan en het item is niet toegevoegd!";
    }

    return $resultaat;
}

function uploadDonations(PDO $pdo, string $naam, string $beschrijving): string {
    $query = "INSERT INTO {db_table_name} (naam, beschrijving) VALUES (:naam, :beschrijving)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':naam', $naam);
    $stmt->bindParam(':beschrijving', $beschrijving);
    $stmt->execute();

    if ($stmt->rowCount()){
        $resultaat = "Het item is toegevoegd!";
    } else {
        $resultaat = "Er is iets fout gegaan en het item is niet toegevoegd!";
    }

    return $resultaat;
}

function deleteTest(PDO $pdo, int $ID): string {
    $query = "DELETE FROM {db_table_name} WHERE ID = :ID";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':ID', $ID);
    $stmt->execute();

    if ($stmt->rowCount()){
        $resultaat = "Het item is verwijdered!";
    } else {
        $resultaat = "Er is iets fout gegaan en het item is niet verwijderd!";
    }

    return $resultaat;
}

function handleServerError(PDOException $e): void {
    http_response_code(500);
    error_log($e->getMessage());

    echo "Internal Server Error. Please try again later.";
    echo "<!-- Error details: " . $e->getMessage() . " -->";
    exit;
}