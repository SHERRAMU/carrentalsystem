<html class='it'>
    <head><title>paymentmethod</title>
<style> 
.text{font-size: 45px;
    background-color:;
    text-align: center;}
.R1{font-size: 35px;
    text-align: center;
    margin-top: 4%;
background-color: 
}
.colr{
    background-color;
}
.it{
    background-color:#BADFE7;
}


</style></head><body>

   <div class='colr'> 
        <h2 class='text'>PAYMENT OPTIONS</h2>
      
        <DIV CLASS='R1'><a href="https://www.paypal.com"><button name="payonline" onclick="bid.php">Payonline</button></DIV></a>
        <div class='R1'><a href=autoimageslider.php><h4 >PAYOFFLINE</h4></a></div>

 
<?php
include 'ipaddress.php';
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABaSE='carrentalsystem';
$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABaSE);
 //$s=$_GET['idd'];
 book();//finction call
//$s="yugbygbytf";
//echo $s;


      
      ?>
 
</body></html>