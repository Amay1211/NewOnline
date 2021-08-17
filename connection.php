<?php 
$conn=new mysqli('localhost','root','','newexam'); //The connect() / mysqli_connect() function opens a new connection to the MySQL server.

//mysqli_connect(host, username, password, dbname, port, socket)

if($conn->connect_error)
    die("coonection failed:".$conn->connect_error);//Print a message and terminate the current script:

?>