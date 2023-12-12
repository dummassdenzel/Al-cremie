<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    require_once 'dbh.inc.php';

    
    $selectedIngredients = json_decode(file_get_contents('php://input'), true);

    
    $tableName = 'selectedingredients';

    
    $stmt = $pdo->prepare("INSERT INTO $tableName (ingredients) VALUES (:ingredient)");

    
    foreach ($selectedIngredients as $ingredient) {
        
        $stmt->bindParam(':ingredient', $ingredient);

        
        $stmt->execute();
    }

    
    $pdo = null;

    
    $response = ['status' => 'success', 'message' => 'Selected ingredients saved successfully'];
    echo json_encode($response);
} else {
    
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method Not Allowed']);
}

?>
