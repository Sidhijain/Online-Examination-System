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
        .main-div {
            width: 45%;
            height: 60vh;
            background-color: rgb(0, 0, 0, 0.4);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
            left: 38%;
            margin-top: 180px;
            border-radius: 10px;
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

       
        h1 {
            font-size: 40px;
            color: #000;
            text-align: center;
            margin-top: -20px;
            margin-bottom: 20px;
        }
        table {
            /* border-spacing: 5; */
            background-color: #fff;
                border-collapse: collapse;
                box-shadow: 0 25px 25px 0 rgba(0, 0, 0, 0.2);
                /* border-radius: 5px; */
                margin: auto;
                
        }

        th,
        td {
            border: 3px solid black;;
            padding: 10px 30px;
            text-align: center;
            color: black;
        }

        th {
            background-color: black;
            padding: 10px 10px;
            text-align: center;
            color: white;
            text-transform: uppercase;
            font-weight: 300;
            font-size: 15px;
        }

        td {
            font-size: 13px;
            
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
            padding-right: 360px;
            padding-top: 40px;
        }


        .fa{
            font-size: 18px;
        }
        .fa-edit{
            color: #63c76a;
        } 
        .fa-trash{
               color: #ff0000; 
            }  
        input[type=submit] {
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

        input[type=submit]:hover {background-color: #787A91}

        input[type=submit]:active {
        background-color: #787A91;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
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
    <div class="main-div">
        <div class="pannel">
            <h1> <span>
                    Profile
                </span> </h1>
            <form name="form1" method="post" action="index.html">
                <label class="logoutLblPos">
                    <input name="submit2" type="submit" id="submit2" value="Log Out">
                </label>
            </form>
        </div>
        <div class="center-div">
            <div class="table-respnsive">
                <table>
                <tbody>
                        <tr>
                            <th>ID</th>
                            <td><?php echo $_SESSION['Sid']; ?> </td>
                        </tr>    
                        <tr>
                            <th>Enroll No.</th>
                            <td><?php echo $_SESSION['Eno']; ?> </td>
                        </tr>    
                        <tr>
                            <th>Roll No.</th>
                            <td><?php echo $_SESSION['Rollno']; ?> </td>
                        </tr>    
                        <tr>
                            <th>Name</th>
                            <td><?php echo $_SESSION['Name']; ?></td>
                        </tr>    
                        <tr>
                            <th>Email</th> 
                            <td><?php echo $_SESSION['Email']; ?></td>
                        </tr>    
                        <tr>
                            <th>Contact No.</th>
                            <td><?php echo $_SESSION['Contactno']; ?> </td>
                        </tr>    
                        <tr>
                            <th>Alt Contact No.</th>  
                            <td><?php echo $_SESSION['Altcontactno']; ?> </td>
                        </tr>    
                        <tr>    
                            <th>Operation</th>
                            <td> <a href="ProfileUpdateStudent.php?Sid=<?php echo $_SESSION['Sid']; ?>"> <i class="fa fa-edit" aria-hidden="true"></i></a>
                        </tr>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>