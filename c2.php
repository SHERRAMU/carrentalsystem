
<html>
    <head><title>SIGN UP</title>
    <link rel="stylesheet" href="signup.css">
</head><div class="bo">
<body style='background-color:burlywood'>
<div class="container">
<form method='POST' action='auto.php' class='fm' >
   <div>
     <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
   </div>
   <div class="t">
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="EMAILID" required>
   </div><br><BR>
   <div class="t">
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="RPASSWORD" required>
   </div><br><BR>
   <div class="t">
    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="PASSWOR" required>
   </div><br><BR>
    <div class="clearfix">
      <button type="button" class="cancelbtn"  onclick="">Cancel</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="submit" class="signupbtn" name='signup'>Sign Up</button>
    </div>
</form>
</div></body></div></html>
