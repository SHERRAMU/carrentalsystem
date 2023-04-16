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
