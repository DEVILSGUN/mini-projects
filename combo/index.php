<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles/loginstyle.css">
  <title></title>
</head>
<body>
<div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <form action="logdb.php" method="POST">
      <div class="sign-in-htm">
        <div class="group">
          <label class="label">Username</label>
          <input id="user" type="text" name="username" class="input">
        </div>
        <div class="group">
          <label class="label">Password</label>
          <input id="pass" type="password" class="input" name="password" data-type="password">
        </div>
        <div class="group">
          <input type="submit" class="button" name="submit" value="Sign In">
        </div>
      
      </div>
      </form>
      
      <form action="signupdb.php" method="POST">
      <div class="sign-up-htm">
        
        <div class="group">
          <label class="label">Username</label>
          <input id="user" type="text" name="username" class="input">
        </div>
        <div class="group">
          <label class="label">Password</label>
          <input id="pass" type="password" class="input" name="password" data-type="password" '>
        </div>
        <div class="group">
          <label class="label">Repeat Password</label>
          <input id="pass" type="password" class="input" name="repeatpassword" data-type="password"'>
        </div>
        
        <div class="group">
          <input type="submit" class="button" name="submit" value="Sign Up" id="submit"/>
        </div>
        <div class="hr">
        <div class="foot-lnk">
          <label for="tab-1">Already Member?</label>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>