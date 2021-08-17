<?php 
include('connection.php');
if(isset($_REQUEST['submit']))
{
    $fname=$_REQUEST['fname'];
    $mname=$_REQUEST['mname'];
    $lname=$_REQUEST['lname'];
    $mob=$_REQUEST['mobile'];
    $sem=$_REQUEST['sem'];
    $en=$_REQUEST['en'];
    $pass=$_REQUEST['pass'];
    $status="Absent";
    $insert="insert into student_reg(First_Name,Middle_Name,Last_Name,Mobile_No,Semester,Enrollment_No,Password,Student_status) values('$fname','$mname','$lname','$mob','$sem','$en','$pass','$status')";
    $res=mysqli_query($conn,$insert);
    if($res)
    {
        echo "<script>alert('Student added successfully');window.location='addstudent.php'</script>";
    }
    else
    {
         echo "<script>alert('Something Wrong please try again');window.location='addstudent.php'</script>";
    }
}

?>

<html>
<head>
    <title>adminpage</title>
 <style>
    
.img{
    
    background-size: cover;
    
    background-image:linear-gradient(#833ab4,#fcb045,#e45050);
    
    border: 3px solid black;
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
    width: 115px;
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
    
    background-color:white;
    color: black;
    
}
.bt
     {
         float: right;
         margin-top: -37px;
         margin-right: 265px;
     }
     #bt2
     {
         float: left;
         margin-top: -35px;
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
    margin-top: 70px;
}
.profile h1
{
    color: white;
    margin-top: -5px;
    margin-left: -82px;
    font-size: 50px;
}
h2{
    color: darkblue;
    font-size: 40px;
    margin-left: 550px;
    margin-top: 0px;
}
#option
{
    height: 34px;
    width: 120px;
    font-size: 20px;
    margin-left: 0px;
    background-color:#1c8adb ;
    color: white;
    cursor: pointer;
    
}
#option:hover
{
    height: 35px;
    width: 120px;
    font-size: 20px;
    margin-left: 0px;
    background: transparent;
    color: black;
    cursor: pointer;
    background-color: white;
     transition: 0.s ease;
}
    #btn
{
    height: 35px;
    width: 115px;
    font-size: 19px;
    margin-left: 3px;
    
    background-color:blue;
    color: white;
    cursor: pointer;
    margin-top: 2px;
    border: none;
    
}
     
#btn:hover
{
    
    background-color:white;
    color: black;
    
}
     .part2
     {
         height: 70%;
         margin-top: 1%;
         margin-left: 2.5%;
         width: 95%;
        background-color: rgba(0,0,0,0.6);
     }
     .part2 input[type='text'],input[type='password'],input[type='number']
     {
         height: 15%;
         width: 28%;
         margin-top: 4%;
         margin-left: 3%;
         text-align: center;
         font-size: 1.4vw;
         background: transparent;
        color: white;
         border: none;
          border-bottom: 2px solid white;
     }
   .part2 input[type='submit']
     {
         height: 15%;
         width: 30%;
        float: right;
         margin-right: 25%;
         margin-top: 7%;
         font-size: 1.4vw;
         background-color: #1c8adb;
         border: none;
         color: white;
         cursor: pointer;
     }
     .part2 input[type='submit']:hover{background: white;color: black;}
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
             <input type="button"   value="Back" onclick="window.location='adminpage.html'" id="btn">
              <input type="button"   value="Logout" onclick="window.location='adminlogin.html'" id="btn">
            <form action="" method="post">
            <div class="part2">                                                                                                                                                                                                                                                                    <!-- call Function mbn():The onchange attribute fires the moment when the value of the element is changed.

-->
            <input type="text" placeholder="First Name" name="fname" required><input type="text" placeholder="Middle Name" name="mname" required><input type="text" placeholder="Last Name" name="lname" required><br><input type="number" placeholder="Mobile No" name="mobile" required id="mb" onchange="mbn()"><input type="text" placeholder="Semester" name="sem" required><input type="number" placeholder="Enrollment No" name="en" required onchange="enroll()" id="en"><br><input type="password" placeholder="Password" name="pass" required><input type="submit" value="Submit" name="submit">
            
            </div>
                </form>
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
            
            
            
            
            function enroll()   //called when enrollment number changes
            {
                var en=document.getElementById("en").value;
                var regx=/^\d{10}$/   //put input compulsory 7 character
                var res=regx.test(en)
                if(res==false)
                    {
                        alert("Enter valid Enrollment Number")
                        document.getElementById("en").value="";
                    }

            }

            
            function mbn()//called when mobile number changes
            {
                var en=document.getElementById("mb").value;
                 var regx=/^\d{10}$/
                var res=regx.test(en)
                if(res==false)
                    {
                    
                alert("Enter valid 10 Digit Number")
                document.getElementById("mb").value="";
                    }

            }
           
        </script>
    </body>
</html>