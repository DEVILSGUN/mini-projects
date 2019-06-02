 <?php include "database.php"; ?>
<?php session_start(); ?>
<?php
	//Create Select Query


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
        <form method="post" action="question.php?n=1">
	     <h2>You are Done!</h2>
	     <p>Congrats! You have completed the test</p>
	     <p>Final socre: <?php echo $_SESSION['score']; ?></p>
       <div class="group">
          <input type="submit" class="button" name="Play" value="Play Again" >
          <br>
        </div></form>
        <form action="play.php" method="post">
          <div class="group">
          <input type="submit" class="button" name="exit" value="exit" >
          <br>
        </div>
        </form>
	     <?php session_destroy(); ?>
	</div>
  </body>
</html>