<?php
include("connection.php");
session_start();

			if(isset($_POST['sendopt'])) {
                
                $mo=$_POST['mobile'];
                $n=$_POST['enroll'];
                $_SESSION['un']=$n;
				require('textlocal.class.php');
				require('credential.php');
                
                 $res="select * from student_reg where Enrollment_No='$n' && Mobile_No='$mo'";
                 $query=mysqli_query($conn,$res);
                $rowcount=mysqli_num_rows($query);
                if($rowcount==true)
                {
                

				$textlocal = new Textlocal(false, false, API_KEY);

                // You can access MOBILE from credential.php
				// $numbers = array(MOBILE);
                // Access enter mobile number in input box
                $numbers = array($_POST['mobile']);

				$sender = 'TXTLCL';
				$otp = mt_rand(10000, 99999);
				$message = "Hello This is your OTP: " . $otp." "."From Tushar";

				try {
				    $result = $textlocal->sendSms($numbers, $message, $sender);
				    setcookie('otp', $otp);
				    echo "<script>alert('OTP successfully send..');window.location='forget-password.php'</script>";
				} catch (Exception $e) {
				    die('Error: ' . $e->getMessage());
				}
			}
                else
                {
                    echo "<script>alert('Enrollment No or Mobile number is not correct');window.location='forget-password.php'</script>";
                }
            }

			if(isset($_POST['verifyotp'])) { 
               
                
				$otp = $_POST['otp'];
				if($_COOKIE['otp'] == $otp) {
					echo "<script>alert('OTP Verified Successfully');window.location='change-password.php'</script>";
				} else {
					echo "<script>alert('please Enter Correct OTP');window.location='forget-password.php'</script>";
				}
			}
		?>