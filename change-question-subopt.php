<html>
    <head>
    
     <style>
        .img{
    
    background-size: cover;
    
    background-image:linear-gradient(#833ab4,#fcb045,#e45050);
    
    background-size: cover;
            border: 3px solid black;
            height: 590px;
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
.online
{
     background-color: rgba(0,0,0,0.6);
    height: 90px;
    margin-top: 0px;
    
}
.btn3 input[type="button"]
{
    height: 40px;
    width: 130px;
    background:  blue;
    color: white;
    border: none;
    font-size: 20px;
    margin-top: 2px;
    cursor: pointer;
    margin-left: 5px;
}
.btn3 input[type="button"]:hover
{
background: white;
    color: black;
}
.subject
{
    background-color: rgba(0,0,0,0.6);
    height: 140px;
    width: 740px;
    margin-top: 170px;
    margin-left: 250px;
    font-size: 30px;
    color: white;
    text-align: inherit;
    font-variant-position: normal;
}


#option
{
    height: 30px;
    width: 280px;
    margin-left: 50px;
    margin-top: 40px;
    font-size: 20px;
    cursor: pointer;
    background: transparent;
    color: white;
    text-align: center;
    background-color: black;
}
.subject input[type="button"]
{
  border: none;
    outline: none;
    height: 35px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    width: 170px;
    margin-left: 30px;
    margin-top: 20px;
}
.subject input[type="button"]:hover
{
  
    background: #39dc79;
    color: #fff;
    
}
         .subject h1
         {
             font-size: 33px;
             float: left;
             margin-left: 40px;
             margin-top: 35px;
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
             <input type="button" value="Back" onclick="window.location='queoperation.html'">
         <input type="button" value="Logout" onclick="window.location='adminlogin.html'">
            
        </div>
        <div class="subject">
            
        <h1>Select Subject:</h1><select id="option">
            <option value="Select">Select</option>
            <option value="DBMS">DBMS</option>
            <option value="SPOS">SPOS</option>
            <option value="CN">CN</option>
            </select><br>
            <input type="button"  value="submit" onclick="check()">
        </div>
            </div>
        <script>
            function check()
            {
                var c=document.getElementById("option").value;
                if(c=="DBMS" || c=="SPOS" || c=="CN")
                    {
                        if(c=="DBMS")
                        window.location="change-question-eti.php";
                        else if(c=="SPOS")
                            window.location="change-question-est.php";
                        else if(c=="CN")
                            window.location="change-question-management.php";
                    
                    }
                else 
                    {
                        alert("Select Subject");
                    }
                   
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