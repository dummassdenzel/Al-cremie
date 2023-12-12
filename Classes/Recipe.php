<?php
class Recipe
{
    public $Name;
    public $EssentialIngredients = [];
    public $VariableIngredients = [];
    public $OptionalIngredients = [];

    public $PresentVariableIngredients = [];
    
    public function setEssentialIngredients($ingredients)
    {
        $this->EssentialIngredients = $ingredients;
    }
    
    public function setVariableIngredients($ingredients)
    {
        $this->VariableIngredients = $ingredients;
    }
   
    public function setOptionalIngredients($ingredients)
    {
        $this->OptionalIngredients = $ingredients;
    }





    public static $Recipes = [];
    public function __construct($name)
    {
        $this->Name = $name;
        self::$Recipes[] = $this;
    }
}


//Filipino Dishes

$Adobo = new Recipe("Adobo");
$Adobo->setEssentialIngredients(["Garlic", "Soy Sauce", "Vinegar", "Sugar", "Bay Leaf", "Peppercorn", "Oil"]);
$Adobo->setVariableIngredients(["Chicken", "Pork", "Pork Belly", "String Beans"]);

$Sinigang = new Recipe("Sinigang");
$Sinigang->setEssentialIngredients(["Sinigang Mix", "Onion", "Garlic", "Oil"]);
$Sinigang->setVariableIngredients(["Chicken", "Pork", "Pork Belly", "String Beans", "Eggplant", "Spinach"]);

$TraditionalGiniling = new Recipe("Traditional Giniling");
$TraditionalGiniling->setEssentialIngredients(["Onion", "Garlic", "Tomato Sauce", "Green Peas", "Carrot", "Soy Sauce", "Oil"]);
$TraditionalGiniling->setVariableIngredients(["Ground Pork", "Ground Beef"]);

$Tinola = new Recipe("Tinola");
$Tinola->setEssentialIngredients(["Chicken", "Onion", "Garlic", "Ginger", "Oil"]);
$Tinola->setVariableIngredients(["Papaya", "Chayote", "Malunggay"]);

$Diningding = new Recipe("Diningding");
$Diningding->setEssentialIngredients(["Bagoong", "Onion", "Garlic", "Tomato", "Oil"]);
$Diningding->setVariableIngredients(["String Beans", "Papaya", "Eggplant", "Bitter Gourd"]);

$ChickenCurry = new Recipe("Chicken Curry");
$ChickenCurry->setEssentialIngredients(["Chicken", "Onion", "Garlic", "Ginger", "Ginger", "Curry Powder", "Coconut Milk", "Oil"]);
$ChickenCurry->setVariableIngredients(["Potato", "Carrot", "Bell Pepper"]);

$Munggo = new Recipe("Munggo");
$Munggo->setEssentialIngredients(["Mung Beans", "Onion", "Garlic", "Oil"]);
$Munggo->setVariableIngredients(["Pork", "Malunggay", "Bitter Gourd", "Spinach"]);

$TokwatBaboy = new Recipe("Tokwat Baboy");
$TokwatBaboy->setEssentialIngredients(["Tofu", "Pork", "Soy Sauce", "Vinegar", "Garlic", "Onion", "Oil"]);

$PancitCanton = new Recipe("Pancit Canton");
$PancitCanton->setEssentialIngredients(["Noodles", "Oil", "Soy Sauce", "Garlic", "Onion", "Chicken"]);
$PancitCanton->setVariableIngredients(["Carrot", "Cabbage", "Bell Pepper"]);

$Pares = new Recipe("Pares");
$Pares->setEssentialIngredients(["Beef", "Soy Sauce", "Garlic", "Ginger", "Onion", "Sugar", "Salt", "Oil"]);

$Bistek = new Recipe("Bistek");
$Bistek->setEssentialIngredients(["Beef", "Onion", "Calamansi", "Ginger", "Pepper", "Oil", "Soy Sauce"]);

$CrispyPata = new Recipe("Crispy Pata");
$CrispyPata->setEssentialIngredients(["Pork", "Bay Leaf", "Peppercorn", "Salt", "Pepper", "Oil"]);

$Afritada = new Recipe("Afritada");
$Afritada->setEssentialIngredients(["Green Peas", "Potato", "Carrot", "Bell Pepper", "Onion", "Garlic", "Tomato Sauce", "Oil"]);
$Afritada->setVariableIngredients(["Pork", "Beef", "Sausage", "Chicken"]);

$Menudo = new Recipe("Menudo");
$Menudo->setEssentialIngredients(["Pork", "Tomato Sauce", "Potato", "Carrot", "Bell Pepper", "Onion", "Garlic", "Soy Sauce", "Oil"]);

$Caldereta = new Recipe("Caldereta");
$Caldereta->setEssentialIngredients(["Beef", "Tomato Sauce", "Liver Spread", "Bell Pepper", "Potato", "Carrots", "Onion", "Garlic", "Oil"]);

$BurgerSteak = new Recipe("Burger Steak");
$BurgerSteak->setEssentialIngredients(["Ground Beef", "Onion", "Garlic", "Soy Sauce", "Mushrooms", "Salt", "Pepper", "Oil"]);

$BicolExpress = new Recipe("Bicol Express");
$BicolExpress->setEssentialIngredients(["Pork", "Coconut Milk", "Bagoong", "Chili Pepper", "Onion", "Garlic", "Ginger", "Oil"]);

$Giniling = new Recipe("Giniling");
$Giniling->setEssentialIngredients(["Ground Pork", "Oil", "Soy Sauce", "Garlic", "Onion"]);
$Giniling->setVariableIngredients(["Cabbage", "Lettuce", "Spinach"]);

$Pinakbet = new Recipe("Pinakbet");
$Pinakbet->setEssentialIngredients(["Bagoong", "Onion", "Garlic", "Oil", "Pumpkin"]);
$Pinakbet->setVariableIngredients(["String Beans", "Eggplant", "Bitter Gourd"]);

$Sarciado = new Recipe("Sarciado");
$Sarciado->setEssentialIngredients(["Tomato", "Eggs", "Onion", "Garlic", "Oil"]);
$Sarciado->setVariableIngredients(["Pork", "Fish"]);

$Paksiw = new Recipe("Paksiw");
$Paksiw->setEssentialIngredients(["Fish", "Vinegar", "Soy Sauce", "Garlic", "Onion", "Peppercorn"]);


//Universal Dishes

$Steak = new Recipe("Steak");
$Steak->setEssentialIngredients(["Steak", "Butter", "Garlic", "Salt", "Pepper"]);

$ChickenTeriyaki = new Recipe("Chicken Teriyaki");
$ChickenTeriyaki->setEssentialIngredients(["Chicken", "Soy Sauce", "Mirin", "Sugar", "Oil"]);

$Gyudon = new Recipe("Gyudon");
$Gyudon->setEssentialIngredients(["Beef", "Onion", "Soy Sauce", "Mirin", "Sugar"]);

$Katsu = new Recipe("Katsu");
$Katsu->setEssentialIngredients(["Flour", "Eggs", "Breadcrumbs", "Oil"]);
$Katsu->setVariableIngredients(["Chicken", "Pork"]);

$Oyakodon = new Recipe("Oyakodon");
$Oyakodon->setEssentialIngredients(["Chicken", "Onion", "Soy Sauce", "Mirin", "Sugar", "Eggs"]);

$Bibimbap = new Recipe("Bibimbap");
$Bibimbap->setEssentialIngredients(["Rice", "Carrot", "Cucumber", "Soy Sauce", "Garlic", "Sesame Oil", "Oil"]);
$Bibimbap->setVariableIngredients(["Beef", "Ground Beef", "Egg"]);

$Bulgogi = new Recipe("Bulgogi");
$Bulgogi->setEssentialIngredients(["Beef", "Soy Sauce", "Sugar", "Oil", "Garlic", "Ginger", "Onion", "Sesame Oil"]);


$ChaoFan = new Recipe("Chao Fan");
$ChaoFan->setEssentialIngredients(["Rice", "Eggs", "Oil", "Soy Sauce", "Garlic"]);
$ChaoFan->setVariableIngredients(["Sausage", "Chicken", "Garlic", "Ground Pork", "Ground Beef"]);


$PastaAglio = new Recipe("Pasta Aglio");
$PastaAglio->setEssentialIngredients(["Pasta", "Garlic", "Oil"]);
$PastaAglio->setVariableIngredients(["Basil", "Parsley", "Oregano"]);

$PastaPrimavera = new Recipe("Pasta Primavera");
$PastaPrimavera->setEssentialIngredients(["Pasta", "Garlic", "Oil", "Cheese"]);
$PastaPrimavera->setVariableIngredients(["Tomato", "Bell Pepper"]);

$Carbonara = new Recipe("Carbonara");
$Carbonara->setEssentialIngredients(["Pasta", "Garlic", "Eggs", "Cheese", "Salt", "Pepper", "Heavy Cream"]);
$Carbonara->setVariableIngredients(["Bacon", "Mushroom", "Chicken", "Ham", "Ground Beef", "Ground Pork"]);

$Spaghetti = new Recipe("Spaghetti");
$Spaghetti->setEssentialIngredients(["Pasta", "Tomato Sauce", "Onion", "Garlic", "Oil", "Salt", "Pepper"]);
$Spaghetti->setVariableIngredients(["Ground Beef", "Ground Pork", "Sausage", "Hotdog", "Ham", "Bacon"]);

$GarlicButterPasta = new Recipe("Garlic Butter Pasta");
$GarlicButterPasta->setEssentialIngredients(["Pasta", "Garlic", "Butter", "Parsley", "Calamansi"]);

$MashedPotatoes = new Recipe("Mashed Potatoes");
$MashedPotatoes->setEssentialIngredients(["Potato", "Butter", "Milk", "Salt", "Pepper"]);

$FriedChicken = new Recipe("Fried Chicken");
$FriedChicken->setEssentialIngredients(["Chicken", "Oil", "Eggs"]);
$FriedChicken->setVariableIngredients(["Breading Mix", "Flour"]);

$StirFriedNoodles = new Recipe("Stir Fried Noodles");
$StirFriedNoodles->setEssentialIngredients(["Noodles", "Soy Sauce", "Oil"]);
$StirFriedNoodles->setVariableIngredients(["Chicken", "Beef", "Tofu"]);

$StuffedBellPeppers = new Recipe("Stuffed Bell Peppers");
$StuffedBellPeppers->setEssentialIngredients(["Bell Pepper", "Soy Sauce", "Oil"]);
$StuffedBellPeppers->setVariableIngredients(["Tomato Sauce", "Garlic", "Onion", "Cheese"]);

$Chili = new Recipe("Chili");
$Chili->setEssentialIngredients(["Ground Beef", "Tomato Sauce", "Green Peas", "Garlic", "Onion"]);

$SweetenedMungBeans = new Recipe("Sweetened Mung Beans");
$SweetenedMungBeans->setEssentialIngredients(["Mung Beans", "Condensed Milk"]);

$CalamansiJuice = new Recipe("Calamansi Juice");
$CalamansiJuice->setEssentialIngredients(["Calamansi", "Ginger", "Sugar"]);


// Vegetables

$Tofu = new Recipe("Tofu with Dipping Sauce");
$Tofu->setEssentialIngredients(["Tofu", "Oil", "Soy Sauce", "Vinegar", "Sugar"]);

$SauteedVegetables = new Recipe("Sauteed Vegetables");
$SauteedVegetables->setEssentialIngredients(["Garlic", "Onion", "Oil"]);
$SauteedVegetables->setVariableIngredients(["Bitter Gourd", "Spinach", "Eggplant", "Carrots", "Cabbage"]);

$VegetarianStirFry = new Recipe("Vegetarian Stir-Fry");
$VegetarianStirFry->setEssentialIngredients(["Garlic", "Onion", "Oil", "Rice", "Soy Sauce"]);
$VegetarianStirFry->setVariableIngredients(["Tofu", "Bell Pepper","Carrot", "Green Peas"]);

$CapreseSalad = new Recipe("Caprese Salad");
$CapreseSalad->setEssentialIngredients(["Garlic", "Onion", "Oil", "Tomato", "Cheese"]);
$CapreseSalad->setVariableIngredients(["Spinach", "Basil"]);

$FrenchFries = new Recipe("French Fries");
$FrenchFries->setEssentialIngredients(["Potato", "Oil", "Salt"]);

$RoastedPotatoes = new Recipe("Roasted Potatoes");
$RoastedPotatoes->setEssentialIngredients(["Potato", "Oil"]);
$RoastedPotatoes->setVariableIngredients(["Paprika"]);


//Rice Dishes
$Tapsilog = new Recipe("Tapsilog");
$Tapsilog->setEssentialIngredients(["Beef", "Eggs", "Rice", "Garlic", "Oil"]);

$Hamsilog = new Recipe("Hamsilog");
$Hamsilog->setEssentialIngredients(["Ham", "Eggs", "Rice", "Garlic", "Oil"]);

$Hotsilog = new Recipe("Hotsilog");
$Hotsilog->setEssentialIngredients(["Hotdog", "Eggs", "Rice", "Garlic", "Oil"]);

$TurmericRice = new Recipe("Turmeric Rice");
$TurmericRice->setEssentialIngredients(["Garlic", "Rice", "Bay Leaf", "Turmeric"]);
$TurmericRice->setVariableIngredients(["Oil", "Butter"]);

$FriedRice = new Recipe("Fried Rice");
$FriedRice->setEssentialIngredients(["Rice", "Oil"]);
$FriedRice->setVariableIngredients(["Eggs", "Garlic", "Ground Pork", "Ground Beef", "Chicken", "Soy Sauce"]);

//Egg Dishes


$Omelette = new Recipe("Omelette");
$Omelette->setEssentialIngredients(["Eggs", "Oil"]);
$Omelette->setVariableIngredients(["Eggplant", "Bitter Gourd", "Tomato", "Potato", "Mushrooms", "Bell Pepper"]);

$FriedEgg = new Recipe("Fried Egg");
$FriedEgg->setEssentialIngredients(["Eggs"]);
$FriedEgg->setVariableIngredients(["Oil", "Butter"]);

$BoiledEgg = new Recipe("Boiled Egg");
$BoiledEgg->setEssentialIngredients(["Eggs"]);

//Processed Dishes

$PanFriedFish = new Recipe("Pan Fried Fish");
$PanFriedFish->setEssentialIngredients(["Fish", "Salt", "Pepper", "Oil"]);

$Bacon = new Recipe("Bacon");
$Bacon->setEssentialIngredients(["Bacon"]);

$Spam = new Recipe("Spam");
$Spam->setEssentialIngredients(["Spam"]);

$Hotdog = new Recipe("Hotdog");
$Hotdog->setEssentialIngredients(["Hotdog", "Oil"]);

$Sausage = new Recipe("Sausage");
$Sausage->setEssentialIngredients(["Sausage", "Oil"]);

$Ham = new Recipe("Ham");
$Ham->setEssentialIngredients(["Ham", "Oil"]);


?>