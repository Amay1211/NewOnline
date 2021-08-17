<?php 
include("connection.php");
$count=0;
    $question=$_REQUEST['txt1'];
 $optionA=$_REQUEST['txt2'];
 $optionB=$_REQUEST['txt3'];
 $optionC=$_REQUEST['txt4'];
 $optionD=$_REQUEST['txt5'];
 $answer=$_REQUEST['txt6'];
$result=mysqli_query($conn,"select * from estque");
while($res=mysqli_fetch_array($result))
{
    $count++;
}


if(empty($question) || empty($optionA) || empty($optionB) || empty($optionC) || empty($optionD) )
{
    echo "<script>alert('Fill all field');window.location='setpaperest.html'</script>";



}
else
{
   $stmt=$conn->prepare("insert into estque(Question,OptionA,OptionB,OptionC,OptionD,Answer) values(?,?,?,?,?,?)");
    $stmt->bind_param("ssssss",$question,$optionA,$optionB,$optionC,$optionD,$answer);
    $stmt->execute();
    echo "<script>alert('Question Added successfully');window.location='setpaperest.html'</script>";
    $stmt->close();
    $conn->close();
}
?>