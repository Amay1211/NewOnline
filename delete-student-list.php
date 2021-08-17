<?php 
include("connection.php");
$user=$_REQUEST['User_ID'];
$q="DELETE FROM `student_reg` WHERE User_ID='$user'";
$res1=mysqli_query($conn,$q);
if($res1)
{
    echo "<script>alert('Data is Deleted Successfully..');window.location='studentlist.php'</script>";
}
else
{
    echo "<script>alert('Some Thing went wrong please try again');window.location='studentlist.php'</script>";
}
?>