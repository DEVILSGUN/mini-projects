<?php include "database.php"; ?>

<?php 
if (isset($_POST['submit'])){
   //Get Post variables
   $question_number = $_POST['question_number'];      
   $question_text = $_POST['question_text'];
   $correct_choice = $_POST['correct_choice'];
   $choices = array();
   $choices[1] = $_POST['choice1'];
   $choices[2] = $_POST['choice2'];
   $choices[3] = $_POST['choice3'];
   $choices[4] = $_POST['choice4'];

   //Question query
   $query="insert into questions (question_number, question) 
   	 values('$question_number','$question_text')";
   $insert_row=$mysqli->query($query) or die ($mysqli->error.__LINE__);

   //VALIDATE INSERT
   if($insert_row){
      foreach($choices as $choice => $value){
        if($value != ''){
	       if($correct_choice == $choice){
	          $is_correct = 1;
	       } else {
	         $is_correct = 0;
	       }
              $query="insert into choices (question_number,is_correct,choice) 
   	          values('$question_number','$is_correct','$value')";
              $insert_row=$mysqli->query($query) or die ($mysqli->error.__LINE__);
	          if($insert_row){
	            continue;
	          }else {
	      		die("Error: (".$mysqli->errno.") ".$mysqli->eerror);
	    	}
        }
    }
   $msg="Question has been added";
}
}
//get total questions
$query = "select * from questions";
$questions = $mysqli->query($query) or die ($mysqli->error.__LINE__);
$total=$questions->num_rows;
$next=$total+1;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="styles/admin.css">
  </head>
  <body>
  	<div class="login-wrap">
    <div class="login-html">
    <div class="login-form">
      <div class="sign-in-htm">
	     <h2>Add A question</h2>
	     <?php 
	     	   if(isset($msg)) {
	     	      echo "<p class='group'>".$msg."</p>";
	     }
	     ?>
	     <form method="post" action="add.php">
	     	   <div class="group">
			<label class="label">Question Number</label>
			<input type="number" value="<?php echo $next; ?>" name="question_number" />
		   </div>
	     	   <div class="group">
			<label class="label">Question</label>
			<input type="text" name="question_text" class="input"/>
		   </div>
	     	   <div class="group">
			<label class="label">Choice #1: </label>
			<input type="text" name="choice1" class="input"/>
		   </div>
	     	   <div class="group">
			<label class="label">Choice #2: </label>
			<input type="text" name="choice2" class="input"/>
		   </div>
	     	   <div class="group">
			<label class="label">Choice #3: </label>
			<input type="text" name="choice3" class="input"/>
		   </div>
	     	   <div class="group">
			<label class="label">Choice #4: </label>
			<input type="text" name="choice4" class="input"/>
		   </div>
	     	   <div class="group">
			<label class="label">Correct choice number </label>
			<input type="number" name="correct_choice" class="input"/>
		   </div>
		   <div class="group">
			<input type="submit" name="submit" value="Submit" class="button" />
		   </div>
	     </form>
	     <form action="index.php" method="post">
          <div class="group">
          <input type="submit" class="button" name="exit" value="exit" >
        </div>

  </body>
</html>