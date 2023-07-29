<?php require_once("include/db.php"); ?>

<?php require_once("include/sessions.php"); ?>

<?php require_once("include/Funtions.php"); ?>

<?php confirm_login(); ?>

<?php

if(isset($_POST["submit"])){

    $Title = mysqli_real_escape_string($connection, $_POST["title"]);

    $Category = mysqli_real_escape_string($connection, $_POST["Category"]);

    $Post = mysqli_real_escape_string($connection, $_POST["post"]);

    $CurrentTime=time();

    $DateTime=strftime("%B-%d-%Y %H:%M:%S", $CurrentTime);

    $DateTime;

    $Admin= $_SESSION["Username"];

    $Image = $_FILES["image"]["name"];

    $Target = "Upload/".basename($_FILES["image"]["name"]);



    if(empty($Title)){

        $_SESSION["ERRORMessage"] =  "Title can not be empty";

        Redirect_to("AddNewPost.php");

    }elseif(strlen($Title) <2){

        $_SESSION["ERRORMessage"] =  "Title Should be longer";

        Redirect_to("AddNewPost.php");

    }else{

        global $connection;

        $Query="INSERT INTO admin_panel(datetime, title, category, author, image, post)

        VALUES('$DateTime','$Title', '$Category', '$Admin','$Image', '$Post')";

        $Execute= mysqli_query($connection, $Query);

        move_uploaded_file($_FILES["image"]["tmp_name"], $Target);  

        if($Execute){

            $_SESSION["SuccessMessage"] =  "Post Added Successfully";

            Redirect_to("AddNewPost.php");

        }else{

            $_SESSION["ERRORMessage"] =  "Failed to Add PostTTTT";

            Redirect_to("AddNewPost.php");

        }

    }

}

?>

<!DOCTYPE html>

<html>

    <head>

        <title>Add New Post</title>
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
                <li class="active"><a href="AddNewPost.php"><span class="glyphicon glyphicon-list-alt"></span> &nbsp;Add New Post</a></li>
                <li><a href="categories.php"><span class="glyphicon glyphicon-tags"></span> &nbsp;Student Dues</a></li>
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

            <h1>Add New Post</h1>

            <div> <?php echo Message();

                        echo SuccessMessage(); 

                  ?>

            </div>

                <div>

                    <form action="AddNewPost.php" method="POST" enctype="multipart/form-data">

                        <fieldset>

                            <div class="form-group">

                            <label id="FI" for="title"> Title:</label>

                            <input class="form-control" type="text" name="title" id="title" placeholder="title">

                            </div>



                            <div class="form-group">

                            <label id="FI" for="categoryselect"> Category:</label>

                            <select class="form-control" name="Category" id="categoryselect">

                            <?php 

                            global $connection;

                            $ViewQuery = "SELECT * FROM category ORDER BY datetime desc";

                            $Execute=mysqli_query($connection, $ViewQuery);

                            while($DataRows=mysqli_fetch_array($Execute)){

                                $ID = $DataRows["id"];

                                $CategoryName = $DataRows["name"]; 

                        

                        ?>

                        <option> <?php echo "New" ?></option>

                            <?php } ?>

                            </select>

                            </div>

                            <div class="form-group">

                            <label id="FI" for="imageselect"> Select Image:</label>

                            <input type="File" class="form-control" name="image" id="imageselect">

                            </div>

                            <div class="form-group">

                            <label id="FI" for="postarea">Post:</label>

                            <textarea class="form-control" name="post" id="postarea" cols="30" rows="10"></textarea>



                            <br>

                            <input class="btn btn-success btn-block" type="submit" name="submit" value="Add New Post">

                            <br>

                        </fieldset>

                    </form>

                </div>

                <div class="table-responsive">

                </div>        



        </div>

        </div>

    </div>

   

        <div style="height: 10px; background:#27aae1;"></div>

    </body>

</html> 