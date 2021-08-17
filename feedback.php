

<html>
<head>
    <title>feedback</title>
    <style>
    .img{
    
    background-size: cover;
    
    background-image:linear-gradient(#f093fb,#f5576c,#4facfe);
    
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
.name h1
        {
            color: white;
            margin-top: 50px;
            margin-left: 480px;
            font-size: 40px;
        }
        
.name input[type='text']
        {
            height: 35px;
            width: 630px;
            margin-top: 8px;
            margin-left: 300px;
            font-size: 17px;
        }
        .name input[type='text']:hover{
            
            border: 3px solid blueviolet;
        }
        #txt4
        {
            height: 150px;
            margin-top: 8px;
            width: 630px;
            margin-left: 300px;
            font-size: 17px;
        }
        #txt4:hover{
            border: 3px solid blueviolet;
        }
        .name input[type='submit']
        {
            height: 35px;
            width: 170px;
            font-size: 20px;
            margin-top: 10px;
            margin-left: 540px;
            background: #1c8adb;
            
            cursor: pointer;
            color: white;
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
             <input type="button" value="Back" onclick="window.location='studentpage.php'">
         <input type="button" value="Logout" onclick="window.location='index.html'">
            
        </div>
        <form action="feedback1.php" method="post">
        <div class="name">
            <h1>Feedback Form</h1>
            <input type="text" name="txt1" placeholder="Name" required><br>
            <input type="text" name="txt2" placeholder="Enrollment No" required><br>
            <input type="text" name="txt3" placeholder="Mobile No" required><br>
            <textarea id="txt4" name="txt4" placeholder="comment...." required></textarea><br>
            <input type="submit" value="Send">
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