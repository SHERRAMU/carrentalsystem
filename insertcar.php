<html>
    <head>
        <style>
            input[type=text]{
                width: 30%;
                height: 35px;

        
            l
            }
            input[type=submit]{
width: 60%;
            }
            .s1{
                background-color:skyblue;
            }
            
            
        </style>
    </head><?php $HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABaSE='carrentalsystem';
$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABaSE);
if($con){
    

        }
        else{
            echo 'erroer';
        }

    if(isset($_POST['insertcars']))
{
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
    $EX=mysqli_query($con,$qur);
    
    if($EX){
        echo "<script>alert('car inserted sucessfully')</script>";
    }
}}
    ?><form method='post' class='f1'>

    <div class='input'>
        <label for="carid">CARID</label>
    <input type="number"  placeholder="enter id" name="carid" required><BR><BR>
<label for="carname">NAME OF THE CAR</label>
    <input type="text"  placeholder="vehicltitle" name="carname" required><BR><BR>
    <label for="carbrand">BRAND OF THE CAR</label>
    <input type="text"  placeholder="enter vehicle brand" name="carbrand" required><BR><BR>
    <label for="carreview">OVERVIEW OF THE CAR</label>
    <textarea rows="5" cols="40"  name="carreview" required></textarea><BR><BR>
    <label for="carprice">PRICE OF THE CAR per day</label>
    <input type="number"  placeholder="enter car price per day" name="carprice" required><BR><bR>
    <label for="carfuel">FUEL TYPE</label>
    <input type="text"  placeholder="fuel type" name="carfuel" required><BR><br>
    <label for="caraitting">SITTINGCAPACITY</label>
    <input type="number"  placeholder="sitting capacity" name="carsitting" required><BR><br>
    <label for="image">imagelink</label>
    <input type="varchar"  placeholder="imagelink" name="image" required><BR><br>


    </div><Br>
    <div class="submit">
    <input type="submit" placeholder="INSERTCARS" value="INSERTCARS" name="insertcars" class='s1' required>
    </div>
</form></html>