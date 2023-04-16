<html>
 <head>
 <link rel='stylesheet' href='signup2.css'>
</head>
<H1 class='title' style="color:white " >WEL- COME TO CAR RENTAL</h1>
<div class="login-box">
<h2>BOOKING DETAILS:</h2>
<form method='POST'  action='insert.php'>
<div class="user-box">
<input type="FIRSTNAME"  name='FIRSTNAME' required="" >
<label for="FIRSTNAMEL" >FIRST NAME</label>


</div>
<div class="user-box">
<input type='LASTNAM'  class="l1" name='LASTNAME' required="">
<label for="LASTNAME" class="t1" >LAST NAME</label>


</div>
<div class="user-box">
<input type='EMAIL'  class="l1" name='EMAILID' required="">
<label for="LASTNAME" class="t1" >EMAIL ID</label>
</div>

<div class="user-box">
<input type="number"  name="CONTACTNO" required="">
    <label for="contactno">CONTACT  NO</label>
 
   </div>
   <div class="user-box">
   <input type="date"  style="color:transparent" name="dob" required="">
   <label for="dob">DATE  OF BIRTH</label>
  
   
    
   </div>
   <div class="user-box">
   <input type="text" name="ADDRESS" required="">
   <label for="adress" >ADDRESS</label>
   
   </div>
  
<div class="user-box">
<input type="DATE" style="color:transparent" name="regdate" required="">
<label for="regdate">REGDATE</label>
</div>
<div class="user-box">
<input type="NUMBER" style="color:white" name="NOOFDAYS" required="">
<label for="regdate">NO OF DAYS</label>
    ""
</div>
<div class="user-box">
    
<!--<label style="color:white">UPLOAD FILES:</label></div><br>
<br>
<div class="user-box">
    
<input type="file"  style="color:transparent" name="file" required="">


</div>
<div class="user-box">
    
<input type="file"  style="color:transparent" name="file" required="">

--->
</div>


<A href="payment.php">
<span></span>
<span></span>
<span></span>
<span></span>
<button type="submit" class="signupbtn" name='signup'>BOOK</button></A>



</div>
</html>
<?php


?>