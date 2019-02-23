var files;	
/*****************************************************
*  search the recipes
********************************************************/
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
/***********************************************
 * submit the steps
 *********************************************/

$(document).ready(function () {
	$("#stepsSubmit").click(function () {
		var step = $('#steps').val();	
		var num = $('#stepNum').val();
		$.ajax({
			url: "stepsInfo.php",
			data: {
				'steps': step, 'stepNum': num},
			type: "POST",
			success: function (data) {
				
				var ingredients = "<li>" + data + "</li>";
				$('#stepList').append(ingredients);
			}
		});
	});
});
/********************************************
 * submit the ingredients
 *******************************************/
$(document).ready(function () {
	$("#ingredientSubmit").click(function () {
		var ing = $('#ingredient').val();
		var quantity = $('#amount').val();
		var unit = $('#measurement').val();
		var section = $('input[name=sectionName]:checked').val();
		$.ajax({
			url: "ingredient.php",
			data: {
				'ingredient': ing, 'amount': quantity, 'measurement': unit, 'sectionName': section
			},
			type: "POST",
			success: function (data) {
				
				var ingredients = "<li>" + data + "</li>";
				$('#ingredientList').append(ingredients);
				$('#stepsFormDiv').css("display", "block");
			}
		});
	});
});
/***********************************************
 * edit the recipe
 **********************************************/
$(document).ready(function () {
	$('#update').change(function () {
		var word = $(this).children(':selected').val();
		var insert;
		switch (word) {
			case 'Recipe':
				insert = '<label for="recipeName2">Recipe Name: </label><input type = "text" id = "recipeName2" name = "recipeName2" required /><button type="submit" id="submitButton">Make Changes</button>'
				$('#editInput').html(insert);
				break;
			case 'Description':
				insert = '<label for="recipeDescription">Description</label><textarea rows = "4" cols = "30" name = "recipeDescription2" id = "recipeDescription2" requied></textarea ><button type="submit" id="submitButton">Make Changes</button>'
				$('#editInput').html(insert);
				break;
			case 'cookTime':
				insert = '<label for="cook_Time2">Cook Time: </label><input type = "number" id = "cook_Time2" name = "cook_Time2" required /></select> <button type="submit" id="submitButton">Make Changes</button>';
				$('#editInput').html(insert);
				break;
			case 'prepTime':
				insert = '<label for=" prep_Time2">Preperation Time: </label><input type = "number" id = "prep_Time2" name = "prep_Time2" required /><button type="submit" id="submitButton">Make Changes</button>';
				$('#editInput').html(insert);
				break;
			case 'time':
				insert = '<label for="total_Time2">Total Time: </label><input type = "number" name = "total_Time2" id = "total_time2" required /><button type="submit" id="submitButton">Make Changes</button>';
				$('#editInput').html(insert);
				break;
			case 'servSize':
				insert = '<label for= "serving_size2" > Serving Size: </label ><input type="number" name="serving_size2" id="serving_size2" required /><button type="submit" id="submitButton">Make Changes</button>';
				$('#editInput').html(insert);
				break;
			case 'calories':
				insert = '<label for="calories2">Calories</label><input type = "number" name = "calories2" id = "calories2" required /><button type="submit" id="submitButton">Make Changes</button>';
				$('#editInput').html(insert);
				break;
			case 'cuisine':
				insert = '<label for="cuisine2">Cuisine Type: </label><select name = "cuisine2" id = "cuisine2" required ><option value=""> Select</option><option value="American">American</option><option value="Chinese">Asian</option><option value="Indian">Indian</option><option value="Mexican">Mexican</option><option value="Italian">Italian</option><option value="Caribbean">Caribbean</option></select > <button type="submit" id="submitButton">Get Recipes</button>';
				$('#editInput').html(insert);
				break;
			case 'image':
				insert = '<div id="image"><label for= "recipeImage2" > Image upload: </label ><input type="file" name="recipeImage2" id="recipeImage2" accept="image/*" required /><input type="submit" id="theRecipe" /></div ><button type="submit" id="submitButton">Get Recipes</button>';
				$('#editInput').html(insert);
				break;
		}
	});
}); 
