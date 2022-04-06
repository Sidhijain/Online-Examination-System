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
            width: 600px;
            background-color: rgb(0, 0, 0, 0.4);
            margin: auto;
            color: #FFFFFF;
            padding: 10px 0px 10px 0px;
            text-align: center;
            border-radius: 8px 8px 0px 0px;
        }

        .main {
            background-color: rgba(0, 0, 0, 0.4);
            width: 600px;
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

        .b1 {
            margin: 10px 0px 0px 1250px;
            text-align: center;
            border-radius: 8px;
            padding: 10px 30px;
        }

        .btn {
            margin: 10px 0px 0px 120px;
            text-align: center;
            border-radius: 3px;
            padding: 8px 20px;
            background-color: #B2B1B9;
            color: black;
        }

        .b2 {
            margin: 10px 0px 0px 1280px;
            text-align: center;
            padding: 8px 18px;
            border-radius: 3px;
            background-color: #D1D1D1;
            color: black;
        }

        .form {
            margin-top: 70px;
        }

        .input {
            /* margin: 0 30% 0 4%; */
            float: right;
            position: relative;
            right: 38%;
        }
    </style>
</head>

<body>
<div class="back">
        <a href="LoginAdmin.php">
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
                    <input type="text" class="input" placeholder="10 Digit Id" name="aid" required>
                </div>
                <br>
                <div class="input_field">
                    <label>E-mail : </label>
                    <input type="text" class="input" placeholder="abc@xyz.com" name="email" required>
                </div>
                <br>
                <div class="input_field">
                    <label>Name : </label>
                    <input type="text" class="input" placeholder="Enter Your Name" name="name" required>
                </div>
                <br>
                <div class="input_field">
                    <label>Password : </label>
                    <input type="text" class="input" placeholder="****" name="pass" required>
                </div>
                <br>
                <div class="input_field">
                    <label>Confirm Password :</label>
                    <input type="text" class="input" placeholder="Re-type Password" name="repass" required>
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
    $id=  $_POST['aid'];
    $em=  $_POST['email'];
    $nm=  $_POST['name'];
    $ps=  $_POST['pass'];
    $rps= $_POST['repass'];

    if($ps == $rps)
        {
        
            $query="INSERT INTO admin values('$id', '$em', '$nm', '$ps','$rps')";
            $data=mysqli_query($conn, $query);  // if conn done then my query should be inserted

            if($data)
            {
                ?>
                <script type="text/javascript">
                     window.location = "LoginAdmin.php";
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