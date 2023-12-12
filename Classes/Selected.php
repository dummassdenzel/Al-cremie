<?php
require_once 'Dbh.php';

class Selected extends Dbh
{
    public $ingredients = [];
    public function getSelectedIngredients()
    {
        $pdo = $this->connect();

        try {
            $query = "SELECT * FROM selectedingredients";
            $statement = $pdo->prepare($query);
            $statement->execute();

            $result = $statement->fetchAll(PDO::FETCH_COLUMN);

            return $result;

        } catch (PDOException $e) {
            die("Error fetching selected ingredients: " . $e->getMessage());
        }
    }
}

$selected = new Selected();

?>