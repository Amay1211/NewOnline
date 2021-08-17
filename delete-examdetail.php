<?php 
include('connection.php');
$sub=$_REQUEST['sub'];
$res="DELETE FROM `exam_detail` WHERE Subject='$sub'";
$res1=mysqli_query($conn,$res);
if($res1)
{
    echo "<script>alert('deleted successful');window.location='examdetail.php';</script>";
}
else
{
     echo "<script>alert('something went wrong');</script>";
}
?>