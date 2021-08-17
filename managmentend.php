<html>
<head>
    
    <style>
    
.img{
    
    background-image:linear-gradient(#f093fb,#f5576c,#4facfe);
    
    background-size: cover;
        border: 3px solid black;
    height: 520px;
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
                font-size: 19px;
                margin-top: 0px;
                margin-left: 120px;
                color: white;
            }
.l3
{
    background-color: rgba(0,0,0,0.6);
    width: 1000px;
    height: 430px;
    margin-top: 50px;
    margin-left: 150px;
        
}
 h1
{
    font-size: 20px;
    color: white;
    margin-left: 20px;
    font-family: sans-serif;
   
}

.l3 input[type="button"]
{
    border: none;
    outline: none;
    height: 55px;
    background: #1c8adb;
    color: #fff;
    font-size: 20px;
    border-radius: 20px;
    cursor: pointer;
    width: 200px;
    margin-left: 400px;
    margin-top: 100px;
}
.l3 input[type="button"]:hover
{
    cursor: pointer;
    background: #39dc79;
    color: white;
}
.btn3 input[type="button"]
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
.btn3 input[type="button"]:hover
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
 h2
{
    color: white;
    font-family: sans-serif;
    font-size: 30px;
    margin-left: 190px;
    margin-top: 10px;
}
        h5
        {
            color: yellow;
            font-size: 35px;
            font-family: sans-serif;
            margin-top: 60px;
            margin-left: 320px;
        }
        h6
        {
            color: white;
            font-size: 25px;
            font-family:sans-serif;
            margin-top: -44px;
            margin-left: 450px;
            text-decoration: underline;
        }
        input[type='submit']
        {
            height: 60px;
            width: 300px;
            border: 2px solid white;
            font-size: 20px;
            cursor: pointer;
            font-family: sans-serif;
            border-radius: 20px;
            margin-top: -20px;
            background-color: #1c8adb;
            color: white;
            margin-left: 470px;
            
        }
        input[type='submit']:hover
        {
            background-color: #39dc79;
            color: black;
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
              <h5>You successfully conducted the Exam.</h5>
            <h6>Please Click on End Exam...!</h6>
         <form method="post" action="managmentres.php" >
                    <input type="hidden" name="date" id="date">
                    <input type="hidden" name="time" id="time">
                    <input type="hidden" name="mark" id="mark">
                    <input type="submit" id="submit" value="End Exam">
            </form>
        <script>
           var mark=localStorage.getItem('mark');
            var date=localStorage.getItem('date');
            var time=localStorage.getItem('time');
            document.getElementById('mark').value=mark;
             document.getElementById('date').value=date;
             document.getElementById('time').value=time;
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
            
        
        
       </div>
       
    </body>
</html>