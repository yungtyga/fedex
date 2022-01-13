<?php
include "connection.php";
if(isset($_POST['submit'])){
 $Fullname=$_POST['Fullname'];
 $Address=$_POST['Address'];
 $Email=$_POST['Email'];
 $Phone=$_POST['Phone'];
 $Country=$_POST['Country'];
 $Weight=$_POST['Weight'];

 $sql="INSERT INTO `Sender` (`Id`, `Fullname`, `Address`, `Email`, `Phone`, `Country`) VALUES (NULL, '$Fullname', '$Address', '$Email', '$Phone', '$Country')";
 $result=mysqli_query($conn,$sql);
 if($result){
    //echo "Data inserted successfully";
     header('location: create-shipment1.html');
    }else {
				   die(mysqli_error($conn));
				   }
}


 

?>