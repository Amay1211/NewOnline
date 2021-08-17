<?php 
include("connection.php");
$questionid=$_REQUEST['Question_ID'];
$result=mysqli_query($conn,"select * from managmentquestion where Question_ID='$questionid'");

$res=mysqli_fetch_array($result);
?>
<html>
<head>
    <title>change-management-question</title>
    <style>
    .img{
    
    background-size: cover;
    
    background-image:linear-gradient(#667eea,#764ba2);
    
    background-size: cover;
            border: 3px solid black;
            height: 670px;
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
.l2 h2
            {
                font-size: 20px;
                margin-top: 0px;
                margin-left: 120px;
                color: white;
            }
.btn3 input[type="button"]
{
    height: 40px;
    width: 130px;
    background:  blue;
    color: white;
    font-size: 20px;
    margin-top: 2px;
    cursor: pointer;
    border: none;
    margin-left: 5px;
}
.btn3 input[type="button"]:hover
{
background: white;
    color: black;
}
.question
{
    background: rgba(0,0,0,0.6);
    height: 460px;
    width: 1170px;
    margin-top: 40px;
    margin-left: 40px;
}
#txt1
{
    width: 150px;
    height: 100px;
    margin-top: 10px;
    margin-left: 14px;
    background: transparent;
    border: 1px solid white;
       font-size: 30px;
    color: white;
     font-family: sans-serif;
}
#txt
{
    width: 970px;
    height: 100px;
    margin-top: 10px;
    margin-left: 14px;
    background: transparent;
    border: 1px solid white;
    font-size: 30px;
     color: white;
    font-family: sans-serif;
}
.opt
{
    height: 260px;
    width: 1130px;
   
    margin-left: 14px;
    background: transparent;
    border: 1px solid white;
     font-family: sans-serif;
}
.opt #txt2
{
    height: 60px;
    font-size: 20px;
    
    margin-top: 13px;
    width: 450px;
    margin-left: 14px;
    border-radius: 25px;
     background: transparent;
    border: 1px solid white;
    text-align: center;
     font-family: sans-serif;
    color: white;
    font-size: 25px;
    
    
    
}
#txt8
{
    height: 60px;
    width: 75px;
    font-size: 27px;
    text-align: center;
    border-radius: 50px;
    color: white;
   
    background: transparent;
    border: 1px solid white;
     font-family: sans-serif;
}
.btn4 input[type="submit"]
{
    height: 45px;
    width: 200px;
    float: right;
    margin-right: 20px;
    margin-top: 10px;
    font-size: 23px;
    border-radius: 20px;
    background: #1c8adb;
    border: 1px solid #1c8adb;
    cursor: pointer;
    color: white;
}
.btn4 input[type="button"]:hover
{
background: #39dc79;
    border: 1px solid #39dc79;
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
        <div class="btn3">
             <input type="button" value="Back" onclick="window.location='change-question-management.php'">
         <input type="button" value="Logout" onclick="window.location='adminlogin.html'">
            
        </div>
        <form action="change-management1-question.php" method="post">
        <div class="question">
        <div class="que">
            <textarea id="txt1" name="txt1" value="Que " disabled='disabled'>Que</textarea>
            <textarea id="txt" required name="txt1"><?php echo $res['Question']?></textarea>
            <input type="hidden" value="<?php echo $questionid?>" name="hd">
            </div><br>
        <div class="opt">
           
            <textarea id="txt8" value="1" disabled='disabled'>1</textarea><textarea id="txt2" required name="txt2"><?php echo $res['OptionA']?></textarea>
           <textarea id="txt8" value="1" disabled='disabled'>2</textarea><textarea id="txt2" required name="txt3"><?php echo $res['OptionB']?></textarea><br>
            <textarea id="txt8" value="1" disabled='disabled'>3</textarea><textarea id="txt2" required name="txt4"><?php echo $res['OptionC']?></textarea>
            <textarea id="txt8" value="1" disabled='disabled'>4</textarea><textarea id="txt2" required name="txt5"><?php echo $res['OptionD']?></textarea><br>
            <input type="text" id="txt8" value="Ans" disabled='disabled'><input type="text" id="txt2" name="txt6" required value="<?php echo $res['Answer']?>">
            
                
            
            </div>
            <div class="btn4">
            <input type="submit" value="Save Changes">
                </div>
        
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
        </script>
    </body>
</html>