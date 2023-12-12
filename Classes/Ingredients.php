<?php
require_once 'Dbh.php';

class Ingredients extends Dbh
{
    private $igd_vegetables = [];
    private $igd_pantryessentials = [];
    private $igd_meatsandprotein = [];
    private $igd_herbsandspices = [];
    private $igd_dairy = [];
    private $igd_products = [];


    //INGREDIENTS
    public function fetchAllIngredients()
    {
        $pdo = $this->connect();

        $query = "SELECT * FROM ingredients";
        $statement = $pdo->prepare($query);
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $row) {
            $igdType = $row['igd_type'];
            $igdName = $row['igd_name'];


            switch ($igdType) {
                case 'vegetables':
                    $this->igd_vegetables[] = $igdName;
                    break;
                case 'pantryessentials':
                    $this->igd_pantryessentials[] = $igdName;
                    break;
                case 'meatandprotein':
                    $this->igd_meatsandprotein[] = $igdName;
                    break;
                case 'herbsandspices':
                    $this->igd_herbsandspices[] = $igdName;
                    break;
                case 'dairy':
                    $this->igd_dairy[] = $igdName;
                    break;
                case 'products':
                        $this->igd_products[] = $igdName;
                        break;

                default:

                    break;
            }
        }
    }

    public function displayVegetables()
    {
        foreach ($this->igd_vegetables as $ingredient) {
            echo '<button type="button" id="' . $ingredient . '" class="ingredient">' . $ingredient . '</button>';
        }
    }
    public function displayPantryEssentials()
    {
        foreach ($this->igd_pantryessentials as $ingredient) {
            echo '<button type="button" id="' . $ingredient . '" class="ingredient">' . $ingredient . '</button>';
        }
    }
    public function displayMeatsAndProtein()
    {
        foreach ($this->igd_meatsandprotein as $ingredient) {
            echo '<button type="button" id="' . $ingredient . '" class="ingredient">' . $ingredient . '</button>';
        }
    }
    public function displayHerbsAndSpices()
    {
        foreach ($this->igd_herbsandspices as $ingredient) {
            echo '<button type="button" id="' . $ingredient . '" class="ingredient">' . $ingredient . '</button>';
        }
    }
    public function displayDairy()
    {
        foreach ($this->igd_dairy as $ingredient) {
            echo '<button type="button" id="' . $ingredient . '" class="ingredient">' . $ingredient . '</button>';
        }
    }

    public function displayProducts()
    {
        foreach ($this->igd_products as $ingredient) {
            echo '<button type="button" id="' . $ingredient . '" class="ingredient">' . $ingredient . '</button>';
        }
    }

}
$Ingredients = new Ingredients();
$Ingredients->fetchAllIngredients();
?>