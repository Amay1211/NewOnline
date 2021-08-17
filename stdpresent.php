
<?php 
include("connection.php");
$result=mysqli_query($conn,"select * from student_reg");


?>
<html>
    <head>
    <style>
       .img{
    
    background-size: cover;
    
     background-image:linear-gradient(#833ab4,#fcb045,#e45050);
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
    margin-left: 530px;
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
    
    margin-left: 40px;
    border-collapse: collapse;
    box-shadow: 0 0 20px solid black;
    border-radius: 10px;
    margin-top: 20px;
    
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
    width: 480px;
    color: white;
    font-size: 20px;
    font-family: sans-serif;
    color: black;
    text-align: center;
background: white;
}
.td3
{
    width: 150px;
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
    width: 150px;
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
    margin-left: 450px;
    cursor: pointer;
}
.print #btn9:hover
{
    background-color: #009679;
}
        input[type='submit']
        {
            float: right;
            
    height: 43px;
    width: 155px;
    border-radius: 10px;
    border-collapse: collapse;
    background:  #1c8adb;
    font-size: 20px;
    color: white;
    
    cursor: pointer;
            margin-top: -40px;
            margin-right: 400px;
        }
        .td8 
{
    width: 150px;
    
    font-size: 20px;
    font-family: sans-serif;
    height: 40px;
    text-align: center;
    background: white;
}
.td8 a
{
    width: 150px;
    color: blue;
    font-size: 20px;
    font-family: sans-serif;
    height: 40px;
    text-align: center;
    background: white;
}
        .td8 a:hover
        {
            color: red;
        }
        .td12
{
    width: 150px;
    color: red;
    font-size: 20px;
    font-family: sans-serif;
    height: 40px;
    text-align: center;
    background: white;
}
        .list #l1
        {
            color: white;
            font-size: 30px;
            margin-left: 40px;
            margin-bottom: 30px;
            
        }
        .list #name
        {
            height: 35px;
            width: 250px;
            border: none;
            margin-left: 10px;
            margin-top: -1px;
            font-size: 20px;
            text-align: center;
        }
        #search
        {
            height: 35px;
            width: 120px;
            margin-left: 10px;
            margin-top: -5px;
            color: white;
            background-color:  darkviolet;
            border: 1px solid white;
            font-size: 17px;
            cursor: pointer;
            
        }
        #search:hover
        {
            background-color: #009679;
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
                    margin-left: 400px;
                     margin-top: -3px;
                }
                .tr
                {
                    background: white;
                    color: black;
                }
                
                .list a
                {
                    visibility: hidden;
                }
                .td8  a
                {
                    visibility: visible;
                    color: black;
                    text-decoration: none;
                }
                .td12 a
                {
                    visibility: visible;
                    color: black;
                }
                #l1,#name,#search
                {
                    visibility: hidden;
                }
                
            }
            
        </style>
       
        <div class="list">
        <h1> Attendance List </h1>
            <label id="l1">Search:</label><input type="text" placeholder="Enter User ID" id="name" name="name" required><input type="button" value="Search" onclick="load()" id="search">
            <div id="result">
		
		</div>
            <table id="tb" border="1px">
                <tr class="tr" border=30px>
                <th>User ID</th>
                    <th>Student Name</th>
                    <th>Sem/Year</th>
                    <th>Enrollment_No</th>

                    <th id="action">Status</th>
                    
                </tr>
            <?php 
            while($res=mysqli_fetch_array($result))
            {
                echo '<tr class="tr">';
                echo '<td class="td1">'.$res['User_ID'].'</td>';
                echo '<td class="td2">'.$res['First_Name'].' '.$res['Middle_Name'].' '.$res['Last_Name'].'</td>';
                echo '<td class="td3">'.$res['Semester'].'</td>';
               
                echo '<td class="td6">'.$res['Enrollment_No'].'</td>';
                if($res['Student_status']=="Present")
                {
                    echo '<td class="td12">Present</td>';
                echo '</tr>';
                }
                else{
                    echo '<td class="td8"><a href="stdpresentupdate.php?User_ID='.$res['User_ID'].'">Absent</td>';
                    
                echo '</tr>';
                }
                
            }
            ?>
                
      
            
            
           </table>
        </div>
        <div class="print">
         <button onclick="window.print();" id="btn9">
    Print
        </button>
            <form action="stdpresentupdate.php"  method="post">
            <input type="submit" value="Reset" name="reset">
                </form>
            </div>
            </div>
        <script>
            function load()
			{
				var name=document.getElementById('name').value;
                if(name=="")
                    {
                        alert("Fill the field");
                        
                    }
                else
                    {
				var xhttp = new XMLHttpRequest();
				  xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					 document.getElementById("result").innerHTML = this.responseText;
					}
				  };
				  xhttp.open("GET", "ajax-search.php?name="+name, true);
				  xhttp.send();
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