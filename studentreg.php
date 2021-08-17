
<?php 
include_once("connection.php");
$first=$_POST['first'];
$middle=$_POST['middle'];
$last=$_POST['last'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$dob=$_POST['DOB'];
$enrollment=$_POST['enrollment'];
$password=md5($_POST['password']);



$res="select * from student_reg where Enrollment_No='$enrollment'";
    $query=mysqli_query($conn,$res);
    $rowcount=mysqli_num_rows($query);
if($rowcount==true)
{
    echo "<script>alert('Enrollment number already exist');window.location='studentreg.html'</script>";

if(empty($first) || empty($middle) || empty($last) || empty($email) || empty($mobile) || empty($dob) || empty($enrollment) || empty($password))
{
    echo "<script>alert('Fill All Information');window.location='studentreg.html'</script>";
}
}
else
    {
    
     $stmt=$conn->prepare("insert into student_reg(First_Name,Middle_Name,Last_Name,Email_Id,Mobile_No,Date_Of_Birth,Enrollment_No,Password) values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssss",$first,$middle,$last,$email,$mobile,$dob,$enrollment,$password);
    $stmt->execute();
    echo "<script>alert('Registered succesfully');window.location='index.html'</script>";
    $stmt->close();
    $conn->close();
    }


?>
