<?php
    session_start();

    include("Dbcon.php");
    error_reporting(0);

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
        .loginform {
            width: 600px;
            background-color: rgb(0, 0, 0, 0.6);
            margin: auto;
            color: #FFFFFF;
            padding: 10px 0px 10px 0px;
            text-align: center;
            border-radius: 8px 8px 0px 0px;
            position: relative;
            left: 12%;
            top: 100px;
            box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.2);

        }

        .main {
            background-color: rgba(0, 0, 0, 0.6);
            width: 600px;
            margin: auto;
            position: relative;
            left: 12%;
            top: 100px;
            box-shadow: 0 25px 25px 0 rgba(0, 0, 0, 0.2);
        }

        form {
            padding: 10px;
            position: relative;
            left: 30%;
            margin-bottom: 10px;
            border-collapse: separate;
            border-spacing: 0 25px;
            font-size: 1.5vw;
            color: white;
        }

        .line {
            position: relative;
            right: 31%;
            bottom: 40px;
        }

        .submit {
            margin-left: 15%;
        }

        .b1 {
            margin: 10px 0px 0px 85px;
            text-align: center;
            border-radius: 3px;
            padding: 8px 18px;
            background-color: #B2B1B9;
            color: black;

        }
        .form{
            margin-top: 100px;
        }
        .signup {
            font-size: 1.3vw;
            margin-top: 30px;
        }
        .input{
            float: right;
            position: relative;
            right: 53%;
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
            margin-top: 80px;
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
            /* z-index: 333; */
            background-color: rgb(0, 0, 0, 0.8);
            /* border-radius: 5px; */
            /* box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(233, 233, 233, 0.5); */
        }

        .pannel h1 {
            color: white;
            font-size: 30px;
            font-family: sans-serif;
            font-weight: bold;
            padding-left: 470px;
            padding-top: 0px;
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
<div>
    <div class="sidebar">
        <h2 class="logo-text">
            Teacher
        </h2>
        <div class="left-menu">
            <a href="profileTeacher.php">
                <h2>Profile</h2>
            </a><br>
            <a href="TestDetails.php">
                <h2>Create Test</h2>
            </a><br>
            <a href="UpdateTest.php">
                <h2>Update Test</h2>
            </a><br>
            <a href="ViewStudentResult.php">
                <h2>View Student 
                    <br>
                    Result</h2>
            </a>
        </div>
    </div>

    </div>
    
        <div class="pannel">
            <h1> <span>
                    Update Test
                </span> </h1>
            <form name="form1" method="post" action="index.html">
                <label class="logoutLblPos">
                    <input class="btn" name="submit2" type="submit" id="submit2" value="Log Out">
                </label>
            </form>
        </div>

    <div class="form">
    <div class="loginform">
        <h1>Test</h1>
    </div>
    <div class="main">
        <form action="#" method="POST">
            <span class="line">
                <hr>
            </span>
            <div class="input_field">
                <label>Test ID :</label>
                <input type="text" class="input" name="Testid" placeholder="Enter Your test ID" required/>
            </div>  
            <br>
            <div class="input_field">
                <label>Password :</label>
                <input type="password" class="input"  name="Pass" placeholder="Enter Your Password" required/>
            </div>  
            <br>
            <div class="input_field">
                    <input type="submit" class="b1" name = "submit" value="Next" required/>
                    <!-- <button class="b1" name="submit" type="submit"> Log In </button> -->
            </div>
            <!--<div class="signup">
                If you are new:
                    <button class="b2" > <a href="SignUpTeacher.php">Sign Up</a></button>
            </div>-->
            </form>   
       </div>
        </form>
    </div>
    </div>
</body>

</html>

<?php 

// to fetch the records from html fields
if(isset($_POST['submit']))      // if button is clicked then pick up data of all the names written on form
{ 
    $id=  $_POST['Testid'];
    $ps=  $_POST['Pass'];

    $query="SELECT * from test WHERE Testid= '$id' AND Pass='$ps'";
    $data=mysqli_query($conn, $query);  // if conn done then my query should be inserted
    $res=mysqli_num_rows($data);

              if($res===1)
                {
                    $id_pass=mysqli_fetch_assoc($data);
                    
                    // $db_pass=$id_pass['Pass'];

                    $_SESSION['Testid']=$id_pass['Testid'];
                    // $_SESSION['Testdate']=$id_pass['Testdate'];
                    // $_SESSION['Testduration']=$id_pass['Testduration'];
                    // $_SESSION['Programname']=$id_pass['Programname'];
                    // $_SESSION['Subname']=$id_pass['Subname'];
                    // $_SESSION['Semname']=$id_pass['Semname'];
                    // $_SESSION['Academicname']=$id_pass['Academicname'];
                    // $_SESSION['Ccode']=$id_pass['Ccode'];
                    // $_SESSION['TotalQ']=$id_pass['TotalQ'];
                    // $_SESSION['Tname']=$id_pass['Tname'];
                    // $_SESSION['Instruction']=$id_pass['Instruction'];
                    // $_SESSION['Pass']=$id_pass['Pass'];
                    
                    // $pass_check=password_verify($ps, $db_pass);
                    // $_SESSION['Aid']=$id;
                    ?>
                    <script type="text/javascript">
                        window.location = "AddQuestions.php";
                    </script>      
                    <?php
                }
                else{
                    ?>
                    <script>
                              swal("Login Unsuccessful!", "Incorrect User ID!", "error");
                    </script>
                    <?php     
                }           
}

?>
