
<?php 
session_start();      //Session variable Store karanyasathi
include("connection.php");  //connection to database.


if(isset($_REQUEST["btn"]))      //The isset() function checks whether a variable is set, which means that it has to be declared and is not NULL.This function returns true if the variable exists and is not NULL, otherwise it returns false.
{  //PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.
    $user=$_REQUEST["username"]; 
    $pass=$_REQUEST["password"];
    $status="Present";  
    $res2="select * from student_reg where Enrollment_No='$user' && Student_status='$status'";  //assign String to res2 
    $query3=mysqli_query($conn,$res2); //The query() / mysqli_query() function performs a query against a database and returns data(table) into $query3
    $rowcount1=mysqli_num_rows($query3); //The mysqli_num_rows() function returns the number of rows in a result set.

    if($rowcount1==true)  //if rowcount>=1 means student is present.
    {
        $_SESSION['un']=$user;
        $res="select * from student_reg where Enrollment_No='$user' && Password='$pass'";
        $query=mysqli_query($conn,$res);
        $rowcount=mysqli_num_rows($query);
        if($rowcount==true) //student data is present in database
        {
            echo"<script>alert('Login Successfully');window.location='studentpage.php'</script>"; //The window.location object can be
            //used to get the current page address (URL) and to redirect the browser to a new page.
        }
        else //invalid data
        {
            echo "<script>alert('Incorrect UserName Or Password');window.location='index.html'</script>";
        }
    }
    else//student is not present means its data is not available in database
    {
        echo "<script>alert('you are not allowed to login');window.location='index.html'</script>";
    }
}


?>
