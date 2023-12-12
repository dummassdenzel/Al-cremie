<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al'cremie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="resources/images/alcremie_logo.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <?php
    require_once 'Classes/Recipe.php';
    require_once 'Classes/Ingredients.php';
    require_once 'Classes/Selected.php';

    ?>


    <div class="container-fluid">

        <div class="row">
            <div class="navbar navbar-expand-lg" id="navi">
                <div class="col-1 text-center">
                    <div class="logo">
                        <img src="resources/images/alcremie.png" id="logo">
                    </div>
                </div>

                <div class="col-2">
                    <h1 id="alcremie">Al'cremie</h1>
                </div>

                <div class="col-6">
                </div>
            </div>
        </div>


        <div class="row">


            <div class="col-3" style="overflow-y: scroll;">
                <main class="q-layout-page" id="ingredients_page">
                    <div class="row" id="pantry">
                        <div class="text-center">
                            <h1 class="Pantry">Pantry</h1>


                            <span>
                                <form action="includes/igdClear.php" method="post">';
                                    <input type="submit" name="clearDatabase" value="Clear" class="clear">';
                                </form>';
                            </span>


                        </div>
                    </div>

                    <div class="row" id="igdbar">
                        <div class="text-center shadow" id="igdbar2">

                            <div class="row" id="igdsection">
                                <h4>Pantry Essentials</h4>
                                <hr>
                                <span>
                                    <?php
                                    $Ingredients->displayPantryEssentials();
                                    ?>
                                </span>
                            </div>

                            <div class="row" id="igdsection">
                                <h4>Meats and Protein</h4>
                                <hr>
                                <span>
                                    <?php
                                    $Ingredients->displayMeatsAndProtein();
                                    ?>
                                </span>

                            </div>
                            
                            <div class="row" id="igdsection">
                                <h4>Vegetables</h4>
                                <hr>
                                <span>
                                    <?php
                                    $Ingredients->displayVegetables();
                                    ?>
                                </span>

                            </div>

                            <div class="row" id="igdsection">
                                <h4>Herbs and Spices</h4>
                                <hr>
                                <span>
                                    <?php
                                    $Ingredients->displayHerbsAndSpices();
                                    ?>
                                </span>

                            </div>

                            <div class="row" id="igdsection">
                                <h4>Dairy</h4>
                                <hr>
                                <span>
                                    <?php
                                    $Ingredients->displayDairy();
                                    ?>
                                </span>
                            </div>

                            <div class="row" id="igdsection">
                                <h4>Products</h4>
                                <hr>
                                <span>
                                    <?php
                                    $Ingredients->displayProducts();
                                    ?>
                                </span>
                            </div>

                        </div>
                    </div>
                </main>
            </div>


            <div class="col-9">
                <div class="row" id="recipe">
                    <div class="text-center">
                        <h1 class="Recipes">Recipes</h1>
                    </div>
                </div>

                <section>
                    <div class="row" id="rcpbar">
                        <div id="recipeDisplay">

                            <?php


                            $input_igd = $selected->ingredients = ($selected->getSelectedIngredients());
                            echo '<h1 id="rcpbarDisplay">Add your Ingredients to get Started!</h1>';

                            $json_rcps = json_encode(Recipe::$Recipes);
                            $json_igd = json_encode($input_igd);



                            ?>




                        </div>
                    </div>
                </section>
            </div>


        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const buttons = document.querySelectorAll('.ingredient');
            var selectedIngredients = <?php echo $json_igd; ?>;
            var allRecipes = <?php echo $json_rcps; ?>;

            buttons.forEach(button => {
                button.addEventListener('click', function () {
                    this.classList.toggle('selected');

                    if (this.classList.contains('selected')) {
                        saveSelectedIngredients(this.id);
                        selectedIngredients.push(this.id);
                    } else {
                        removeSelectedIngredient(this.id);
                        selectedIngredients = selectedIngredients.filter(ingredient => ingredient !== this.id);
                    }

                    updateIngredientDisplay();
                    console.log(selectedIngredients);
                });
            });

            function saveSelectedIngredients(ingredient) {
                const endpoint = 'includes/igdSave.php';

                fetch(endpoint, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify([ingredient]),
                })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
                    })
                    .catch(error => {
                        console.error('Error saving selected ingredients:', error);
                    });
            }

            function removeSelectedIngredient(ingredient) {
                const endpoint = 'includes/igdRemove.php';

                fetch(endpoint, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify([ingredient]),
                })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
                    })
                    .catch(error => {
                        console.error('Error removing selected ingredient:', error);
                    });
            }

            function updateIngredientDisplay() {
                const displayDiv = document.getElementById('recipeDisplay');
                displayDiv.innerHTML = '';

                if (selectedIngredients.length === 0) {
                    displayDiv.innerHTML = '<h1 id="rcpbarDisplay">Add your Ingredients to get Started!</h1>';
                } else {
                    let matchedRecipes = [];

                    allRecipes.forEach(recipe => {
                        const essentialIngredients = recipe.EssentialIngredients;
                        const variableIngredients = recipe.VariableIngredients || []; // Handle the case where VariableIngredients is undefined

                        if (
                            essentialIngredients.every(ingredient => selectedIngredients.includes(ingredient)) &&
                            (variableIngredients.length === 0 || variableIngredients.some(ingredient => selectedIngredients.includes(ingredient)))
                        ) {
                            matchedRecipes.push({
                                recipe,
                                selectedVariableIngredients: variableIngredients.filter(ingredient => selectedIngredients.includes(ingredient))
                            });
                        }
                    });

                    if (matchedRecipes.length > 0) {
                        displayDiv.innerHTML += `<h1 id="rcpbarDisplay">There are ${matchedRecipes.length} matches!</h1>`;
                        displayDiv.innerHTML += '<hr>';

                        matchedRecipes.forEach(match => {
                            const { recipe, selectedVariableIngredients } = match;

                            // Create a div for each recipe
                            const recipeDiv = document.createElement('div');
                            recipeDiv.classList.add('recipe-item');

                            // Add recipe name to the div
                            const recipeName = document.createElement('h3');
                            recipeName.classList.add('Recipes');
                            recipeName.textContent = recipe.Name;
                            recipeDiv.appendChild(recipeName);

                            // Add EssentialIngredients to the div
                            const essentialIngredientsInfo = document.createElement('h5');
                            essentialIngredientsInfo.id = 'Info';
                            essentialIngredientsInfo.textContent = 'Essential Ingredients: ' + recipe.EssentialIngredients.join(', ');
                            recipeDiv.appendChild(essentialIngredientsInfo);

                            // Add selected variable ingredients if any
                            if (selectedVariableIngredients.length > 0) {
                                const variableIngredientsInfo = document.createElement('h5');
                                variableIngredientsInfo.id = 'Info';
                                variableIngredientsInfo.textContent = 'Variable Ingredients: ' + selectedVariableIngredients.join(', ');
                                recipeDiv.appendChild(variableIngredientsInfo);
                            }

                            // Append the recipe div to the main displayDiv
                            displayDiv.appendChild(recipeDiv);
                        });
                    } else {
                        displayDiv.innerHTML += '<h1 id="rcpbarDisplay">Keep adding Ingredients...</h1>';
                    }
                }
            }
        });
    </script>

</body>

</html>