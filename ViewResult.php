<?php
                        
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
            background-image: url("bv13.jpg");
            background-attachment: fixed;
            background-size: 78.5% 100%;
            background-position: right;
            background-repeat: no-repeat;
           
        }
         table {
                /* border-spacing: 5; */
                background-color: #fff;
                border-collapse: collapse;
                box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.03);
                /* border-radius: 5px; */
                margin: auto;
                position: relative;
                top: 50px;
                left: 160px;
            }

            th,
            td {
                border: 5px solid black;
                padding: 8px 30px;
                text-align: center;
                color: black;
            }

            th {
                background-color: black;
                color: white;
                text-transform: uppercase;
                font-weight: 500;
            }

            td {
                font-size: 15px;
                
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

        .dropdown {
            position: relative;
            left: 50%;
            margin-top: 100px;
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
            padding-left: 400px;
        }
        .Studentid{
            margin-top: 100px;
            margin-left: 52%;
            font-size: large;
            font-weight: bold;
        }
        .view-button{
            margin: 15px 0px 0px 890px;
            text-align: center;
            border-radius: 5px;
            padding: 5px 5px;
        }
        .b1{
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

        .b1:hover {background-color: #787A91}

        .b1:active {
        background-color: #787A91;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
        }
        .view-button{
            margin: 15px 0px 0px 895px;
            text-align: center;
            border-radius: 3px;
            padding: 5px 10px;
            background-color: #787A91;
            color: white;
        }
    </style>
</head>

<body style="background-color:white;">
    
        <div class="sidebar" >
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
    <div class="pannel">
            <h1> <span>
                    View Student Result
                </span> </h1>
            <form name="form1" method="" action="index.html">
                <label class="logoutLblPos">
                    <input  class="b1" name="submit2" type="submit" id="submit2" value="Log Out">
                </label>
            </form>
        </div>
        <form action="" method="POST">
            <div class="Studentid">
                <label for="Studentid">Smart Card Id:</label>
                <input type="Studentid" id="Studentid" name="Sid">
            </div>
            <div class="input_field">
               <input type="submit" class="view-button" name = "submit" value="View" required/>     
           </div>
           <table>
                    <thead>
                               <tr>
                                    <!-- <th>Roll No.</th> -->
                                    <th>Test ID</th>
                                    <th>Result</th> 
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            
                            if(isset($_POST['submit']))      // if button is clicked then pick up data of all the names written on form
                            { 
                                $id= $_POST['Sid'];

                            $query="SELECT * from result WHERE Sid= '$id'";
                            $data=mysqli_query($conn, $query);  // if conn done then my query should be inserted
                            $nums=mysqli_num_rows($data);

                            while($res= mysqli_fetch_array($data)){
                                ?>
                            <tr>
                              
                                <td><?php echo $res['Testid']; ?></td>
                                <td><?php echo $res['TotalMarks']; ?></td>
                                
                            </tr>
                            <?php
                        }
                    }
                    ?>   
                    </tbody>

    </form>
    

            
    </body>

</html>