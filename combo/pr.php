<?php include "database.php"; ?>
<?php session_start(); ?>
<?php
	//Set question number
	//$number = (int) $_GET['n'];
function randomGen($min, $max, $quantity) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
}

$number=(int)randomGen(1,10,1);

	//Get total number of questions
	$query = "select * from questions";
	$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total=$results->num_rows;

	// Get Question
	$query = "select * from `questions` where question_number = $number";

	//Get result
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$question = $result->fetch_assoc();


	// Get Choices
	$query = "select * from `choices` where question_number = $number";

	//Get results
	$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Quiz</title>
    <link rel="stylesheet" href="styles/admin.css">
  </head>
  <body>
      

      <div class="login-wrap">
      	<header>
        <div class="container">
          <h1>Lets Play</h1>
	</div>
      </header>
  <div class="login-html">

    <div class="login-form">
    	<div class="sign-in-htm">	
    		Question <?php echo $number; ?> of <?php echo $total; ?>
	<p class="question">
	   <?php echo $question['question'] ?>
	</p>
	<form method="post" action="process.php">
		
	      <ul class="choices">
	        <?php while($row=$choices->fetch_assoc()): ?>
		<br><li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" />
		  <?php echo $row['choice']; ?>
		</li>
		<?php endwhile; ?><br>	
	      </ul>
	      <div class="group">
	      <input type="submit" value="submit" class="button">
	      <input type="hidden" name="number" value="<?php echo $number; ?>" />
	  </div>
	</form>


  </body>
</html>