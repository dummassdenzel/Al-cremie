<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    require_once 'dbh.inc.php';

    
    $selectedIngredient = json_decode(file_get_contents('php://input'), true)[0];

    
    $tableName = 'selectedingredients';

    
    $stmt = $pdo->prepare("DELETE FROM $tableName WHERE ingredients = :ingredient");

    
    $stmt->bindParam(':ingredient', $selectedIngredient);

    
    $stmt->execute();

    
    $yourDbConnection = null;

    
    $response = ['status' => 'success', 'message' => 'Selected ingredient removed successfully'];
    echo json_encode($response);
} else {
    
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method Not Allowed']);
}

?>