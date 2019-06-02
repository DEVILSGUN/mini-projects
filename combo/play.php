 <?php include "database.php"; ?>

<?php
	//Get the total questions
	$query="select * from questions";
	//Get Results
	$results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
	$total = $results->num_rows;

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Quiz</title>
    <link rel="stylesheet" href="styles/admin.css">
  </head>
  <body><div class="login-wrap">
  <div class="login-html">
    <div class="login-form">
      <div class="sign-in-htm">
        <form action="question.php?n=1" method="post">
        <h2>Test your  Knowledge</h2>
	<p>This is a multiple choice quize to test your knowledge about something</p>
  <div class="group">
          <input type="submit" class="button" name="Play" value="Play" onclick="question.php?n=1">
        </div>
        </form>
        <form action="index.php" method="post">
          <div class="group">
          <input type="submit" class="button" name="exit" value="exit" >
          <br>
        </div>
    </div>
    </div>

  </body>
</html>