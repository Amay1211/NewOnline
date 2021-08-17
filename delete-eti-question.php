<?php 
include("connection.php");
$user=$_REQUEST['Question_ID'];
$q="DELETE FROM `etique` WHERE Question_ID='$user'";
$res1=mysqli_query($conn,$q);
if($res1)
{
    echo "<script>alert('Question Deleted Successfully..');window.location='delete-question-eti.php'</script>";
}
else
{
    echo "<script>alert('Some Thing went wrong please try again');window.location='delete-question-eti.php'</script>";
}
?>