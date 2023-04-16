<?PHP
$HOSTNAME='sql31.epizy.com';
$USERNAME='epiz_34015872';
$PASSWORD='eZri4ptQHC';
$DATABaSE='epiz_34015872_carrentalsystem';
$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABaSE);

    if(isset($_POST['signup'])){
       $email=$_POST['EMAILID'];
    $FNAME=$_POST['FIRSTNAME'];
    $LNAME=$_POST['LASTNAME'];
    $contactno=$_POST['CONTACTNO'];
    $dob=$_POST['dob'];
    $address=$_POST['ADDRESS'];
    $regdate=$_POST['regdate'];
    $ndays=$_POST['NOOFDAYS'];
   
    
    $q="INSERT INTO   usertable2(EMAILID,FIRSTNAME,LASTNAME ,DOB,CONTACTNO,ADDRESS,NOOFDAYS,REGDATE) VALUES ('$email','$FNAME','$LNAME',$dob,$contactno,'$address',$ndays,'$regdate')";
    //'$_contactno','$_dob','$_address', '$_city',' $_country','$_regdate')";contactno,dob,address,city,country,regdate)
    $RUN=mysqli_query($con,$q);
   // $td="INSERT INTO tblebooking (userEmail,bpassword) VALUES('$_email','$_PASSWORD')";
   // $user=mysqli_query($con,$td);
    if($RUN){
        echo "inserted sucessfully";
        header('');
    }
  //  $lastid=mysqli_insert_id($con);
    //if($lastid)
    //{
      //  $code=rand(10000,20000);
//$_userid="EEM".$code.$lastid;
//$f="UPDATE tbleusers SET id='"$userid."'WHERE id='".$lastid."'";
//res
    //}
   // if(isset($_POST['insertcars']))
    /*{
        $a=$_POST['carid'];
        $b=$_POST['carname'];
        $c=$_POST['carbrand']; 
        $d=$_POST['carreview'];
        $e=$_POST['carprice'];
        $f=$_POST['carfuel'];
        $g=$_POST['carsitting'];
    $select="SELECT * FROM tblevehicle WHERE vehicletitle='$b'";
    $re=mysqli_query($con,$select);
    $rows=mysqli_num_rows($re);
    if($rows>0){
        echo "<script>alert('already this data is prasent')</script>";
    
    }
    else{
        $qur="INSERT INTO tblevehicle (id ,vehicletitle,vehiclebrand,vehicleoverview,priceperday,fueltype,seatingcapacity) VALUES('$a','$b','$c','$d','$e','$f','$g')";
        $EX=mysqli_query($con,$qur);*/
   
    } ?>