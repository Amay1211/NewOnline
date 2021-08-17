
<?php 
include('connection.php');
  $res1="select * from exam_detail";
    $query4=mysqli_query($conn,$res1);

if(isset($_REQUEST['submit']))
{
    $sub=$_REQUEST['opt'];
    $noque=$_REQUEST['no'];
    $h=$_REQUEST['hours'];
    $min=$_REQUEST['min'];
    
    
    $res1="select * from exam_detail where Subject='$sub'";
    $query=mysqli_query($conn,$res1);
    $rowcount=mysqli_num_rows($query);
    if($rowcount==true)
    {
        echo "<script>alert('Subject data is already set.Please delete it');window.location='examdetail.php';</script>";
    }
    else
    {
    
    $insert="insert into exam_detail(Subject,No_of_Question,Hours,Min) values('$sub','$noque','$h','$min')";
    $res=mysqli_query($conn,$insert);
    if($res)
    {
        echo "<script>alert('Data is set');window.location='adminpage.html'</script>";
    }
    else
    {
         echo "<script>alert('Something Wrong please try again');window.location='examdetail.php'</script>";
    }
    
    
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
    
    background-size: cover;
        border: 3px solid black;
        height: auto;
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
     .td1,.td3,.td6, .td7
{
    width: 250px;
    color: black;
    font-size: 20px;
    font-family: sans-serif;
    height: 40px;
    text-align: center;
    background: white;
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
         margin-right: 145px;
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
     .part3
     {
         height: 65%;
         width: 70%;
         margin-top: 4%;
         margin-left: 15%;
        background-color: rgba(0,0,0,0.4);
     }
     .part3 h1
     {
         color: white;
         font-size: 2.4vw;
         margin-left: 15%;
     }
     .part3 #opt
     {
         margin-left: 40%;
         width: 40%;
         height: 8%;
         margin-top: -6%;
         font-size: 1.5vw;
        
         cursor: pointer;
         
         
         
     }
     .part3 #no
     {
         margin-left: 40%;
         width: 40%;
         height: 8%;
         margin-top: -6%;
         font-size: 1.5vw;
    }
     
     input[type='submit']
     {
         height: 15%;
         width: 35%;
         margin-top: 2%;
         margin-left: 30%;
         font-size: 1.7vw;
         background-color:#1c8adb ;
    color: white;
    cursor: pointer;
    border: none;
     }
     .time
     {
         height: 20%;
         width: 50%;
        
         margin-left: 39%;
         margin-top: -6%;
     }
     #tm
     {
         width: 15%;
         height: 50%;
         margin-left: 2%;
     }
     #lb
     {
         color: white;
         margin-left: 7%;
     }
     input[type='submit']:hover{background-color: white;color: black;}
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
        <div class="l3">
          
            <input type="button" value="Back" onclick="window.location='adminpage.html'">
             <input type="button"   value="Logout" onclick="window.location='adminlogin.html'">
             
           
            
         
            
        </div>
            <div class="detail">
             <table id="tb" border="1px">`
                <tr class="tr" border=30px>
                <th>Subject Name</th>
                    <th>No Of Question</th>
                    <th>Time</th>
                    

                    <th id="action">Action</th>
                    
                </tr>
            <?php 
            while($get=mysqli_fetch_array($query4))
            {
                echo '<tr class="tr">';
                echo '<td class="td1">'.$get['Subject'].'</td>';
               
               echo '<td class="td3">'.$get['No_of_Question'].'</td>';
               echo '<td class="td6">'.$get['Hours'].' : '.$get['Min'].'</td>';
               echo '<td class="td7"><a href="delete-examdetail.php?sub='.$get['Subject'].'">Delete</td>'; 
                echo '</tr>';
            }
            ?>
      
            
            
           </table>
            </div>
            <form action="" method="post">
             <div class="part3"><br><br>
         <h1>Select Subject:</h1><select id="opt" name="opt">
            <option value="Select">Select</option>
            <option value="DBMS">DBMS</option>
            <option value="SPOS">SPOS</option>
            <option value="CN">CN</option>
            </select>
                 <h1>No of Question:</h1><input type="number" name="no" id="no" required>
                 <h1>Time:</h1>
                 <div class="time">
                 <input type="number" name="hours" id="tm" placeholder="00" onchange="hourmin()" required><input type="number" name="min" id="tm" placeholder="00" onchange="hourmin()" required><br>
                     <label id="lb">Hours</label><label id="lb">Min</label>
                     </div>
                 <input type="submit" value="Set" name="submit">
                     
                 </div>
             </form>
            </div>
       
        <script>
            window.onload=function()
            {
                document.addEventListener("nocontextmenu",function(e){e.preventDefault();},false);
            }
               function preback()
            {
                window.history.forward();
            }
          setTimeout("preback()",0);
            window.onunload=function(){null};
            
            
            
              function hourmin()
            {
                var en=document.getElementById("tm").value;
                 var regx=/^\d{2}$/
                var res=regx.test(en)
                if(res==false)
                    {
                    
                alert("Enter 2 Digit hours and minutes")
                document.getElementById("tm").value="";
                    }

            }
           
        </script>
    </body>
</html>