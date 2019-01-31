CREATE TABLE "user"(
   user_id serial PRIMARY KEY,
   user_name VARCHAR(80),
   email VARCHAR(80)
);

CREATE TABLE "recipe" (
   recipe_id serial PRIMARY KEY,
   recipe_name VARCHAR(80),
   recipe_description VARCHAR(80),
   instructions text,
   cook_time INT,
   prep_time INT,
   user_id INT REFERENCES "user"(user_id)
);
CREATE TABLE "ingredients" (
   ingredient_id serial PRIMARY KEY,
   ingredient_name VARCHAR(80),
   amount INT
);
CREATE TABLE "joined" (
  joined_id serial PRIMARY KEY,
  ingredient_id INT REFERENCES "ingredients" (ingredient_id),
  recipe_id INT REFERENCES "recipe"(recipe_id)

);

