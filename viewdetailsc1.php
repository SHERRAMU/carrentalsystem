<html><head>
   <link rel="stylesheet" href="ss.css">
</head>

<body style='background-color:#F9B872, #FAE7A5'>
<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABaSE='carrentalsystem';
$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABaSE);


//if(isset($_POST['view details']))

    $sa = $_GET['id'];
 $k="SELECT * FROM tblevehicle where id=$sa";
   $re=mysqli_query($con,$k);

   //$f=mysqli_query($con,$k);
 //  $row=mysqli_fetch_assoc($f);
//while($row=mysqli_fetch_assoc($re)){
  // $row=mysqli_fetch_assoc($re);
  $row=$re->fetch_assoc();
 // echo "id=".$row['id']."<br>" ;
 
  $title=$row['vehicletitle'];
 // echo "vehicletitle:".$row['vehicletitle']."<br>";
//$ds=$row['image'];
  //echo "<img src= $row[image]>";
  $fd=$row['vehicleoverview'];
 // echo "<br>";
  $y=$row['priceperday'];
  $t= $row['fueltype'];
  $rt=$row['seatingcapacity'];

  echo "<h1><div class='td' >$title</h1></div>";
   
  echo "<div class='dt'><img  class='img' src= $row[image]></div>";

  echo "<div class='pr'><p class='po'>$fd</p></div><br><br>";
 $h="payment.php?idd=$sa";
  echo "<div class='pp'>price per day:$y<BR><BR></div>";
  echo "<div class='fp'> Fuel Type :$t<br><br></div>";
  echo "<div style='font-size:25px'>Seating Capacity:$rt</div>";
  echo "<a href='signup2.php'><button class='btn' >BOOK</button></a>";
   

echo $sa;

 //if(isset($off)){



 //header('locattio:payment.php');


//}
?>


  
   


</body>
</html>