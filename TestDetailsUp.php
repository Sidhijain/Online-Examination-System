<?php

session_start();
include("Dbcon.php");
$idupdate=$_SESSION['Testid'];

 $query = "SELECT * FROM test where Testid='$idupdate' ";
 $data = mysqli_query($conn,$query);
 $res = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

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
            left: 21.7%;
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
            padding-left: 400px;
            position: relative;
            /* right: 350px; */
            top: 20px;

           
        }
         body {
            background-image: url("bv13.jpg");
            background-attachment: fixed;
            background-size: 78.25% 100%;
            background-position: right;
            background-repeat: no-repeat;    
        }
        .form{
            margin-top: 50px;
        }
        
        .input{
            float: right;
            position: relative;
            right: 40%;
        }
        form {
            padding: 10px;
            position: relative;
            left: 20%;
            margin-bottom: 10px;
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

        .submit {
            margin-left: 15%;
        }
        .loginform {
            width: 800px;
            background-color: rgb(0, 0, 0, 0.6);
           
            color: #FFFFFF;
            padding: 10px 0px 10px 0px;
            text-align: center;
            border-radius: 8px 8px 0px 0px;
            
            margin-top: 100px;
            margin-left: 410px;
        }
        .main {
            background-color: rgba(0, 0, 0, 0.6);
            width: 800px;
            margin-left: 410px;
        } 
        .b3{
            margin: 10px 0px 0px 80px;
            text-align: center;
            border-radius: 3px;
            padding: 8px 20px;
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
                    Modify Test Detail
                    </span>
                <a href="index.html"> <button class="btn"> Log Out </button> </a>
        </div>
    <div class="form">
        <div class="loginform">
            <h1>Test Details</h1>
        </div>
        <div class="main">
            <form action="" method="POST">
                <span class="line">
                    <hr>
                </span>
                <div class="input_field">
                    <label>Test ID :</label>
                    <input type="text" class="input" name="Testid" value="<?php echo $res['Testid']; ?>"  required>
                </div>  
                <br>
                <div class="input_field">
                    <label>Test date:</label>
                    <input type="date" class="input" name="Testdate" value="<?php echo $res['Testdate']; ?>" required>
                </div> 
                
                <br>
                <div class="input_field">
                    <label>Test duration :</label>
                    <input type="text" class="input" name="Testduration" value="<?php echo $res['Testduration']; ?>" required>
                </div> 
                <br>
                <div class="input_field">
                <label>Program:</label>
                   <div class="input">

                   
                     <?php
                     include("Dbcon.php");
                     
                      $query="select * from programme";
                      $data=mysqli_query($conn,$query);
                      $rowcount=mysqli_num_rows($data);
                     

                     ?>
                     <select name ="Programname">
                     <option value="<?php echo $res['Programname']; ?>"><?php echo $res['Programname']; ?></option>   
                       <?php  
                       for($i=1;$i<=$rowcount;$i++)
                      
                      {
                          
                            $row=mysqli_fetch_array($data);
                           ?> 
                          
                           <option value="<?php echo $row['Programname']; ?>"><?php echo $row["Programname"]?>
                           </option>
                     <?php
                        }
                        ?>
                    
                      
                       </select>

                    </div>
                </div> 
                <br>
                <div class="input_field">
                <label>Semester:</label>
                   <div class="input">

                   
                     <?php
                     include("Dbcon.php");
                     
                      $query="select * from semester";
                      $data=mysqli_query($conn,$query);
                      $rowcount=mysqli_num_rows($data);
                     

                     ?>
                     <select name ="Semname">
                     <option value="<?php echo $res["Semname"]?>"><?php echo $res["Semname"]?></option>   
                       <?php  
                       for($i=1;$i<=$rowcount;$i++)
                      
                      {
                          
                            $row=mysqli_fetch_array($data);
                           ?> 
                          
                           <option value="<?php echo $row["Semname"]?>"><?php echo $row["Semname"]?>
                           </option>
                     <?php
                        }
                        ?>
                    
                      
                       </select>

                    </div>
                </div> 
                <br>
                
                
                
                <div class="input_field">
                <label>Subject :</label>
                   <div class="input">

                   
                     <?php
                     include("Dbcon.php");
                     
                      $query="select * from subject";
                      $data=mysqli_query($conn,$query);
                      $rowcount=mysqli_num_rows($data);
                     

                     ?>
                     <select name ="Subname">
                     <option value="<?php echo $res["Subname"]?>"><?php echo $res["Subname"]?></option>   
                       <?php  
                       for($i=1;$i<=$rowcount;$i++)
                      
                      {
                          
                            $row=mysqli_fetch_array($data);
                           ?> 
                          
                           <option value="<?php echo $row["Subname"]?>"><?php echo $row["Subname"]?>
                           </option>
                     <?php
                        }
                        ?>
                    
                      
                       </select>

                    </div>
                </div> 
                <br>
                <div class="input_field">
                <label>Academic Year:</label>
                   <div class="input">

                   
                     <?php
                     include("Dbcon.php");
                     
                      $query="select * from academic";
                      $data=mysqli_query($conn,$query);
                      $rowcount=mysqli_num_rows($data);
                     

                     ?>
                     <select name ="Academicname">
                     <option value="<?php echo $res["Academicname"]?>"><?php echo $res["Academicname"]?></option>   
                       <?php  
                       for($i=1;$i<=$rowcount;$i++)
                      
                      {
                          
                            $row=mysqli_fetch_array($data);
                           ?> 
                          
                           <option value="<?php echo $row["Academicname"]?>"><?php echo $row["Academicname"]?>
                           </option>
                     <?php
                        }
                        ?>
                    
                      
                       </select>

                    </div>
                </div> 
            <br>
            <div class="input_field">
                <label>Course:</label>
                   <div class="input">

                   
                     <?php
                     include("Dbcon.php");
                     
                      $query="select * from course";
                      $data=mysqli_query($conn,$query);
                      $rowcount=mysqli_num_rows($data);
                     

                     ?>
                     <select name ="Ccode">
                     <option value="<?php echo $res["Ccode"]?>"><?php echo $res["Ccode"]?></option>   
                       <?php  
                       for($i=1;$i<=$rowcount;$i++)
                      
                      {
                          
                            $row=mysqli_fetch_array($data);
                           ?> 
                          
                           <option value="<?php echo $row["Ccode"]?>"><?php echo $row["Ccode"]?>
                           </option>
                     <?php
                        }
                        ?>
                    
                      
                       </select>

                    </div>
                </div> 
                <br>
                <div class="input_field">
                    <label>Total Questions</label>
                    <input type="text" class="input" name="TotalQ" value="<?php echo $res['TotalQ']; ?>" required>
                </div> 
                <br>
                <div class="input_field">
                    <label>Test name</label>
                    <input type="text" class="input" name="Tname" value="<?php echo $res['Tname']; ?>" required>
                </div> 
                <br>
                <div class="input_field">
                    <label>Instruction</label>
                    <input type="text" class="input" name="Instruction" value="<?php echo $res['Instruction']; ?>" required>
                </div> 
                <br>
                <div class="input_field">
                    <label>Password :</label>
                    <input type="password" class="input" name="Pass" value="<?php echo $res['Pass']; ?>" required>
                </div>  
                <br>
                <div class="submit">
                        <input type="submit" class="b3" name = "submit" value="Update" required> 
                </div>
               
                </form>   
        </div>
        </div>
       
</body>
</html>
<?php 
// to fetch the records from html fields
if(isset($_POST['submit'])) // if button is clicked then pick up data of all the names written on form
{
    $idupdate=$_SESSION['Testid'];
    $tdate= $_POST['Testdate'];
    $td= $_POST['Testduration'];
    $pi=  $_POST['Programname'];
    $si= $_POST['Subname'];
    $semid= $_POST['Semname'];
    $ai= $_POST['Academicname'];
    $cc= $_POST['Ccode'];
    $tq= $_POST['TotalQ'];
    $tn= $_POST['Tname'];
    $instr= $_POST['Instruction'];
    $ps= $_POST['Pass'];



    
            $queryi=" UPDATE test SET  Testdate='$tdate', Testduration='$td', Programname='$pi', Subname='$si', Semname='$semid', Academicname='$ai', Ccode='$cc', TotalQ='$tq', Tname='$tn', Instruction='$instr', Pass='$ps' WHERE Testid='$idupdate'";
            $datai=mysqli_query($conn, $queryi);  // if conn done then my query should be inserted

            if($datai)
            { 
                  
                ?>
               <script type="text/javascript">
                    window.location = "TestDetailsUp.php";
               </script>      
                <?php
            }
            else
            {
                ?>
                <script>
                    swal("Data Not Updated!", "Try Again Later!", "error");
                </script>
                <?php    
            }
        
}

   
?>