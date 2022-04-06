<?php

session_start();
include("Dbcon.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url("bv3.jpg");
            background-attachment: fixed;
            background-size: 100% 100%;
            background-position: center;
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
            margin: auto;
            color: #FFFFFF;
            padding: 10px 0px 10px 0px;
            text-align: center;
            border-radius: 8px 8px 0px 0px;
        }
        .b1 {
            margin: 10px 0px 0px 80px;
            text-align: center;
            border-radius: 3px;
            padding: 8px 20px;
            background-color: #B2B1B9;
            color: black;
        }
        .b3{
            margin: 10px 0 0 1280px;
          text-align: center;
            padding: 8px 18px;
            border-radius: 3px;
            background-color: #D1D1D1;
            color: black;
        }

        .main {
            background-color: rgba(0, 0, 0, 0.6);
            width: 800px;
            margin: auto;
        }  
    </style>
</head>
<body>
<div class="back">
            <a href="profileTeacher.php">
                <button class="b3">Back</button>
            </a>
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
                    <input type="text" class="input" name="Testid" placeholder="Enter Test ID" required>
                </div>  
                <br>
                <div class="input_field">
                    <label>Test date:</label>
                    <input type="date" class="input" name="Testdate" placeholder="Enter Test date" required>
                </div> 
                
                <br>
                <div class="input_field">
                    <label>Test duration :</label>
                    <input type="text" class="input" name="Testduration" placeholder="Enter Test duration" required>
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
                     <option value="">Select any one </option>   
                       <?php  
                       for($i=1;$i<=$rowcount;$i++)
                      
                      {
                          
                            $row=mysqli_fetch_array($data);
                           ?> 
                          
                           <option value="<?php echo $row["Programname"]?>"><?php echo $row["Programname"]?>
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
                     <option value="">Select any one </option>   
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
                     <option value="">Select any one </option>   
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
                     <option value="">Select any one </option>   
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
                     <option value="">Select any one </option>   
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
                    <input type="text" class="input" name="TotalQ" placeholder="Enter Total Number of Question" required>
                </div> 
                <br>
                <div class="input_field">
                    <label>Test name</label>
                    <input type="text" class="input" name="Tname" placeholder="Enter Test name" required>
                </div> 
                <br>
                <div class="input_field">
                    <label>Instruction</label>
                    <input type="text" class="input" name="Instruction" placeholder="Enter Instructrion for test" required>
                </div> 
                <br>
                <div class="input_field">
                    <label>Password :</label>
                    <input type="password" class="input" name="Pass" placeholder="Enter Your Password" required>
                </div>  
                <br>
                <div class="submit">
                        <input type="submit" class="b1" name = "submit" value="Submit" required> 
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
    $id=  $_POST['Testid'];
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



    
            $query="INSERT INTO test values('$id', '$tdate', '$td', '$pi','$si','$semid','$ai','$cc','$tq','$tn','$instr','$ps')";
            $data=mysqli_query($conn, $query);  // if conn done then my query should be inserted

            if($data)
            { 
                $queryi="SELECT * from test WHERE Testid= '$id'";
                $datai=mysqli_query($conn, $queryi);

                $id_pass=mysqli_fetch_assoc($datai);
                $_SESSION['Testid']=$id_pass['Testid'];
                  
                ?>
               <script type="text/javascript">
                    window.location = "AddQuestions.php";
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

   
?>