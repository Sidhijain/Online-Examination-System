
<?php
    include("Dbcon.php");
    $idupdate=$_GET['Qid'];

 $query = "SELECT * FROM question where Qid='$idupdate' ";
 $data = mysqli_query($conn,$query);
 $res = mysqli_fetch_array($data);

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
            margin: 10px 0px 0px 190px;
            text-align: center;
            border-radius: 3px;
            padding: 8px 20px;
            background-color: #B2B1B9;
            color: black;
        }


        .form {
            margin-top: 30px;
        }

        .input {
            /* margin: 0 30% 0 4%; */
            float: right;
            position: relative;
            right: 30%;
        }
        .sidebar {
    width: 600px;
    background-color: #3C4858;
    margin: auto;
    color: #f1f1f1;
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
    /* padding: 0; */
    color: #3C4858;
    margin: 0;
    line-height: 35px;
    font-size: 19px;
    white-space: nowrap;
    opacity: 1;
    display: block;
    height: auto;
    font-weight: normal;
    color: white;
    text-align: center;
    margin-top: 130px;
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
            background-color: #BBE1FA;
            box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(233, 233, 233, 0.5);
        }

        .pannel h1 {
            color: black;
            font-size: 30px;
            font-family: sans-serif;
            font-weight: bold;
            padding-left: 500px;
        }

    </style>
</head>

<body>
<!-- <div class="sidebar">
            <h2 class="logo-text">
                Create Test
            </h2>
            <div class="left-menu">
                <a href="AddQuestions.php">
                    <h2>Add Questions</h2>
                </a><br>
                <a href="ModifyQ.php">
                    <h2>Modify Questions</h2>
                </a><br>
                <a href="">
                    <h2>View Questions</h2>
                </a><br>
            </div>
        </div>
        <div class="pannel">
            <h1> <span>
                    Add Questions
                </span> </h1>
            <form name="form1" method="post" action="index.html">
                <label  class="logoutLblPos">
                    <input style="position:fixed; right:20px; top:18px; text-align: center; border-radius: 8px; padding: 8px 12px;" name="submit2" type="submit" id="submit2" value="Log Out">
                </label>
            </form>
        </div> -->
    <div class="form">
        <div class="signupform">
            <h1>Update Question</h1>
        </div>
        <div class="main">
            <form action="#" method="POST">
                <span class="line">
                    <hr>
                </span>
                
                <br>
                <div class="input_field">
                    <label>Question :</label>
                    <input type="text" class="input" name ="Ques" value="<?php echo $res['Ques']; ?>" size="50" required>
                </div>
                <br>
                <div class="input_field">
                    <label>Option1 :</label>
                    <input type="text" class="input" name ="Opt1" value="<?php echo $res['Opt1']; ?>" size="50" required>
                </div>
                <br>
                <div class="input_field">
                    <label>Option2 :</label>
                    <input type="text" class="input" name ="Opt2" value="<?php echo $res['Opt2']; ?>" size="50" required>
                </div>
                <br>
                <div class="input_field">
                    <label>Option3 : </label>
                    <input type="text" class="input" name="Opt3" value="<?php echo $res['Opt3']; ?>" size="50" >
                </div>
                <br>
                <div class="input_field">
                    <label>Option4 : </label>
                    <input type="text" class="input" name="Opt4" value="<?php echo $res['Opt4']; ?>" size="50" >
                </div>
                <br>
                <div class="input_field">
                    <label>Ans:</label>
                    <input type="text" class="input" name="Ans" value="<?php echo $res['Ans']; ?>" size="50" required>
                </div>
                <br>
                <div class="input_field">
                    <label>Maxmark:</label>
                    <input type="int" class="input" name="Maxmark" value="<?php echo $res['Maxmark']; ?>" size="50" required>
                </div>
                <br>
                <div class="input_field">
                    <label>Negmark:</label>
                    <input type="int" class="input" placeholder=" " name="Negmark" value="<?php echo $res['Negmark']; ?>" size="50" required>
                </div>
                <br>
                <div class="input_field">
                    <input type="submit" class="btn" name="submit"  value="Update" required>
                </div>
                <br>
            </form>
        </div>
    </div>
    
</body>

</html>

<?php


if(isset($_POST['submit'])) // if button is clicked then pick up data of all the names written on form
{ 
    

    $ques=  $_POST['Ques'];
    $op1=  $_POST['Opt1'];
    $op2= $_POST['Opt2'];
    $op3=  $_POST['Opt3'];
    $op4=  $_POST['Opt4'];
    $ans= $_POST['Ans'];
    $max=  $_POST['Maxmark'];
    $neg=  $_POST['Negmark'];
  
    $query=" UPDATE question SET  Ques='$ques', Opt1='$op1', Opt2='$op2', Opt3='$op3', Opt4='$op4', Ans='$ans', Maxmark='$max', Negmark='$neg' WHERE Qid='$idupdate'";
    $data=mysqli_query($conn, $query);

    if($data)
            {

                ?>
                <script type="text/javascript">
                     window.location = "ModifyQ.php";
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