<?php require_once("include/db.php"); ?>

<?php require_once("include/sessions.php"); ?>

<?php require_once("include/Funtions.php"); ?>

<?php confirm_login(); ?>



<?php

if(isset($_POST["submit"])){

    $Username = mysqli_real_escape_string($connection, $_POST["Username"]);

    $Password = mysqli_real_escape_string($connection, $_POST["Password"]);

    $ConfirmPassword = mysqli_real_escape_string($connection, $_POST["Comfirmpassword"]);





    $CurrentTime=time();

    $DateTime=strftime("%B-%d-%Y %H:%M:%S", $CurrentTime);

    $DateTime;

    $Admin= $_SESSION["Username"];

    if(empty($Username)||empty($Password||empty($ConfirmPassword))){

        $_SESSION["ERRORMessage"] =  "All fields must be filled out";

        Redirect_to("admins.php");

    }elseif($Password !== $ConfirmPassword){

        $_SESSION["ERRORMessage"] =  "Passwords does not match";

        Redirect_to("admins.php");

    }

    elseif(strlen($Password)<4){

        $_SESSION["ERRORMessage"] =  "Password Too Short";

        Redirect_to("admins.php");

    }else{

        global $connection;

        $Query="INSERT INTO admin(datetime, username, password, addedby)

        VALUES('$DateTime', '$Username', '$Password', '$Admin')";

        $Execute= mysqli_query($connection, $Query);

        if($Execute){

            $_SESSION["SuccessMessage"] =  "Admin Added Successfully";

            Redirect_to("admins.php");

        }else{

            $_SESSION["ERRORMessage"] =  "Failed to Add Category";

            Redirect_to("admins.php");

        }

    }

}

?>

<!DOCTYPE html>

<html>

    <head>

        <title>Admin Dashboard</title>
        <link rel="icon" type="image/png" href="logo.ico"/>

        <link rel="stylesheet" href="css/bootstrap.css">

        <script src="js/jquery-3.6.0.min.js"></script>

        <script src="js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="css/adminstyles.css">

        <style>

            #FI{

                color: rgb(251, 174, 44);

                font-family: 'Times New Roman', Times, serif;

                font-size: 1.2em;

            }

        </style>

    </head>

    <body>

    <div class="container-fluid">

    <div class="row">

        <div class="col-sm-2">

        <br>

        <ul id="side_Menue" class="nav nav-pills nav-stacked">
                <li><a href="dashboard.php"> <span class="glyphicon glyphicon-th"></span> Dashboard</a></li>
                <li><a href="AddNewPost.php"><span class="glyphicon glyphicon-list-alt"></span> &nbsp;Add New Post</a></li>
                <li><a href="categories.php"><span class="glyphicon glyphicon-tags"></span> &nbsp;Student Dues</a></li>
                <li class="active"><a href="admins.php"><span class="glyphicon glyphicon-user"></span> &nbsp;Manage Admins</a></li>
                <li><a href="comments.php"><span class="glyphicon glyphicon-comment"></span> &nbsp;Messages
                <?php
                                $QueryTotal="SELECT COUNT(*) FROM test WHERE status ='OFF'";
                                $ExecuteTotal = mysqli_query($connection, $QueryTotal);
                                $RowsTotal = mysqli_fetch_array($ExecuteTotal);
                                $Total=array_shift($RowsTotal);
                                if($Total>0){
                            ?>
                            <div class="label pull-right label-warning">   
                            <?php echo $Total; ?>
                                </div> 
                            <?php } ?> </a>
                </li>
                <li><a href="blog-large.php"><span class="glyphicon glyphicon-equalizer"></span> &nbsp;Live Blog</a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> &nbsp;Logout</a></li>
            </ul>

        </div>

        <!--ending od sidebar--> 

        <div class="col-sm-10">

            <h1>Manage Admins</h1>

            <div> <?php echo Message();

                        echo SuccessMessage(); 

                  ?>

            </div>

                <div>

                    <form action="admins.php" method="POST">

                        <fieldset>

                            <div class="form-group">

                            <label id="FI" for="Username"> Username:</label>

                            <input class="form-control" type="text" name="Username" id="Username" placeholder="Username">

                            </div>

                            <div class="form-group">

                            <label id="FI" for="Password"> Password:</label>

                            <input class="form-control" type="password" name="Password" id="Password" placeholder="Password">

                            </div>

                            <div class="form-group">

                            <label id="FI" for="Comfirmpassword"> Comfirm Password:</label>

                            <input class="form-control" type="password" name="Comfirmpassword" id="Comfirmpassword" placeholder="Repeat Password">

                            </div>

                            <br>

                            <input class="btn btn-success btn-block" type="submit" name="submit" value="Add New Admin">

                            <br>

                        </fieldset>

                    </form>

                </div>

                <div class="table-responsive">

                    <table class="table table-striped table-hover">

                        <tr>

                            <th>Sr No</th>

                            <th>Date & Time</th>

                            <th>Admin Name</th>

                            <th>Added By</th>

                            <th>Action</th>

                        </tr>

                        <?php

                        global $connection;

                        $ViewQuery = "SELECT * FROM admin ORDER BY id desc";

                        $Execute=mysqli_query($connection, $ViewQuery);

                        $SrNo=0;

                        while($DataRows=mysqli_fetch_array($Execute)){

                            $ID = $DataRows["id"];

                            $DateTime = $DataRows["datetime"];

                            $Username = $DataRows["username"];

                            $Admin = $DataRows["addedby"];

                            $SrNo++;

                        

                        ?>

                        <tr>

                            <td><?php echo $SrNo; ?></td>

                            <td><?php echo $DateTime; ?></td>

                            <td><?php echo $Username; ?></td>

                            <td><?php echo $Admin; ?></td>

                            <td><a href="deleteadmin.php?id=<?php echo $ID?>"><span class="btn btn-danger">Delete</span></a></td>



                        </tr>

                    <?php } ?>

                    </table>

                </div>

        </div>

        </div>

    </div>

        <div style="height: 10px; background:#27aae1;"></div>

    </body>

</html> 