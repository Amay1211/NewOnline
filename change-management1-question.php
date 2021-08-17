<?php 
include("connection.php");
$hd=$_REQUEST['hd'];
$question=$_REQUEST['txt1'];
$optionA=$_REQUEST['txt2'];
$optionB=$_REQUEST['txt3'];
$optionC=$_REQUEST['txt4'];
$optionD=$_REQUEST['txt5'];
$answer=$_REQUEST['txt6'];

$q="Update managmentquestion set Question='$question', OptionA='$optionA',OptionB='$optionB',OptionC='$optionC',OptionD='$optionD',Answer='$answer' WHERE Question_ID='$hd'";
$res1=mysqli_query($conn,$q);
if($res1)
{
    echo "<script>alert('Question updated Successfully..');window.location='change-question-management.php'</script>";
}
else
{
    echo "<script>alert('Some Thing went wrong please try again');window.location='change-question-management.php'</script>";
}
?>