<?php
include("connection.php");
$result=mysqli_query($conn,"select * from advjavaque");
$res=mysqli_fetch_array($result);
if(is_int($res['Answer']))
    echo "ysh";
?>