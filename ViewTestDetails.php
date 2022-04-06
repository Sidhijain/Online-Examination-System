<?php
                        
     include("Dbcon.php");
     session_start();

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            margin-top: 150px;
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
        .b1 {
        position:fixed;
        right: 100px;
        top:9px;
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
        table {
            /* border-spacing: 5; */
            background-color: #fff;
                border-collapse: collapse;
                box-shadow: 0 25px 25px 0 rgba(0, 0, 0, 0.2);
                /* border-radius: 5px; */
                margin: auto;
                position: relative;
                top: 130px;
                margin-left: 30%;
        }

        th,
        td {
            border: 5px solid black;;
            padding: 10px 10px;
            text-align: center;
            color: black;
            
        }

        th {
            background-color: black;
            padding: 10px 30px;
            text-align: center;
            color: white;
            text-transform: uppercase;
            font-weight: 500;
        }

        td {
            font-size: 13px;
            column-width: 400px;
        
        }
    </style>
</head>

<body style="background-color:white;">
    <div>
        <div class="sidebar">
            <h2 class="logo-text">
                Student
            </h2>
            <div class="left-menu">
                <a href="profileStudent.php">
                    <h2>Profile</h2>
                </a><br>
                <a href="StartTest.php">
                    <h2>Start Test</h2>
                </a><br>
            </div>
        </div>

    </div>
    <div class="pannel">        
                <a href="Exam.php"> <button class="b1"> Start Test </button> </a>
                    <span class="h1"> 
                    Test Details
                    </span>
                <a href="index.html"> <button class="btn"> Log Out </button> </a>
        </div>
        <div class="center-div">
            <div class="table-respnsive">
                <table>
                <tbody>
                        <tr>
                            <th>Test ID:</th>
                            <td><?php echo $_SESSION['Testid']; ?> </td>
                        </tr>
                        <tr>
                           <th>Test Name:</th>
                           <td><?php echo $_SESSION['Tname']; ?> </td>
                        </tr>
                        <tr>
                            <th>Program:</th>
                            <td><?php echo $_SESSION['Programname']; ?> </td>
                        </tr>
                        <tr>
                            <th>Subject:</th>
                            <td><?php echo $_SESSION['Subname']; ?></td>   
                        </tr>
                        <tr>
                            <th>Semester:</th> 
                            <td><?php echo $_SESSION['Semname']; ?></td>
                        </tr>
                        <tr>
                            <th>Academic Year:</th>
                            <td><?php echo $_SESSION['Academicname']; ?> </td>
                        </tr>
                        <tr>
                            <th>Course Code:</th>  
                            <td><?php echo $_SESSION['Ccode']; ?> </td>
                        </tr>
                        <tr>
                            <th>Date:</th>  
                            <td><?php echo $_SESSION['Testdate']; ?> </td>
                        </tr>
                        <tr>
                            <th>Duration:</th>  
                            <td><?php echo $_SESSION['Testduration']; ?> </td>
                        </tr>
                        <tr>
                            <th>Total Questions:</th> 
                            <td><?php echo $_SESSION['TotalQ']; ?> </td> 
                        </tr>
                        <tr>
                            <th>Instructions:</th>
                            <td><?php echo $_SESSION['Instruction']; ?> </td>  
                        </tr>
                        </tbody>     
                </table>
            </div>
        </div>
    </div>