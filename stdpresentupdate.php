<?php 

include("connection.php");
$user=$_REQUEST['User_ID'];
$status="Present";
$status1="Absent";
$result=mysqli_query($conn,"select * from student_reg where User_ID='$user'");
$res=mysqli_fetch_array($result);
if($res['Student_status']=="Absent" || $res['Student_status']=="absent")
{
    $q="UPDATE `student_reg` SET Student_status='$status' WHERE User_ID='$user'";
    $res1=mysqli_query($conn,$q);
    echo "<script>window.location='stdpresent.php'</script>";
}
if(isset($_REQUEST["reset"]))
{
    $status1="Absent";
    $u="UPDATE `student_reg` SET Student_status='$status1'";
    $res2=mysqli_query($conn,$u);
    echo "<script>window.location='stdpresent.php'</script>";
}

?>