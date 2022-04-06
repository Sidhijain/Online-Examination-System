<?php
    include("Dbcon.php");
    error_reporting(0); // donot want to show any error message /warning on the screen
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        body {
            background-image: url("bv3.jpg");
            background-attachment: fixed;
            background-size: 100% 100%;
            background-position: center;
            background-repeat: no-repeat;


        }

        .signupform {
            width: 800px;
            background-color: rgb(0, 0, 0, 0.4);
            margin: auto;
            color: #FFFFFF;
            padding: 10px 0px 10px 0px;
            text-align: center;
            border-radius: 8px 8px 0px 0px;
        }

        .main {
            background-color: rgba(0, 0, 0, 0.4);
            width: 800px;
            margin: auto;
        }

        form {
            padding: 10px;
            position: relative;
            left: 20%;
            margin-bottom: 0px;
            border-collapse: separate;
            border-spacing: 0 25px;
            font-size: 1.5vw;
        }

        .line {
            position: relative;
            right: 21%;
            bottom: 40px;
        }
        .btn {
            margin: 10px 0px 0px 200px;
            text-align: center;
            border-radius: 3px;
            padding: 8px 20px;
            background-color: #B2B1B9;
            color: black;
        }

        .b2 {
          
          margin: 10px 0 0 1280px;
          text-align: center;
            padding: 8px 18px;
            border-radius: 3px;
            background-color: #D1D1D1;
            color: black;
        }

        .form {
            margin-top: 10px;
        }

        .input {
            /* margin: 0 30% 0 4%; */
            float: right;
            position: relative;
            right: 35%;
        }
    </style>
</head>

<body>
<div class="back">
        <a href="LoginStudent.php">
            <button class="b2">Back</button>
        </a>
    </div>
    <div class="form">
        <div class="signupform">
            <h1>Sign Up</h1>
        </div>
        <div class="main">
            <form action="#" method="POST">
                <span class="line">
                    <hr>
                </span>
                <div class="input_field">
                    <label>SmartCard ID :</label>
                    <input type="text" class="input" placeholder="10 Digit Id" name="Sid" size="30" required>
                </div>
                <br>
                <div class="input_field">
                    <label>Enrollment Number :</label>
                    <input type="text" class="input" placeholder="Enter Enroll Number " name="Eno" size="30" required>
                </div>
                <br>
                <div class="input_field">
                    <label>Roll Number :</label>
                    <input type="text" class="input" placeholder="7 Digit Number " name="Rollno" size="30" required>
                </div>
                <br>
                <div class="input_field">
                    <label>Name : </label>
                    <input type="text" class="input" placeholder="Enter Your Name" name="Name" size="30" required>
                </div>
                <br>
                <div class="input_field">
                    <label>E-mail : </label>
                    <input type="text" class="input" placeholder="abc@xyz.com" name="Email" size="30" required>
                </div>
                <br>
                <div class="input_field">
                    <label>Contact Number : </label>
                    <input type="text" class="input" placeholder="10 Digit Number" name="Contactno" size="30" required>
                </div>
                <br>
                <div class="input_field">
                    <label>Alternate Contact Number : </label>
                    <input type="text" class="input" placeholder="10 Digit Number" name="Altcontactno" size="30" required>
                </div>
                <br>
                <div class="input_field">
                    <label>Password : </label>
                    <input type="text" class="input" placeholder="****" name="Pass" size="30" required>
                </div>
                <br>
                <div class="input_field">
                    <label>Confirm Password :</label>
                    <input type="text" class="input" placeholder="Re-type Password" name="Repass" size="30" required>
                </div>
                <br>
                <div class="input_field">
                    <input type="submit" class="btn" name="submit" required>
                </div>
                <br>
            </form>
        </div>
    </div>
    
</body>

</html>
<?php 
// to fetch the records from html fields
if($_POST['submit']) // if button is clicked then pick up data of all the names written on form
{
    $id=  $_POST['Sid'];
    $eno=  $_POST['Eno'];
    $rno=  $_POST['Rollno'];
    $nm=  $_POST['Name'];
    $em=  $_POST['Email'];
    $cno=  $_POST['Contactno'];
    $acno=  $_POST['Altcontactno'];
    $ps=  $_POST['Pass'];
    $rps= $_POST['Repass'];

    if($ps == $rps)
        {
        
            $query="INSERT INTO student values('$id','$eno', '$rno', '$nm', '$em', '$cno','$acno','$ps','$rps')";
            $data=mysqli_query($conn, $query);  // if conn done then my query should be inserted

            if($data)
            {
                ?>
                <script type="text/javascript">
                     window.location = "LoginStudent.php";
                </script>   
                <?php   
            }
            else
            {
                ?>
                <script>
                    swal("Sign Up Unsuccessful!", "Try Again Later!", "error");
                </script>
                <?php    
            }
        }
    else 
        { 
            ?>
        <script>
            swal("Password incorrect!", "Please Enter Correct Password!", "warning");
        </script>
        <?php
        } 
}

   
?>