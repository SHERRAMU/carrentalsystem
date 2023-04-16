<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABaSE='carrentalsystem';
$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABaSE);
 

if(isset($POST['payonline'])){
    $sa = $_GET['id'];
    $k="SELECT id,vehicletitle ,priceperday FROM tblevehicle where id=$sa";
    $re=mysqli_query($con,$k);
    $row=$re->fetch_assoc();
    // echo "id=".$row['id']."<br>" ;
     $title=$row['id'];
    // echo "vehicletitle:".$row['vehicletitle']."<br>";
   //$ds=$row['image'];
     //echo "<img src= $row[image]>";
     $fd=$row['vehicletitle'];
    // echo "<br>";
     $y=$row['priceperday'];
  
     
      $kl="INSERT INTO  tblebooking(Vehicleid,Vehicle_name,price) VALUES ('$title','$fd','$y' )";
   

 
 
}
 ?>