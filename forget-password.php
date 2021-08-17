<!DOCTYPE html>

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
        .row3
        {
            height: 230px;
            width: 480px;
            background-color: white;
            margin-left: 100px;
            margin-top: 100px;
            float: left;
        }
        .row3 input[type="text"]
        {
            height: 40px;
            margin-left: 25px;
            margin-top: 8px;
            width: 425px;
            font-size: 20px;
        }
        .row3 #btn1
        {
            height: 40px;
            margin-top: 15px;
            width: 300px;
            margin-left: 90px;
            font-size: 16px;
            background: #1c8adb;
            color: white;
            cursor: pointer;
            border: none;
        }
        .h2 h1
        {
            color: black;
            font-size: 23px;
            font-family: sans-serif;
            font-style: italic;
            text-decoration: underline;
            margin-top: 20px;
            margin-left: 170px;
        }
    .row4
        {
            height: 260px;
            width: 480px;
            background-color: white;
            margin-left: 100px;
            margin-top: 100px;
            float: left;
        }
        .row4 input[type="text"]
        {
            height: 40px;
            margin-left: 25px;
            margin-top: 8px;
            width: 425px;
            font-size: 20px;
        }
        .row4 #btn1
        {
            height: 40px;
            margin-top: 15px;
            width: 300px;
            margin-left: 90px;
            font-size: 16px;
            background: #1c8adb;
            color: white;
            cursor: pointer;
            border: none;
        }
        .h1 h1
        {
            color: black;
            font-size: 23px;
            font-family: sans-serif;
            font-style: italic;
            text-decoration: underline;
            margin-top: 20px;
            margin-left: 96px;
        }
        .btn input[type='button']
        {
           background: blue;
            height: 50px;
            width: 200px;
            color: white;
            margin-left: 10px;
            font-size: 20px;
            margin-top: -10px;
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
<div class="container">

<hr>
	<div class="row">
	<div class="col-md-9 col-md-offset-2">
		
	</div>
    <div class="l5">
        <div class="btn">
        <input type="button" value="Back" onclick="window.location='index.html'">
            </div>
        <div class="row4">
        <form role="form" method="post" enctype="multipart/form-data" action="sendotp.php">
            <div class="row">
                <div class="col-sm-9 form-group">
                    <div class="h1">
                    <h1>Mobile Number Verification</h1>
                        </div>
                    <input type="text" placeholder="Enter Enrollment No" name="enroll" onchange="enroll()" id="enroll" required>
                    <input type="hidden" class="form-control"  value="" maxlength="10" placeholder="Enter your name" required="">
                </div>
            </div>
            <div class="row">
               <div class="col-sm-9 form-group">
                    
                    
                    <input type="text" class="form-control" id="mobile" name="mobile" value="" maxlength="10" placeholder="Enter valid mobile number" required="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 form-group">
                    <button type="submit" name="sendopt" class="btn btn-lg btn-success btn-block" id="btn1">Send OTP</button>
                </div>
            </div>
            </form>
            </div>
         <div class="row3">
             <div class="h2">
                    <h1>Verify OTP</h1>
                    </div>
            <form method="POST" action="sendotp.php">
            <div class="row1">
                <div class="col-sm-9 form-group">
                    
                    <input type="text" class="form-control" id="otp" name="otp" placeholder="Enter OTP" maxlength="5" required="">
                </div>
            </div>
             <div class="row1">
                <div class="col-sm-9 form-group">
                    <button type="submit" name="verifyotp" class="btn btn-lg btn-info btn-block" id="btn1">Verify</button>
                </div>
            </div>
        </form>
            </div>
        
	</div>
</div>
    </div>
    </div>
        <script>
            function enroll()
            {
                var e=document.getElementById('enroll').value;
                if(e=='')
                    alert("Enter Enrollment No");
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