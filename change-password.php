
<html>
<head>
	
	<link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
    .img{
    
    background-size: cover;
    
    background-image:linear-gradient(#f093fb,#f5576c,#4facfe);
    
    background-size: cover;
        border: 3px solid black;
        height: 597px;
}
        .logo img
{  
    float: left;
    margin-top: 0px;
    height: 90px;
    margin-left: 20px;
    
}
        .online
{
     background-color: rgba(0,0,0,0.6);
    height: 90px;
    width: 1244px;
    margin-top: 0px;
    
}
.l2
{
    font-size: 45px;
    text-align: bottom;
    color: white;
    float: right;
    margin-right: 250px;
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
        .change
        {
            background: white;
            height: 300px;
            width: 480px;
            margin-top: 70px;
            margin-left: 350px;
        }
        .h4 h1
        {
            font-size: 30px;
            margin-top: 30px;
            margin-left: 120px;
            font-style: italic;
            text-decoration: underline;
            
        }
        .change input[type='password']
        {
            height: 50px;
            width: 454px;
            margin-top: 10px;
            font-size: 20px;
            margin-left: 10px;
        }
        .change input[type='submit']
        {
            height: 40px;
            margin-top: 20px;
            width: 300px;
            margin-left: 80px;
            color: white;
            font-size: 20px;
            background: #1c8adb;
            border: none;
            cursor: pointer;
        }
        
    </style>
</head>
<body>
    <div class="img">
     <div class="online">
            
     <div class="logo">
        
      <img src="img/logo.png">
        <div class="l2">
        Government Polytechnic Jalgaon
            <h2>(An Institute of Government Of Maharashtra)</h2>
        </div>
        
    </div>
         
            
            </div> 
        <div class="change">
             <div class="h4">
             <h1>Change Password</h1>
             </div>
         <form action="change-password2.php" method="post">
            
             <input type="password" name="txt1" id="pass" placeholder="Enter New Password" onchange="t()"><br>
             <input type="password" name="txt2" id="rpass" placeholder="Re-entered Password" onchange="repas()"><br>
             <input type="submit" value="Change Password" id="btn">
             </form>
         </div>
         

	
    </div>
        <script>
            function t()
            {
                var p=document.getElementById("pass").value;
                
                if(p.length<8)
                    {
                    
                alert("Password must contain atleast 8 characters")
                document.getElementById("pass").value="";
                    }

            }
            function repas()
            {
                 var p=document.getElementById("pass").value;
                 var rp=document.getElementById("rpass").value;
                if(rp!=p)
                    alert("confirm Password Do not Match");
                 document.getElementById("rpass").value="";
                
            }
            
            
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