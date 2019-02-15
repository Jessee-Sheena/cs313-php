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
				insert = '<label for="timeCook">How long do you want it to cook? </label>  <select name="cookTime" id="timeCook"> <option value = "" > Select</option > <option value="10"> 10 minutes</option><option value="15"> 15 minutes</option><option value="20">20 minutes</option> <option value="25"> 25 minutes</option><option value="30"> 30 minutes </option><option value="35"> 35 minutes</option> <option value="40">40 minutes </option> <option value="45"> 45 minutes</option><option value="50"> less than 50 minutes</option><option value="60">60 min</option></select> <button type="submit" id="submitButton">Get Recipes</button>';
				$('#searchInput').html(insert);
				break;
			case 'prep':
				insert = '<label for="timeCook">How much time do you want to take to prepare your meal? </label>  <select name="prepTime" id="timePrep"> <option value = "" > Select</option > <option value="10"> 10 minutes</option><option value="15"> 15 minutes</option><option value="20">20 minutes</option> <option value="25"> 25 minutes</option><option value="30"> 30 minutes </option><option value="35"> 35 minutes</option> <option value="40">40 minutes </option> <option value="45"> 45 minutes</option><option value="50"> less than 50 minutes</option><option value="60">60 min</option></select> <button type="submit" id="submitButton">Get Recipes</button>';
				$('#searchInput').html(insert);
				break;
			case 'ingredients':
				insert = '<label for="keys">Enter your ingredients: </label> <input name="ingredient1" class="ingredientsList" type="text"> <button type="submit" id="submitButton">Get Recipes</button>';
				$('#searchInput').html(insert);				
				break;
		}
	});
}); 

$(document).ready(function () {
	$("#ingredientSubmit").click(function () {
		var query = $('#ingredient').val();
		console.log(query);
		$.ajax({
			url: "ingredient.php",
			data: query,
			type: "POST",
			success: function (data) {
				var ingredients = "'<li>" + data + "</li>'";
				$('#ingredientList').append(ingredients);
			}
		});
	});
});
