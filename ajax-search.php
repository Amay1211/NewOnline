<?php
$name=$_REQUEST['name'];
include("connection.php");
$q="select * from student_reg where User_ID like '%$name%'";
$res1=mysqli_query($conn,$q);


while($res=mysqli_fetch_array($res1))
{
	echo "<table id='tb'' border='1px'>";
   echo "<tr class='tr'' border=30px>";
    echo "<th>User ID</th>";
    echo "<th>Student Name</th>";
    echo "<th>Sem/Year</th>";
    echo "<th>Enrollment_No</th>";

    echo "<th id='action'>Status</th>";
        echo "</tr>";
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
    echo "</table>";
}
?>