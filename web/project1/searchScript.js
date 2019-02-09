$(document).ready(function () {
	$('#searches').change(function () {
		var word = $(this).children(':selected').val();
		var insert;
		switch (word) {
			case 'keyword':
				insert = '<label for="keys">Enter your keyword (ie "chocolate"): </label> <input name="keywords" id="keys" type="text"> <button type="submit" id="submitButton">Get Recipes</button> '
				$('#searchInput').html(insert);
				break;
			case 'name':
				insert = '<label for="names">Enter the name of the recipe: </label> <input name="recipeName" id="names" type="text"> <button type="submit" id="submitButton">Get Recipes</button>'
				$('#searchInput').html(insert);
				break;
			case 'cuisine':
				insert = '<label for="cuisineType">What type of cuisine are you looking for?</label>  <select name="typeCuisine" id="cuisineType"> <option value = "" > Select</option > <option value="American">American</option> <option value="Chinese">Asian</option> <option value="Indian">Indian</option> <option value="Mexican">Mexican</option> <option value="Italian">Italian</option> <option value="Caribbean">Caribbean</option> </select> <button type="submit" id="submitButton">Get Recipes</button>';
				$('#searchInput').html(insert);
				break;
			case 'cook':
				insert = '<label for="timeCook">How long do you want it to cook? </label>  <select name="cookTime" id="timeCook"> <option value = "" > Select</option > <option value="20"> less than 20 minutes</option> <option value="30"> 30 minutes </option> <option value="40">40 minutes </option> <option value="1 hour">More than 1 hour</option></select> <button type="submit" id="submitButton">Get Recipes</button>';
				$('#searchInput').html(insert);
				break;
			case 'prep':
				insert = '<label for="timeCook">How much time do you want to take to prepare your meal? </label>  <select name="prepTime" id="timePrep"> <option value = "" > Select</option > <option value="20"> less than 20 minutes</option> <option value="30"> 30 minutes </option> <option value="40">40 minutes </option> <option value="1 hour">More than 1 hour</option></select> <button type="submit" id="submitButton">Get Recipes</button>';
				$('#searchInput').html(insert);
				break;
			case 'ingredients':
				insert = '<label for="keys">Enter your ingredients: </label> <input name="ingredient1" class="ingredientsList" type="text"> </label> <input name="ingredient2" class="ingredientsList" type="text"> </label> <input name="ingredient3" class="ingredientsList" type="text"> </label> <input name="ingredient4" class="ingredientsList" type="text"> <button type="submit" id="submitButton">Get Recipes</button>';
				$('#searchInput').html(insert);				
				break;
		}
	});
});