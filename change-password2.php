<?php 
include("connection.php");
include('sendotp.php');
$enroll=$_SESSION['un'];
$pass=md5($_POST['txt1']);
$repass=$_POST['txt2'];

if(!empty($pass) || !empty($repass))
{
$q="UPDATE student_reg SET Password='$pass' WHERE Enrollment_No='$enroll'";
$res1=mysqli_query($conn,$q);
if($res1)
{
    echo "<script>alert('Password Changed Successfully');window.location='index.html'</script>";
}
else
{
    echo "<script>alert('Some Thing went wrong please try again');window.location='change-password.php'</script>";
}
}
else
{
    echo "<script>alert('Fill all Fields');window.location='change-password.php'</script>";
}



?>