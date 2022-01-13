<?php
include 'connection.php';
if(isset($_POST['submit'])){
 $Fullname=$_POST['Fullname'];
 $Address=$_POST['Address'];
 $Email=$_POST['Email'];
 $Phone=$_POST['Phone'];
 $Country=$_POST['Country'];
 $Weight=$_POST['Weight'];



$sql = "INSERT INTO `Receiver` (`id`, `Fullname`, `Address`, `Email`, `Phone`, `Country`, `Weight`) VALUES (NULL, '$Fullname', '$Address', '$Email', '$Phone', '$Country', '$Weight')";
 $result=mysqli_query($conn,$sql);
 if($result){
    //echo "Data inserted successfully";
     header('location: shipment.html');
    }else {
				   die(mysqli_error($conn));
				   }
}
?>
<?php

$Weight = filter_input(INPUT_POST, 'Weight', FILTER_SANITIZE_STRING);

?><?php if ($Weight) : ?>
    <p>You selected <span style="Weight:<?php echo $Weight ?>"><?php echo $Weight ?></span></p>
    <p><a href​=​"index.php"​>​Back to the form</a></p><?php else : ?>
    <p>You did not select any color</p><?php endif ?>