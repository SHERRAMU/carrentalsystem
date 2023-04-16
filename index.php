<?php
/* 
$USER=0;
$SUCESS=0;
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABaSE='carrentalsystem';
$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABaSE);

    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['submit'])){
            if(!empty($_POST['EMAIL']) && !empty($_POST['password']))
    {
        $em=$_POST['EMAIL'];
        $pw=$_POST['password'];
        $quer="SELECT * FROM tbleusers WHERE emailid='$em' AND  password='$pw'";
        $result=mysqli_query($con,$quer);
        $row=$result->fetch_assoc();
        $count=mysqli_num_rows($result);
        if($row['emailid']==$em and $row['password']==$pw){

        
       
        
            if($count> 0){
            header('location:autoimageslider.php');
            $USER=1;
            

        }}
        else{
           
           
                header('location:signup2.php');
                    }
    }}
        }
    
    
 
   
  
 
*/
 
?>



<html>
    <head>
        <link rel='stylesheet' href='st.css'>
    </head>
    <H1 class='title' style="color:white" >WEL- COME TO CAR RENTAL</h1>
<div class="login-box">
<h2>Login</h2>
<form method='POST' action="k.php">
<div class="user-box">
<input type="EMAIL"  name='EMAIL' required="" >
<label for="EMAIL" >Email id</label>


</div>
<div class="user-box">

<input type='password'  name='password' required="">
<label for="password">PASSWORD</label>

</div>

<a><button type='submit' class='btn' name='submit' width='30px' >    <span></span>
<span></span>
<span></span>
<span></span>
SUBMIT</button></a>

<a href='signup2.php'>    <span></span>
<span></span>
<span></span>
<span></span>

SIGNUP</a></form>

</div>
</html>




