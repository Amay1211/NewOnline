<?php 
include("connection.php");
include('sendotp.php');
$enroll=$_SESSION['un'];
$pass=$_POST['txt1'];


$q="Update student_reg set Password='$pass' where Enrollment_No='$enroll'";
$res1=mysqli_query($conn,$q);
if($res1)
{
    echo "<script>alert(Password Changed Successfully');window.location='index.html'</script>";
}
else
{
    echo "<script>alert('Some Thing went wrong please try again');window.location='change-password.php'</script>";
}


?>