﻿CREATE TABLE "user"(
   user_id serial PRIMARY KEY,
   user_name VARCHAR(80),
   email VARCHAR(80)
);

CREATE TABLE "recipe" (
   recipe_id serial PRIMARY KEY,
   recipe_name VARCHAR(80),
   recipe_description VARCHAR(80),
   instructions text,
   cuisine VARCHAR(80),
   cook_time INT,
   prep_time INT,
   total_time INT,
   calories INT,
   serving_size INT,
   user_id INT REFERENCES "user"(user_id)
);
CREATE TABLE "ingredients" (
   ingredient_id serial PRIMARY KEY,
   ingredient_name VARCHAR(80),
   
);
CREATE TABLE "recipe_ingredients" (
  recipe_ingredient_id serial PRIMARY KEY,
  ingredient_id INT REFERENCES "ingredients" (ingredient_id),
  recipe_id INT REFERENCES "recipe"(recipe_id),
  measurement_id INT REFERENCES "measurement" (measurement_id),
  section_id INT REFERENCES "section" (section_id),
  ingredient_amount INT
);
CREATE TABLE "steps" (
steps_id serial PRIMARY KEY,
step_number INT,
step_description VARCHAR(80)

);

CREATE TABLE "measurement" (
measurement_id serial PRIMARY KEY,
unit VARCHAR(80)
);
CREATE TABLE "section" (
section_id serial PRIMARY KEY,
section INT,
section_name VARCHAR(80)
);

SELECT
        i.ingredient_name AS ingredientName,
        q.ingredient_amount AS ingredientQuantity,
        m.unit AS measurementName,
		s.section_name AS sectionName
    FROM ingredients AS i
    JOIN recipe_ingredients AS q ON q.ingredient_id = i.ingredient_id
    JOIN measurement AS m ON m.measurement_id = q.measurement_id
    JOIN recipe AS r ON r.recipe_id = q.recipe_id
    JOIN section AS s ON s.section_id = q.section_id
    WHERE r.recipe_id = 2
    ORDER BY i.ingredient_name ASC

	SELECT
        s.step_number AS stepNo,
        s.step_description AS stepDescription
    FROM steps AS s
    JOIN recipe AS r ON r.recipe_id = s.recipe_id
    WHERE r.recipe_id = 123
    ORDER BY s.step_number ASC