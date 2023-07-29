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
    $Admin= "Michael";
    $Image = $_FILES["image"]["name"];
    $Target = "Upload/".basename($_FILES["image"]["name"]);

  
        $DeleteFromURL= $_GET['Delete'];
        $Query= "DELETE FROM admin_panel WHERE id='$DeleteFromURL'";
        $Execute= mysqli_query($connection, $Query);
        move_uploaded_file($_FILES["image"]["tmp_name"], $Target);  
        if($Execute){
            $_SESSION["SuccessMessage"] =  "Post Deleted Successfully";
            Redirect_to("dashboard.php");
        }else{
            $_SESSION["ERRORMessage"] =  "Failed to Delete Post";
            Redirect_to("dashboard.php");
        }
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Delete Post</title>
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
                <li><a href="categories.php"><span class="glyphicon glyphicon-tags"></span> &nbsp;Categories</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> &nbsp;Manage Admins</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-comment"></span> &nbsp;Comments</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-equalizer"></span> &nbsp;Live Blog</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> &nbsp;Logout</a></li>
            </ul>
        </div>
        <!--ending od sidebar--> 
        <div class="col-sm-10">
            <h1>Delete Post</h1>
            <div> <?php echo Message();
                        echo SuccessMessage(); 
                  ?>
            </div>
                <div>
                    <?php
                        $SearchQueryParameter= $_GET["Delete"];
                        $Query="SELECT * FROM admin_panel WHERE id='$SearchQueryParameter'";
                        $Execute=mysqli_query($connection, $Query);
                        while($DataRows=mysqli_fetch_array($Execute)){
                            $TitleUpdate = $DataRows['title'];
                            $CategoryUpdate = $DataRows['category'];
                            $ImageUpdate = $DataRows['image'];
                            $PostUpdate = $DataRows['post'];
                    ?>
                    <div><?php } ?></div>
                    <form action="DeletePost.php?Delete=<?php echo $SearchQueryParameter;?> " method="POST" enctype="multipart/form-data">
                        <fieldset>
                            <div class="form-group">
                            <label id="FI" for="title"> Title:</label>
                            <input disabled value="<?php echo $TitleUpdate ?>" class="form-control" type="text" name="title" id="title" placeholder="title">
                            </div>

                            <div class="form-group">
                            <label id="FI" for="categoryselect"> Existing Category: <?php echo $CategoryUpdate;?></label>
                            <select disabled class="form-control" name="Category" id="categoryselect">
                            <?php 
                            $ViewQuery = "SELECT * FROM category ORDER BY datetime desc";
                            $Execute=mysqli_query($connection, $ViewQuery);
                            while($DataRows=mysqli_fetch_array($Execute)){
                                $ID = $DataRows["id"];
                                $CategoryName = $DataRows["name"]; 
                        
                        ?>
                        <option> <?php echo $CategoryName ?></option>
                            <?php } ?>
                            </select>
                            </div>
                            <div class="form-group">
                            <label id="FI" for="imageselect"> Existing Image: <img src="Upload/<?php echo $ImageUpdate;?>" width="170" height="70px" ></label>
                            <input disabled type="File" class="form-control" name="image" id="imageselect">
                            </div>
                            <div class="form-group">
                            <label id="FI" for="postarea">Post:</label>
                            <textarea disabled class="form-control" name="post" id="postarea" cols="30" rows="10"><?php echo $PostUpdate; ?>"</textarea>

                            <br>
                            <input class="btn btn-danger btn-block" type="submit" name="submit" value="Delete Post">
                            <br>
                        </fieldset>
                    </form>
                </div>
                <div class="table-responsive">
                </div>        

        </div>
        </div>
    </div>
    <div id="footer">
           <hr>
           <p>Theme By| Technology Hub |&copy;2020-2021 --- All right reserved.</p>
           <a style="color: white; text-decoration:none; cursor:pointer; font-weight:bold;" href="#"></a>
           <p>This is a test</p> 
           <hr>
           <hr>
        </div>
        <div style="height: 10px; background:#27aae1;"></div>
    </body>
</html> 