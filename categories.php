<?php require_once("include/db.php"); ?>

<?php require_once("include/sessions.php"); ?>

<?php require_once("include/Funtions.php"); ?>

<?php confirm_login(); ?>



<?php

if(isset($_POST["submit"])){

    $category = mysqli_real_escape_string($connection, $_POST["category"]);

    $matNum = mysqli_real_escape_string($connection, $_POST["matnum"]);

    $dept = mysqli_real_escape_string($connection, $_POST["dept"]);

    $level = mysqli_real_escape_string($connection, $_POST["level"]);

    $amount = mysqli_real_escape_string($connection, $_POST["amount"]);

    $rn = mysqli_real_escape_string($connection, $_POST["rn"]);


    $CurrentTime=time();

    $DateTime=strftime("%B-%d-%Y %H:%M:%S", $CurrentTime);

    $DateTime;

    $Admin= $_SESSION["Username"];

    if(empty($category)){

        $_SESSION["ERRORMessage"] =  "All fields must be filled out";

        Redirect_to("categories.php");

    }elseif(strlen($category)>99){

        $_SESSION["ERRORMessage"] =  "Category Name Too long";

        Redirect_to("categories.php");

    }else{

        global $connection;

        $Query="INSERT INTO category(datetime, name, matnum, dept, level, amount, rn, creatorname )

        VALUES('$DateTime', '$category', '$matNum','$dept', '$level', '$amount', '$rn', '$Admin')";

        $Execute= mysqli_query($connection, $Query);

        if($Execute){

            $_SESSION["SuccessMessage"] =  "Record Added Successfully";

            Redirect_to("categories.php");

        }else{

            $_SESSION["ERRORMessage"] =  "Failed to Add New Record";

            Redirect_to("categories.php");

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
                <li class="active"><a href="categories.php"><span class="glyphicon glyphicon-tags"></span> &nbsp;Student Dues</a></li>
                <li><a href="admins.php"><span class="glyphicon glyphicon-user"></span> &nbsp;Manage Admins</a></li>
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

            <h1>Paid Dues</h1>

            <div> <?php echo Message();

                        echo SuccessMessage(); 

                  ?>

            </div>

                <div>

                    <form action="categories.php" method="POST">

                        <fieldset>

                            <div class="form-group">

                            <label id="FI" for="categoryname"> Name:</label>

                            <input class="form-control" type="text" name="category" id="categoryname" placeholder="John Doe">

                            </div>

                            <div class="form-group">

                            <label id="FI" for="matnum"> Matriculation Number:</label>

                            <input class="form-control" type="text" name="matnum" id="matnum" placeholder="VUG/CSC/14/0000">

                            </div>
                            <div class="form-group">

                            <label id="FI" for="dept"> Department:</label>

                            <input class="form-control" type="text" name="dept" id="dept" placeholder="Industrial Chemistry">

                            </div>
                            <div class="form-group">

                            <label id="FI" for="dept"> Level:</label>

                            <input class="form-control" type="text" name="level" id="level" placeholder="400">

                            </div>
                            <div class="form-group">

                            <label id="FI" for="dept"> Amount:</label>

                            <input class="form-control" type="text" name="amount" id="amount" placeholder="1500">
                            </div>
                            <div class="form-group">

                            <label id="FI" for="dept"> Receipt Number :</label>

                            <input class="form-control" type="text" name="rn" id="rn" placeholder="12324342">
                            </div>

                            <br>

                            <input class="btn btn-success btn-block" type="submit" name="submit" value="Submit">

                            <br>

                        </fieldset>
                    </form>

                </div>

                <div class="table-responsive">

                    <table class="table table-striped table-hover">

                        <tr>

                            <th>S/N</th>

                            <th>Date & Time</th>

                            <th>Student Name</th>

                            <th>Matriculation Number</th>

                            <th>Department</th>

                            <th>Level</th>

                            <th>Amount</th>

                            <th>Receipt Number</th>

                            <th>Creator Name</th>

                            <th>Action</th>

                        </tr>

                        <?php

                        global $connection;

                        $ViewQuery = "SELECT * FROM category ORDER BY id desc";

                        $Execute=mysqli_query($connection, $ViewQuery);

                        $SrNo=0;

                        while($DataRows=mysqli_fetch_array($Execute)){

                            $ID = $DataRows["id"];

                            $DateTime = $DataRows["datetime"];

                            $CategoryName = $DataRows["name"];

                            $Department = $DataRows["dept"];

                            $level = $DataRows["level"];

                            $amount = $DataRows["amount"];

                            $rn = $DataRows["rn"];

                            $matNum = $DataRows["matnum"];

                            $creatorname = $DataRows["creatorname"];

                            $SrNo++;

                        

                        ?>

                        <tr>

                            <td><?php echo $SrNo; ?></td>

                            <td><?php echo $DateTime; ?></td>

                            <td><?php echo $CategoryName; ?></td>

                            <td><?php echo $matNum; ?></td>

                            <td><?php echo $Department; ?></td>

                            <td><?php echo $level; ?></td>

                            <td><?php echo $amount; ?></td>

                            <td><?php echo $rn; ?></td>

                            <td><?php echo $creatorname; ?></td>

                            <td><a href="deletecategory.php?id=<?php echo $ID?>"><span class="btn btn-danger">Delete</span></a></td>
                        </tr>

                    <?php } ?>

                    </table>

                </div>

        </div>

        </div>

    </div>

    </body>

</html> 