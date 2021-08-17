<?php 
include("connection.php");
$query="select * from exam_detail where Subject='CN'";
$r=mysqli_query($conn,$query);
$re=mysqli_fetch_array($r);
$noque=$re['No_of_Question'];
$hours=$re['Hours'];
$min=$re['Min'];




$result=mysqli_query($conn,"SELECT * FROM `managmentquestion` ORDER BY RAND () LIMIT $noque ");
include("front1.php");
$user=$_SESSION['un'];
$result1=mysqli_query($conn,"select * from student_reg where Enrollment_No='$user'");
 $res1=mysqli_fetch_array($result1);


?>
<html>
	<head>
		<title>managmentquestion</title>
		
		
        <style>
        .img{
    
    background-size: cover;
    
    background-image:linear-gradient(#f093fb,#f5576c,#4facfe);
    
    background-size: cover;
        border: 3px solid black;
        height: auto;
}
            

h1 {
    text-align: center;
}


#container 
{
   background-color:  rgba(0,0,0,0.6);
    height: auto;
    margin-top: 10px;
    margin-left: 7px;
}
#r
{
    height: 20px;
    width: 20px;
}
            
ul 
{
    list-style-type: none;
    padding: 0;
    margin: 0;
    width: 1250px;
}
ul li
{
    border: 1px solid white;
    width: 595px;
    margin-top: 5px;
    margin-left: 5px;
    height: 80px;
    padding: 5px;
    display: inline-block; 
    font-size: 23px;
    color: white;
}
            .bt3
            {
                background-color:transparent;
                height: 100px;
                width: 1210px;
            }
.bt3 #next
{
    
    margin-top: 24px;
    float: right;
    
    height: 45px;
    width: 300px;
    border-radius: 13px;
    border: none;
    margin-right:300px;
    font-size: 23px;
     background-color: #1c8adb;
    color: #fff;
    cursor: pointer;
}
.bt2 #prev
{
   
    margin-top: 25px;
    float: left;
    
    height: 45px;
    width: 300px;
    border-radius: 13px;
    border: none;
    margin-left:250px;
    font-size: 23px;
     background-color: #1c8adb;
    color: #fff;
    cursor: pointer;
}
.bt2 #prev:hover
{
    background: #39dc79;
    color: black;
}
.bt3 #next:hover
{
    background: #39dc79;
    color: black;
}
.a a
{
    

    color: white;
    margin-right: 100px;
    font-size: 20px;
    float: right;
 
}
.a a:hover
{
    color: blue;
}

#start 
{
    display:none;
    width: 100px;
}
input[type="radio"]{
    cursor: pointer;
}

.date
{
     background-color:  rgba(0,0,0,0.6);
    height: 60px;
    width:250px;
    margin-top: 30px;
    
    margin-left: 970px;
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
.que
{
    height: 100px;
    width: 120px;
    border: 1px solid white;
    margin-top: 5px;
    margin-left: 5px;
    float: left;
    font-family: sans-serif;
    font-size: 20px;
    color: white;
}
.que h1
{
    font-family: sans-serif;
    font-size: 30px;
    color: white;
    margin-top: 30px;
}
.que2
{
    height: 100px;
    width: 1090px;
    float: right;
    border: 1px solid white;
    margin-top: 5px;
    margin-right: 5px;
    font-family: sans-serif;
    font-size: 23px;
    color: white;
}
            #txt9
            {
                background-color: transparent;
                margin-left: 5px;
                margin-top: 5px;
                height: 102px;
                width: 1090px;
                font-size: 25px;
                color: white;
                font-family: sans-serif;
            }
            
.a input[type="button"]
            {
    margin-top: 24px;
    float: right;
    
    height: 45px;
    width: 300px;
    border-radius: 13px;
    border: none;
    margin-right:300px;
    font-size: 23px;
     background-color: #1c8adb;
    color: #fff;
    cursor: pointer;
            }
            .a input[type="submit"]:hover
            {
                 background: #39dc79;
                color: black;
            }
            .bt4 a{
                float: left;
                color: white;
                font-size: 20px;
                margin-left: 1000px;
            }
            .bt4 a:hover
            {
                color: blue;
            }
            #txt12
            {
                background-color: transparent;
                width: 1085px;
                height: 100px;
                margin:7px;
                color: white;
                font-size: 20px;
                border: solid white;
                
            }
            .detail
            {
                height: 25px;
                background-color: red;
                margin-top: -15px;
            }
            .detail h1
            {
                color: white;
                font-size: 20px;
                font-family: sans-serif;
                float: left;
                margin-left: 5px;
                margin-top: -2px;
            }
            .detail h2
            {
                color: white;
                font-size: 20px;
                font-family: sans-serif;
                margin-left: 50px;
                margin-top: 23px;
                
                
            }
             .detail h3
            {
                float: right;
                margin-top: -42px;
                color: white;
                margin-right: 53px;
                font-size: 20px;
                font-family: sans-serif;
                
            }
           #end
            {
                float: right;
                margin-right: -490px;
                margin-top: 60px;
                background-color: transparent;
                color: white;
                border: none;
                font-size: 20px;
                cursor: pointer;
                
            }
           #end:hover
            {
                color: red;
            }
           
           
        </style>
	</head>
	<body onload="ctimer()">
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
            <div class="detail">
               <h1>Name:&nbsp;<?php echo $res1['First_Name']." ".$res1['Middle_Name']." ".$res1['Last_Name']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1> 
                <h2>Enrollment No:&nbsp;<?php echo $res1['Enrollment_No']?></h2>
                <h3>Subject:&nbsp;Computer Networks</h3>
            
            </div>
        <div class="date">
         <span id="clock" style="color: white; font-size: 47px;margin-left: 68px;"> <?php echo $hours.":".$min.":00" ?></span>
         
         </div>
       
		<div id="container">
           
   			
  			<div id="quiz"></div>
            <div class="btn1">
                <div class="bt2">
                <input type="button" value="Prev" id="prev">
                </div>
                
                <div class="bt3">
    		   <input type="button" value="Next" id="next">
                   
                    <input type="hidden" name="date" id="date">
                    <input type="hidden" name="time" id="time">
                    <input type="hidden" name="mark" id="mark">
                    <input type="hidden" name="un" id="un">
                     
                    
                    
                </div>
               
                
                </div>
    		
    	</div>
            </div>
        <script src="jquery-3.4.0.min.js"></script>
		<script>
        (function() 
 {
            ctimer();
            
  var allQuestions = [
      <?php 
      while($res=mysqli_fetch_array($result))
      {
          
      ?>
      {
    
    question: "<?php echo $res['Question']?>",
    options: ["<?php echo $res['OptionA']?>", "<?php echo $res['OptionB']?>", "<?php echo $res['OptionC']?>", "<?php echo $res['OptionD']?>"],
    answer:parseInt('<?php echo $res['Answer']; ?>')
      },
  <?php
      }
      ?>
  ];
  
  var quesCounter = 0;
  var selectOptions = [];
  var quizSpace = $('#quiz');
    
  nextQuestion();
    
  $('#next').click(function () 
    {
        chooseOption();
        
        
        
          quesCounter++;
          nextQuestion();
        
    });
  
  $('#prev').click(function () 
    {
        chooseOption();
        quesCounter--;
        nextQuestion();
    });
  
  function createElement(index) 
    {
        var element = $('<div>',{id: 'question'});
        var header = $('<div class="que3"><div class="que"><h1>Que: ' + (index + 1) + ' </h1></div>');
        element.append(header);

        var question = $('<textarea id="txt12"></textarea></div>').append(allQuestions[index].question);
        element.append(question);

        var radio = radioButtons(index);
        element.append(radio);

        return element;
    }
  
  function radioButtons(index) 
    {
        var radioItems = $('<ul>');
        var item;
        var input = '';
        for (var i = 0; i < allQuestions[index].options.length; i++) {
          item = $('<li>');
          input = '<input type="radio" id="r" name="answer" value=' + i + ' />';
          input += allQuestions[index].options[i];
          item.append(input);
          radioItems.append(item);
        }
        return radioItems;
  }
  
  function chooseOption() 
    {
        selectOptions[quesCounter] = +$('input[name="answer"]:checked').val();
    }
   
  function nextQuestion() 
    {
        quizSpace.fadeIn(function() 
            {
              $('#question').remove();
              if(quesCounter < allQuestions.length)
                {
                    var nextQuestion = createElement(quesCounter);
                    quizSpace.append(nextQuestion).fadeIn();
                    if (!(isNaN(selectOptions[quesCounter]))) 
                    {
                      $('input[value='+selectOptions[quesCounter]+']').prop('checked', true);
                    }
                    if(quesCounter === 1)
                    {
                      $('#prev').show();
                        
                        
                       
                    } 
                    else if(quesCounter === 0)
                    {
                      $('#prev').hide();
                        
                      $('#next').show();
                        
                    }
                   else if(quesCounter === <?php echo (int)$noque-1;?>)
                       {
                            $('#next').show();
                           document.getElementById('next').value='Submit';
                       }
                    else if(quesCounter >= <?php echo (int)$noque-2;?>)
                       {
                            $('#next').show();
                           document.getElementById('next').value='Next';
                       }
                    
                }
              else 
                {
                    var scoreRslt = displayResult();
                    localStorage.setItem('mark',scoreRslt);
                    window.location="managmentend.php";
                    
                    
                }
        });
    }
    function displayResult() 
    {
       
        var correct = 0;
        for (var i = 0; i < selectOptions.length; i++) 
        {
          if (selectOptions[i] === allQuestions[i].answer) 
          {
            correct++;
          }
        }
        
        return correct;
  }
    $('#end').click(function () 
    {
    var scoreRslt = displayResult();
    
    var con=confirm("Are you sure to end the exam");
    if(con==true)
        {
       localStorage.setItem('mark',scoreRslt);
                    window.location="managmentend.php";
        }
        
    });
            function ctimer()
            {
                var timer=document.getElementById("clock").innerHTML;
                var arr=timer.split(":");
                var hours=arr[0];
                var min=arr[1];
                var sec=arr[2];
                if(sec==0)
                    {
                        if(min==0)
                            {
                                if(hours==0)
                                    {
                                        alert("Time Out");
                                        var scoreRslt = displayResult();
                    localStorage.setItem('mark',scoreRslt);
                    window.location="managmentend.php";
                                        return;
                                    }
                                hours--;
                                min=60;
                                if(hours<10) hours="0"+hours;
                            }
                        min--;
                        if(min<10) min="0"+min;
                        sec=59;
                    }
                else sec--;
                if(sec<10) sec="0"+sec;
                document.getElementById("clock").innerHTML=hours+":"+min+":"+sec;
                setTimeout(ctimer,1000);
                dis();
            }
 
  
})();
            
var c=new Date()
    var d=c.getDate();
    var m=c.getMonth();
    var y=c.getFullYear();
    m++;
    var p=d+"/"+m+"/"+y; 
    localStorage.setItem("date",p);


var c=new Date()
var time=c.toLocaleTimeString().replace(/([\d]+:[\d]{2})(:[\d]{2})(.*)/,"$1$3");
  localStorage.setItem("time",time);
 var q=localStorage.getItem("textvalue");
document.getElementById('un').value=q;

            function dis()
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
