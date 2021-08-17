
<?php 
include("connection.php");
$result=mysqli_query($conn,"select * from student_reg");


?>
<html>
    <head>
    <style>
       .img{
    
    background-size: cover;
    
     background-image:linear-gradient(#833ab4,#fcb045,#e45050   );
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
.list h1
{
    color:white;
    font-family: sans-serif;
    margin-top: 65px;
    margin-left: 560px;
    text-decoration: underline;
   
    width: 830px;
    border-radius: 15px;
    height: 40px;
}
.btn3 input[type="button"]
{
   
    height: 35px;
    width: 124px;
    font-size: 19px;
    margin-left: 3px;
    float: left;
    background-color:blue;
    color: white;
    cursor: pointer;
    margin-top: 2px;
    border: none;
}
.btn3 input[type="button"]:hover
{
background: white;
    color: black;
}
#tb
{
    border: 1px solid black;
    
    margin-left: 10px;
    border-collapse: collapse;
    box-shadow: 0 0 20px solid black;
    border-radius: 10px;
    margin-right: 10px;
}
.tr
{
    height: 50px;
    background: #009679;
    color: white;
    font-family: sans-serif;
    border: 1px solid white;
    font-family: sans-serif;
    font-size: 18px;
    text-align: center;
    border: 1px solid black;

}
.td1
{
    width: 90px;
    color: black;
    font-size: 20px;
    font-family: sans-serif;
    height: 40px;
    text-align: center;
    background: white;
}
.td2
{
    width: 460px;
    color: white;
    font-size: 20px;
    font-family: sans-serif;
    color: black;
    text-align: center;
background: white;
}
.td3
{
    width: 250px;
    color: white;
    font-size: 19px;
    text-align: center;
    font-family: sans-serif;
    color: black;
background: white;
}
.td4
{
    width: 150px;
    text-align: center;
    color: white;
    font-size: 19px;
    font-family: sans-serif;
    color: black;
background: #ffffff;
}
.td5
{
    width: 300px;
    text-align: center;
    color: white;
    font-size: 19px;
    font-family: sans-serif;
    color: black;
background: white;
}
.td6
{
    width: 240px;
    text-align: center;
    color: white;
    font-size: 19px;
    font-family: sans-serif;
    color: black;
background: white;
  
}
.td7
{
    width: 250px;
    text-align: center;
    color: white;
    font-size: 19px;
    font-family: sans-serif;
    color: black;
background: white;
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
.td8
{
    width: 140px;
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
            <input type="button" value="Back" onclick="window.location='adminpage.html'">
            <input type="button" value="Logout" onclick="window.location='adminlogin.html'">
            
        </div>
        <style>
            @media Print{
                body *{
                    visibility: hidden;
                    
                }
                .list, .list * {
                    visibility: visible;
                    
                }
                .list h1
                {
                    color: black;
                    margin-left: 420px;
                }
                .tr
                {
                    background: white;
                    color: black;
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
            }
            
        </style>
       
        <div class="list">
        <h1>Student List</h1>
            <table id="tb" border="1px">`
                <tr class="tr" border=30px>
                    <th>User ID</th>
                    <th>Student Name</th>
                    <th>Mobile No</th>
                    <th>Semester</th>
                    <th>Enrollment_No</th>
                    <th id="action">Action</th>
                    
                </tr>
            <?php 
            while($res=mysqli_fetch_array($result))//The mysqli_fetch_array() function 
                                                    //is used to fetch rows from the database and store them as an array.
            {       //return array with index are column names
                echo '<tr class="tr">';
                echo '<td class="td1">'.$res['User_ID'].'</td>';
                echo '<td class="td2">'.$res['First_Name'].' '.$res['Middle_Name'].' '.$res['Last_Name'].'</td>';
                echo '<td class="td3">'.$res['Mobile_No'].'</td>';
                echo '<td class="td6">'.$res['Semester'].'</td>';
                echo '<td class="td6">'.$res['Enrollment_No'].'</td>';
                
                echo '<td class="td8"><a href="delete-student-list.php?User_ID='.$res['User_ID'].'">Delete</td>';
                echo '</tr>';
            }
            ?>
            
            </table>
        </div>
        <div class="print">
         <button onclick="window.print();" id="btn9">  <!-- The print() method prints the contents of the current window.
            The print() method opens the Print Dialog Box, which lets the user to select preferred printing options.-->
            Print
        </button>
            </div>
            </div>
        <script>
            window.onload=function()
            {
                document.addEventListener("noncontextmenu",function(e){e.preventDefault();},false);
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