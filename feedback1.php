<?php 
include_once("connection.php");

$txt1=$_POST['txt1'];
$txt2=$_POST['txt2'];
$txt3=$_POST['txt3'];
$txt4=$_POST['txt4'];


    
     $stmt=$conn->prepare("insert into feedback(Name,Enrollment_No,Mobile_No,Comment) values(?,?,?,?)");
    $stmt->bind_param("ssss",$txt1,$txt2,$txt3,$txt4);
    $stmt->execute();
    echo "<script>alert('Feedback sent succesfully');window.location='studentpage.php'</script>";
    $stmt->close();
    $conn->close();
    


?>