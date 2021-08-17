<?php 
include("connection.php");
include("front1.php");
$user=$_SESSION['un'];
$result=mysqli_query($conn,"select * from student_reg where Enrollment_No='$user'");
$res=mysqli_fetch_array($result);
?>
<html>
<head>
    <title>studentpage</title>
    
    <style>
    .img{
    
    background-size: cover;
    
    background-image:linear-gradient(#f093fb,#f5576c,#4facfe);
    
    background-size: cover;
        border: 3px solid black;
        height: 585px;
}
        

.online
{
     background-color: rgba(0,0,0,0.6);
    height: 90px;
    margin-top: 0px;
    
}
.logo img
{  
    float: left;
    margin-top: 0px;
    height: 90px;
    margin-left: 20px;
    
}
.l2
{
    font-size: 45px;
    text-align: bottom;
    color: white;
    float: right;
    margin-right: 650px;
    margin-top: 10px;
    font-style: italic;
    
    
    
}
.l3 input[type="button"]
{
    height: 35px;
    width: 95px;
    font-size: 19px;
    margin-left: 3px;
    background-color:blue;
    color: white;
    cursor: pointer;
    margin-top: 2px;
    border: none;
    
}
.l3 input[type="button"]:hover
{
    height: 35px;
    width: 95px;
    font-size: 19px;
    margin-left: 3px;
    background-color:white;
    color: black;
    cursor: pointer;
    margin-top: 2px;
    border: none;
}
        .l2 h2
            {
                font-size: 20px;
                margin-top: 0px;
                margin-left: 120px;
                color: white;
            }
.profile
{
    margin-left: 500px;
    margin-top: 10px;
}

h2{
    color: darkblue;
    font-size: 40px;
    margin-left: 550px;
    margin-top: 0px;
}
        .profile h1
{
    color: white;
    margin-top: -5px;
    margin-left: -80px;
    font-size: 50px;
}
        .detail
        {
            border: 2.5px solid yellow;
            height: 175px;
            width: 600px;
            margin-left: 320px;
        }
        .detail h1
        {
            font-size: 28px;
            color: white;
            margin-left: 20px;
            
        }
    </style>
    </head>
    <body>
        <div class="img">
     <div class="online">
            
    <div class="logo">
        
      <img src="img/logo.png">
        <div class="l2">
        Modern Education Society's 
            <h2>College Of Engineering,Pune</h2>
        </div>
        
    </div>
            
            
            </div>
        <div class="l3">
            <input type="button" value="Profile" >
            <input type="button" value="Exam" onclick="window.location='exam.html'">
            
            <input type="button" value="FeedBack" onclick="window.location='feedback.php'">
            <input type="button" value="Logout" onclick="window.location='index.html'">
        </div>
        
        <div class="profile">
        <img src="img/user.png">
            
    </div>
            <div class="detail">
            <h1><?php echo "Name"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :".$res['First_Name']." ".$res['Middle_Name']." ".$res['Last_Name'] ?></h1>
                <h1><?php echo "Enrollment No"."&nbsp;&nbsp;:".$res['Enrollment_No']?></h1>
                 <h1><?php echo "Sem/Year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:"." ".$res['Semester']?></h1>
            </div>
            </div>
        <script>
            window.onload=function()
            {
                document.addEventListener("contextmenu",function(e){e.preventDefault();},false);
            }
               function preback()
            {
                window.history.forward();
            }
          setTimeout("preback()",0);
            window.onunload=function(){null};
           
        </script>
    </body>
</html>