
<?php 
include("connection.php");
if(isset($_REQUEST["btn"]))
{
    $user=$_REQUEST["username"];
    $pass=$_REQUEST["password"];
    $res="select * from admin where Username='$user' && Password='$pass'";
    $query=mysqli_query($conn,$res);
    $rowcount=mysqli_num_rows($query);
    if($rowcount==true)
    {
        echo"<script>alert('Login Successfully');window.location='adminpage.html'</script>";//The window.location object 
                                                                                            //can be used to get the current page address (URL) and to redirect the browser to a new page.
    }
    else
    {
        echo "<script>alert('Incorrect UserName Or Password');window.location='adminlogin.html'</script>";
    }
}

?>
