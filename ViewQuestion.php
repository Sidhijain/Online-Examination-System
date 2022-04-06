<?php
    session_start();
?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        table {
                /* border-spacing: 5; */
                background-color: #fff;
                border-collapse: collapse;
                box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.03);
                /* border-radius: 5px; */
                margin: auto;
                /* position: fixed; */
                position: relative;
                top: 130px;
                margin-left: 22%;
            }

            th,
            td {
                border: 5px solid black;
                padding: 15px 10px;
                text-align: center;
                color: black;
            }

            th {
                background-color: black;
                text-transform: uppercase;
                font-weight: 500;
                color: white;
            }

            td {
                font-size: 15px;
                
            }
            body {
            background-image: url("bv13.jpg");
            background-attachment: fixed;
            background-size: 78.5% 100%;
            background-position: right;
            background-repeat: no-repeat;
           
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
            /* z-index: 333; */
            background-color: rgb(0, 0, 0, 0.8);
            /* border-radius: 5px; */
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
        .Testid{
            margin-top: 100px;
            margin-left: 52%;
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
                    View Questions
                    </span>
                <a href="index.html"> <button class="btn"> Log Out </button> </a>
        </div>
        <!-- <form action="" method="POST">
            <div class="Testid">
                <label for="Testid">Test Id:</label>
                <input type="Testid" id="Testid" name="Testid">
            </div>
            <div>
                     <input type="submit"  class="view-button" name = "submit" value="View Questions" required/> 
</div> -->
            <!-- <div class="input_field">
                   
            </div> -->
           <table>
           <caption style="text-align:center;  font-weight: bold; font-size: large;">QUESTION TABLE</caption>
                    <thead>
                               <tr>
                                    <th>Question</th>
                                    <th>Option 1</th>
                                    <th>Option 2</th>
                                    <th>Option 3</th>
                                    <th>Option 4</th>
                                    <th>Answer</th>
                                    <th>Max Marks</th>
                                    <th>Neg Marks</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                   include("Dbcon.php");
                                   //error_reporting(0);  donot want to show any error message /warning on the screen
                                  
                                   $id=$_SESSION['Testid'];
   
                                   $query = "SELECT * FROM question where Testid='$id'" ;
                                   $data = mysqli_query($conn,$query);
                                   $nums = mysqli_num_rows($data);
                                   while($res = mysqli_fetch_array($data)){
                                   ?>
                                       <form action="" method="POST">
                                           <tr> 
                                                   
                                                   <td><?php echo $res['Ques']; ?> </td>
                                                   <td><?php echo $res['Opt1']; ?> </td>
                                                   <td><?php echo $res['Opt2']; ?></td>
                                                   <td><?php echo $res['Opt3']; ?></td>
                                                   <td><?php echo $res['Opt4']; ?></td>
                                                   <td> <?php echo $res['Ans']; ?></td>
                                                   <td><?php echo $res['Maxmark']; ?> </td>
                                                   <td><?php echo $res['Negmark']; ?></td>
                                                   
                                           </tr>
                                       </form>
                                   <?php    
                               }

                                ?>
                            
                </tbody>
    </form>
</body>
</html>