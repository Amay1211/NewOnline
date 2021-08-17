<?php 
include("connection.php");
$user=$_REQUEST['User_ID'];
$q="DELETE FROM `eti_result` WHERE User_ID='$user'";
$res1=mysqli_query($conn,$q);
if($res1)
{
    echo "<script>alert('Data is Deleted Successfully..');window.location='etiadminres.php'</script>";
}
else
{
    echo "<script>alert('Some Thing went wrong please try again');window.location='etiadminres.php'</script>";
}
?>