<?php 
include("connection.php");
$result=mysqli_query($conn,"select * from management_result");

?>
<html>
    <head>
    
     <style>
        .img{
    
    background-size: cover;
    
    background-image:linear-gradient(#667eea,#764ba2);
    
    background-size: cover;
            border: 3px solid black;
            height: auto;
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
    border: none;
    color: white;
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

.td5
{
    height: 50px;
    width: 50px;
    font-size: 23px;
    font-family: sans-serif;
    text-align: center;
    color: black;
      border-collapse: collapse;
background: white;
    border: 1px solid black;
}
.td1
{
    height: 50px;
    width: 340px;
    font-size: 23px;
    font-family: sans-serif;
    text-align: center;
    color: black;
background: white;
      border-collapse: collapse;
    border: 1px solid black;
}
.td2
{
    height: 50px;
    width: 160px;
    font-size: 23px;
    font-family: sans-serif;
    text-align: center;
    color: black;
      border-collapse: collapse;
background: white;
    border: 1px solid black;
}
.td3
{
    height: 50px;
    width: 160px;
    font-size: 23px;
    font-family: sans-serif;
    text-align: center;
    color: black;
background: white;
      border-collapse: collapse;
    border: 1px solid black;
}
.td4
{
    height: 50px;
    width: 160px;
    font-family: sans-serif;
    text-align: center;
    font-size: 23px;
    color: black;
background: white;
      border-collapse: collapse;
}
.tr
{
     height: 50px;
    
    font-family: sans-serif;
    text-align: center;
    font-size: 24px;
    background: #009679;
    color: white;
      border-collapse: collapse;
    border: 1px solid black;
}
.tb
{
    margin-left: 170px;
    margin-top: 30px;
    border-collapse: collapse;
    border: 1px solid black;
}
.print #btn9
{
    height: 43px;
    width: 155px;
    border-radius: 10px;
    border-collapse: collapse;
    background:  #1c8adb;
    font-size: 20px;
    color: white;
    margin-top: 20px;
    margin-left: 550px;
    cursor: pointer;
    margin-bottom: 10px;
}
.print #btn9:hover
{
    background-color: #009679;
}
.list h2
{
    font-size: 37px;
    margin-left: 340px;
    text-underline-position: below;
    font-family:sans-serif;
    color: white;
}
         .td8
{
    width: 90px;
    color: black;
    font-size: 20px;
    font-family: sans-serif;
    height: 40px;
    text-align: center;
    background: white;
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
             <input type="button" value="Back" onclick="window.location='adminres.html'">
         <input type="button" value="Logout" onclick="window.location='adminlogin.html'">
            
        </div>
        <style>
            @media Print{
                body *{
                    visibility: hidden;
                    
                }
                .list, .list * {
                    visibility: visible;
                    color: black;
                }
                .list h2
                {
                    color: black;
                       margin-left: 290px;
                }
                 .tb{
                    margin-left: 60px;
                }
                 .td8
                {
                    visibility: hidden;
                }
                .list a
                {
                    visibility: hidden;
                }
                #action
                {
                    visibility: hidden;
                }
                .tr
                {
                    background: white;
                    color: black;
                }
                
            }
            .list h1
            {
                color: white;
                text-underline-position: below;
                text-decoration: underline;
                width: 500px;
                height: 44px;
                font-family: sans-serif;
                font-size: 30px;
                background-color: orangered;
                margin-left: 20px;
                text-align: center;
                border-radius: 10px;
            }
            
        </style>
       
        <div class="list"><br>
            
        <h2>------------------Result-------------------</h2>
        
        <h1>Subject Name:&nbsp;&nbsp;&nbsp;CN</h1>
            <table class="tb" border="1px">
            <tr class="tr">
                <th>User ID</th>
                <th>Student Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Marks</th>
                <th id="action">Action</th>
                
                </tr>
                <?php 
            while($res=mysqli_fetch_array($result))
            {
                echo '<tr class="tr">';
                 echo '<td class="td5">'.$res['User_ID'].'</td>';
                 echo '<td class="td1">'.$res['First_Name'].' '.$res['Middle_Name'].' '.$res['Last_Name'].'</td>';
                 echo '<td class="td2">'.$res['Date'].'</td>';
                 echo '<td class="td3">'.$res['Time'].'</td>';
                 echo '<td class="td4">'.$res['Marks'].'</td>';
                echo '<td class="td8"><a href="delete-management-result.php?User_ID='.$res['User_ID'].'">Delete</td>';
                echo '</tr>';
            }
            ?>
      
            
                
            </table>
        </div>
        <div class="print">
         <button onclick="window.print();" id="btn9">
        Print
        </button>
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