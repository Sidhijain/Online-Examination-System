
<?php
session_start();
    include("Dbcon.php");
    // error_reporting(0); // donot want to show any error message /warning on the screen
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
            background-image: url("bv13.jpg");
            background-attachment: fixed;
            background-size: 78.5% 100%;
            background-position: right;
            background-repeat: no-repeat;    
        }

        .signupform {
            width: 800px;
            background-color: rgb(0, 0, 0, 0.5);
            margin: auto;
            color: #FFFFFF;
            padding: 10px 0px 10px 0px;
            text-align: center;
            border-radius: 8px 8px 0px 0px;
            position: relative;
            left: 10%;
            top: 25px;
        }

        .main {
            background-color: rgba(0, 0, 0, 0.5);
            width: 800px;
            margin: auto;
            position: relative;
            left: 10%;
            top: 60px;
            border-radius: 8px 8px 8px 8px;
        }

        form {
            padding: 10px;
            position: relative;
            left: 20%;
            margin-bottom: 0px;
            border-collapse: separate;
            border-spacing: 0 25px;
            font-size: 1.5vw;
            color: white;
        }

        .line {
            position: relative;
            right: 21%;
            bottom: 40px;
        }

        .form {
            margin-top: 60px;
        }

        .input {
            /* margin: 0 30% 0 4%; */
            float: right;
            position: relative;
            right: 30%;
        }
        .sidebar {
            background-color: rgb(0, 0, 0, 0.9);
            margin: auto;
            color: #ffffff;
            height: 100%;
            width: 300px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            text-align: center;
        }
        .logo-text {
            font-size: 40px;
            font-family: sans-serif;
            text-align: center;
            color: #c7c7c7;
        }
        .left-menu {
            padding: 5px;
            color: #3C4858;
            margin: 0;
            line-height: 30px;
            font-size: 19px;
            white-space: nowrap;
            opacity: 1;
            display: block;
            height: auto;
            font-weight: normal;
            color: white;
            text-align: center;
            margin-top: 40px;
        }
        .left-menu h2:hover {
            background: white;
            margin-left: 30px;
            margin-right: 30px;
            border-radius: 5px;
            color: black;
        }
        .left-menu .active h2 {
            background: white;
            border-radius: 5px;
            color: #f0e9e9;
            box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(60, 72, 88, 0.4);
        }
        a{
            text-decoration: none;
            color: rgb(255, 255, 255);
        }
        .pannel {
             position: fixed;
            top: 0;
            left: 21.5%;
            right: 0;
            height: 70px;
            width: 100%;
            z-index: 333;
            background-color: rgb(0, 0, 0, 0.7);
            /* box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(233, 233, 233, 0.5); */
        }

        .h1 {
            color: white;
            text-align: center;
            font-size: 30px;
            font-family: sans-serif;
            font-weight: bold;
            padding-left: 450px;
            position: relative;
            /* right: 350px; */
            top: 20px;

           
        }
        .b2{
            margin: 10px 0px 0px 220px;
            text-align: center;
            border-radius: 3px;
            padding: 8px 18px;
            background-color: #B2B1B9;
            color: black;
        }
        .b1 {
        position:fixed;
        right: 100px;
        top:18px;
        text-align: center;
        border-radius: 3px;
        border: white;
        color: white;
        background-color: #88304E;
        padding: 8px 20px;
        }

        .b1:hover {background-color: #787A91; color: black;}

        .b1:active {
        background-color: #787A91;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
        }

        .btn {
        position:fixed;
        right:20px;
        top:18px;
        text-align: center;
        border-radius: 3px;
        border: white;
        color: white;
        background-color: #88304E;
        padding: 8px 12px;
        }

        .btn:hover {background-color: #787A91; color: black;}

        .btn:active {
        background-color: #787A91;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
        }
        
    </style>
</head>

<body>
<div class="sidebar">
            <h2 class="logo-text">
                 Test
            </h2>
            <div class="left-menu">
                <a href="AddQuestions.php">
                    <h2>Add Questions</h2>
                </a><br>
                <a href="ModifyQ.php">
                    <h2>Modify Questions</h2>
                </a><br>
                <a href="ViewQuestion.php">
                    <h2>View Questions</h2>
                </a><br>
                <a href="TestDetailsUp.php">
                    <h2>Modify Test Detail</h2>
                </a><br>
                <a href="DeleteTestDetails.php">
                    <h2>Delete Test </h2>
                </a><br>
            </div>
        </div>
        <div class="pannel">        
                <a href="profileTeacher.php"> <button class="b1"> Exit </button> </a>
                    <span class="h1"> 
                    Add Questions
                    </span>
                <a href="index.html"> <button class="btn"> Log Out </button> </a>
        </div>
    <div class="form">
        <!-- <div class="signupform">
            <h1>Add Question</h1>
        </div> -->
        <div class="main">
            <form action="#" method="POST">
                <!-- <span class="line">
                    <hr>
                </span>
                 -->
                <!-- <br>
                <div class="input_field">
                    <label>Test ID:</label>
                    <input type="text" class="input" placeholder=" " name ="Testid" required>
                </div> -->
                <br>
                <div class="input_field">
                    <label>Question :</label>
                    <input type="text" class="input" placeholder=" " name ="Ques" size="50" required>
                </div>
                <br>
                <div class="input_field">
                    <label>Option1 :</label>
                    <input type="text" class="input" placeholder=" " name ="Opt1" size="50" required>
                </div>
                <br>
                <div class="input_field">
                    <label>Option2 :</label>
                    <input type="text" class="input" placeholder=" " name ="Opt2" size="50" >
                </div>
                <br>
                <div class="input_field">
                    <label>Option3 : </label>
                    <input type="text" class="input" placeholder=" " name="Opt3" size="50" >
                </div>
                <br>
                <div class="input_field">
                    <label>Option4 : </label>
                    <input type="text" class="input" placeholder=" " name="Opt4" size="50" >
                </div>
                <br>
                <div class="input_field">
                    <label>Ans:</label>
                    <input type="text" class="input" placeholder=" " name="Ans" size="50" required>
                </div>
                <br>
                <div class="input_field">
                    <label>Maxmark:</label>
                    <input type="int" class="input" placeholder=" " name="Maxmark" size="50" >
                </div>
                <br>
                <div class="input_field">
                    <label>Negmark:</label>
                    <input type="int" class="input" placeholder=" " name="Negmark" size="50" >
                </div>
                <br>
                <div class="input_field">
                    <input type="submit" class="b2" name="submit"  value="Add" >
                </div>
                <br>
            </form>
        </div>
    </div>
    <!-- <div class="back">
        <a href="TestDetails.php">
            <button class="b2">Back</button>
        </a>
    </div> -->
</body>

</html>

<?php

if(isset($_POST['submit'])) // if button is clicked then pick up data of all the names written on form
{
    // $qid=  $_POST['Qid'];
    $tid=  $_SESSION['Testid'];
    $ques=  $_POST['Ques'];
    $op1=  $_POST['Opt1'];
    $op2= $_POST['Opt2'];
    $op3=  $_POST['Opt3'];
    $op4=  $_POST['Opt4'];
    $ans= $_POST['Ans'];
    $max=  $_POST['Maxmark'];
    $neg=  $_POST['Negmark'];

            if($op1 == $ans ||$op2 == $ans ||$op3 == $ans ||$op4 == $ans )
                {
                    $query="INSERT INTO question values(' ','$tid', '$ques', '$op1', '$op2', '$op3', '$op4', '$ans', '$max', '$neg')";
                    $data=mysqli_query($conn, $query);  // if conn done then my query should be inserted

                    if($data)
                    {
                        ?>
                        <script>
                            swal("Added Successfully!","add another question!","success");
                        </script>
                        <?php  
                           
                    }
                    else
                    {
                        ?>
                        <script>
                            swal("Error!", "Try Again Later!", "error");
                        </script>
                        <?php    
                    }
                }
                else 
                { 
                    ?>
                    <script>
                        swal("Answer incorrect!", "Please Enter Correct Password!", "error");
                    </script>
                    <?php
                } 
        }     
  
 
?>
