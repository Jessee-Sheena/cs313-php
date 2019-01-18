<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Sheena Jessee's Home Page</title>
    <link rel="stylesheet" href="homepage.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script src="scripts/homepage.js"></script>
</head>
<body>
    <header>
        <div id="headerBox">
            <h1>
                Sheena Jessee's
            </h1>
            <h3>Home Page</h3>
        </div>

    </header>
   <body>
    <main>
<?php

 $scriptures = $_POST['scripture'];
 $kid = $_POST['kids'];
 $missions = $_POST['mission'];
 $deserts = $_POST['desert'];
 $colors = $_POST['color'];
 $dream = $_POST['dreams'];
 $sibling = $_POST['siblings'];
 $languages = $_POST['language'];
 $teeths = $_POST['teeth'];

 echo "<div><h4>What is my favorite scripture?</h4>";
 if ($scriptures == 'Proverbs 3:5-6') {
   echo"Correct My favorite Scripture is " . $scriptures ."</div>";
}else {
   echo "Sorry your answer of " . $scriptures . " was not correct! The answer is Proverbs 3:5-6.</div>";
}
 echo "<h4>How many kids do I have?</h4>";
 if ($kid == '2 girls') {
   echo"Correct the answer is " . $kid;
}else {
   echo "Sorry your answer of " . $kid . " was not correct! The answer is 2 girls.";
}
 echo "<h4>Where would I most like to go on a senior mission to?</h4>";
 if ($missions == 'Africa') {
   echo"Correct the answer is " . $missions;
}else {
   echo "Sorry your answer of " . $missions . " was not correct! The answer is Africa.";
}
 echo "<h4>What is my favorite desert?</h4>";
 if ( $deserts == 'Chocolate') {
   echo"Correct the answer is " . $deserts;
}else {
   echo "Sorry your answer of " . $deserts . " was not correct! The answer is Chocolate.";
}
 echo "<h4>What is my favorite color?</h4>";
 if ( $colors == 'Orange') {
   echo"Correct the answer is " . $colors;
}else {
   echo "Sorry your answer of " . $colors . " was not correct! The answer is Orange.";
}
 echo "<h4>When I was a kid I wanted to be a ___________ when I grew up?</h4>";
 if ( $dream == 'Archeologist') {
   echo"Correct the answer is " . $dream;
}else {
   echo "Sorry your answer of " . $dream . " was not correct! The answer is Archeologist.";
}
 echo "<h4>How many siblings do I have?</h4>";
 if ( $sibling == '7') {
   echo"Correct the answer is " . $sibling;
}else {
   echo "Sorry your answer of " . $sibling . " was not correct! The answer is 7.";
}
 echo "<h4>What language do I want to learn fluently?</h4>";
 if (  $languages == 'French') {
   echo"Correct the answer is " . $languages;
}else {
   echo "Sorry your answer of " . $languages . " was not correct! The answer is French.";
}
 echo "<h4>How old was I when I lost my last baby tooth?</h4>";
 if (  $teeths == '13') {
   echo"Correct the answer is " . $teeths;
}else {
   echo "Sorry your answer of " . $teeths . " was not correct! The answer is 13.";
}

?>
  </main>
    <footer> &copy; 2019 Sheena Jessee</footer>
</body>
</html>