<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require_once 'dbh.inc.php';

    $tableName = 'selectedingredients';

    $stmt = $pdo->prepare("DELETE FROM $tableName");

    $stmt->execute();

    $yourDbConnection = null;

    header("Location: ../index.php");
    die();
} else {

    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method Not Allowed']);
}