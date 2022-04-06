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
                position: relative;
                top: 170px;
                left: 140px;
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
        .pannel {
            position: fixed;
            top: 0;
            left: 21.5%;
            right: 0;
            height: 70px;
            width: 100%;
            z-index: 333;
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
        /* input[type=submit] {
        position:fixed;
        right:20px;
        top:18px;
        text-align: center;
        border-radius: 8px;
        padding: 8px 12px;
        } */

        .dropdown {
            position: fixed;
            left: 50%;
            margin-top: 100px;
            font-weight: bold;
            font-size: large;
        }
        .b1 {
            /* margin: 0px 0px 0px 70px; */
            text-align: center;
            /* border-radius: 8px; */
            padding: 4px 10px;
            background-color: #B2B1B9;
            color: black;
        }
            
            .b2 {
            /* margin: 0px 0px 0px 70px; */
            text-align: center;
            /* border-radius: 8px; */
            padding: 4px 10px;
            background-color: #B2B1B9;
            color: black;
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

        .btn:hover {background-color: #787A91}

        .btn:active {
        background-color: #787A91;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
        }
        .b3 {
            /* margin: 0px 0px 0px 70px; */
            text-align: center;
            /* border-radius: 8px; */
            padding: 4px 18px;
            background-color: #B2B1B9;
            color: black;
        }

    </style>
</head>
<body style="background-color:white;">
<div>
        <div class="sidebar">
            <h2 class="logo-text">
                Admin
            </h2>
            <div class="left-menu">
                <a href="profileAdmin.php">
                    <h2>Profile</h2>
                </a><br>
                <a href="UpdateDatabase.php">
                    <h2>Update Database</h2>
                </a><br>
                <a href="ViewDatabase.php">
                    <h2>View Database</h2>
                </a><br>
                <a href="ViewResult.php">
                    <h2>View Student
                        <br>
                        Result
                    </h2>
                </a>
            </div>
        </div>

    </div>
    <div class="pannel">
            <h1> <span>
                    Update Database
                </span> </h1>
            <form name="form1" method="post" action="index.html">
                <label  class="logoutLblPos">
                    <input class="btn" name="submit2" type="submit" id="submit2" value="Log Out">
                </label>
            </form>
        </div>
    <div> 
    <div class="dropdown">
        <label for="updatedb" style="font-weight: bold; font-size: large;">Choose a Table:</label>
        <select name="updatedb" id="updatedb">
            <div class="dropdown-content">
                 
                <option value="nothing" selected="selected">Select a table</option>
                <option value="AdminUp.php">Admin</option>
                <option value="TeacherUp.php">Teacher</option>
                <option value="StudentUp.php">Student</option>
                <option value="ProgramUp.php">Program Master</option>
                <option value="SemesterUp.php">Semester Master</option>
                <option value="SubjectUp.php">Subject Master</option>
                <option value="CourseUp.php">Course Master</option>
                <option value="AcademicUp.php">Academic Year</option>

            </div>
        </select>
    </div>
    <script type="text/javascript">
        var urlMenu = document.getElementById('updatedb');
        urlMenu.onchange = function () {
            var userOption = this.options[this.selectedIndex];
            if (userOption.value != "nothing") {
                window.location.replace(userOption.value, "","");
            }
        }

    </script>
        <div class="center-div">
                    <div class="table-responsive">
                        <table>
                        <caption style="text-align:center; font-size: large;"> <b> <u> SUBJECT TABLE</u> </b> </caption>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Abbreviation</th> 
                                    <th colspan="2">Operations</th>  
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                   include("Dbcon.php");
                                   //error_reporting(0);  donot want to show any error message /warning on the screen
                                   if(isset($_POST['update'])){
                                       $updatequery= "UPDATE subject SET Subabb='$_POST[Subabb]' WHERE  Subname='$_POST[Subname]' " ;
                                       mysqli_query($conn,$updatequery);
                                       };

                                   if(isset($_POST['delete'])){
                                    $idupdate=$_GET['Subname'];
                                           $deletequery= "DELETE FROM subject WHERE Subname='$idupdate' " ;
                                           mysqli_query($conn,$deletequery);
                                       };
   
                                   $query = "SELECT * FROM subject" ;
                                   $data = mysqli_query($conn,$query);
                                   $nums = mysqli_num_rows($data);
                                   while($res = mysqli_fetch_array($data)){
                                   ?>
                                       <form action="" method="POST">
                                           <tr> 
                                                   <td><input type= 'text' name='Subname' value="<?php echo $res['Subname']; ?>"> </td>
                                                   <td><input type= 'text' name='Subabb' value="<?php echo $res['Subabb']; ?>"> </td>
                                                   <td><input type='submit' class='b1' name = 'update' value='Update' > </td>
                                                   <td><input type='submit' class='b2' name = 'delete' value='Delete' > </td>
                                           </tr>
                                       </form>
                                   <?php    
                               }
                               if(isset($_POST['add'])){
                                $addquery= "INSERT INTO subject (Subname, Subabb) VALUES ('$_POST[Subname]', '$_POST[Subabb]') " ;
                                $data=mysqli_query($conn,$addquery);

                                    if($data)
                                    {
                                        ?>
                                        <script type="text/javascript">
                                            window.location = "SubjectUp.php";
                                        </script>   
                                        <?php 
                                    }

                                }; 
                            ?>
                                <form action="" method="POST">  
                                    <tr>
                                        <td><input type= 'text' name='Subname' > </td>
                                        <td><input type= 'text' name='Subabb' > </td>    
                                        <td colspan="2"><input type='submit' class='b3' name = 'add' value='Add' > </td>    
                                    </tr> 
                              </form> 
                            <?php  
                                ?>
                            </tbody>  
                            </table>
                   </div>
                 
          </div>
    </div>
</body>
</html>