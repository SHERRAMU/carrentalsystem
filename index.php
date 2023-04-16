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
<?php
$USER=0;
$SUCESS=0;
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABaSE='carrentalsystem';
$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABaSE);

  
      
            if(!empty($_POST['EMAIL']) && !empty($_POST['password']))
    {
        $em=$_POST['EMAIL'];
        $pw=$_POST['password'];
        $quer="SELECT * FROM  tbleusers  WHERE emailid='$em' AND  password='$pw'";
        $result=mysqli_query($con,$quer);
        $row=$result->fetch_assoc();
        $count=mysqli_num_rows($result);
        if($row['emailid']==$em and $row['password']==$pw){

        
            if(isset($_POST['submit'])){
        
        if($count > 0){
            header('location:autoimageslider.php');
            //$k=rand("10000,20000");
            //$i="INSERT INTO tbleusers(id) VALUES ('$k'))";
            //$qu=mysqli_query($i,$con);

            $USER=1;
            

        }}}
        else{echo "please sign up";
            echo '<script>alert("please sign up ")</script>';
           
                header('location:signup2.php');
                    }
    }
        

    
 
   
  
 

 
?>




<!--<HTML>
    <HEAD>
        <TITLE>sign in</TITLE><BR>
        <BR>
       <style>
        body{
         background-color:#C5ADC5;
;        }
        .l1{
            color: black;
            margin-top:2%;
            font-display:;
            animation-fill-mode: forwards;
        }
        

        
        .login{
            font-size: 25px;
        }
        .t1{
            font-size: 18px;
            
        }
        input[type=password]{
            border-radius:10px ;
            margin-top: -2%;
            height: 30;
            width: 300;
        }
        input[type=EMAIL]{
            box-shadow: black;
            height: 30;
            width: 300;
            border-radius:10px ;
        }
        .car{
            font-size: 75;
        }
        .btn{
            height: 35;
            width: 85;
            border-radius: 40px;
            color: white;
            background-color:blue;
        }
        .hyper{
            color: blue;
            width: 40;
            background-color:;
        }
       </style>

    </HEAD>
<body><bR>
<BR>
<BR>
<BR>
<BR>

 <
 <
 
 <form  method='POST' align='center'>
 <div class="ROW">

</div><br>
<div class="row">
<label for="password" class="t1" >PASSWORD:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type='password'  class="l1"  placeholder="enter your password" name='password'>

</div><BR>

<DIV class="ROW">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type='submit' class='btn' name='submit' width='30px' >SUBMIT</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a  href="c2.php"  class='hyper' ><B>SIGN UP</B></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</form></div>
<script> function myfunction() {
    var x=
    document.getElementById('password');
    if(x.type==='password'){
        x.type='text';
    }
    else{
        x.type='password';
    }
    <span></span>
<span></span>
<span></span>
<span></span>

}</script>
</body>
</html>
<input type='password'  class="l1" name='password' required="">
<label for="password" class="t1" >Password</label>
