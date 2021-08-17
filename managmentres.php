<?php 
session_start();
$date=$_REQUEST['date'];
$time=$_REQUEST['time'];
$mark=$_REQUEST['mark'];
$en=$_SESSION['un'];



include("connection.php");



$query="select * from student_reg where Enrollment_No='$en'";
$result=mysqli_query($conn,$query);
 while($res=mysqli_fetch_array($result))
{
    $first=$res['First_Name'];
    $middle=$res['Middle_Name'];
    $last=$res['Last_Name'];
}
     $stmt=$conn->prepare("insert into management_result(First_Name,Middle_Name,Last_Name,Date,Time,Marks) values(?,?,?,?,?,?)");
    $stmt->bind_param("ssssss",$first,$middle,$last,$date,$time,$mark);
    $stmt->execute();
    echo "<script>alert('Exam ended successfully...');window.location='studentpage.php'</script>";
    $stmt->close();
    $conn->close();
?>