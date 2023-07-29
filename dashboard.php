<?php require_once("include/db.php"); ?>
<?php require_once("include/sessions.php"); ?>
<?php require_once("include/Funtions.php"); ?>
<?php confirm_login(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Dashboard</title>
        <link rel="icon" type="image/png" href="logo.ico"/>
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/adminstyles.css">
    </head>
    <body>
       
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-2">
            <br>
            <ul id="side_Menue" class="nav nav-pills nav-stacked">
                <li class="active"><a href="dashboard.php"> <span class="glyphicon glyphicon-th"></span> Dashboard</a></li>
                <li><a href="AddNewPost.php"><span class="glyphicon glyphicon-list-alt"></span> &nbsp;Add New Post</a></li>
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
        <!--ending of sidebar-->  
        <div class="col-sm-10">
        <div> <?php echo Message(); echo SuccessMessage(); ?> </div>
        <br>
            <h1>Admin Dashboard</h1>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>No</th>
                        <th>Post Title</th>
                        <th>Date & Time</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th>Banner</th>
                        <th>Comments</th>
                        <th>Action</th>
                        <th>Details</th>
                    </tr>
                    <?php
                    $ViewQuery = "SELECT * FROM admin_panel ORDER BY id desc;";
                    $Execute = mysqli_query($connection, $ViewQuery);
                    $SrNo = 0;
                    while($DataRows=mysqli_fetch_array($Execute)){
                        $Id = $DataRows["id"];
                        $DateTime = $DataRows["datetime"];
                        $Title = $DataRows["title"];
                        $Category = $DataRows["category"];
                        $Admin = $DataRows["author"];
                        $Image = $DataRows["image"];
                        $Post = $DataRows["post"];
                        $SrNo++;
                    ?>
                    <tr>
                        <td><?php echo $SrNo; ?></td>
                        <td style="color:#5e5eff"><?php
                        if(strlen($Title)>20){$Title=substr($Title,0,20.).'...';}echo $Title; ?></td>
                        <td><?php
                        if(strlen($DateTime)>11){$DateTime=substr($DateTime,0,11.).'...';}echo $DateTime; ?></td>
                        <td><?php echo $Admin ?></td>
                        <td><?php echo $Category ?></td>
                        <td><img src="Upload/<?php echo $Image ?>" width="170" height="50px"> </td>
                        <td>
                            <?php
                                $Query="SELECT COUNT(*) FROM test WHERE admin_panel_id='$Id' AND status ='ON'";
                                $ExecuteApproved = mysqli_query($connection, $Query);
                                $RowsApproved = mysqli_fetch_array($ExecuteApproved);
                                $TotalApproved=array_shift($RowsApproved);
                                if($TotalApproved>0){
                            ?>
                            <span class="label pull-right label-success">   
                            <?php echo $TotalApproved; ?>
                            </span> 
                            <?php } ?> 

                            <?php
                                $QueryUnApproved="SELECT COUNT(*) FROM test WHERE admin_panel_id='$Id' AND status ='OFF'";
                                $ExecuteUnApproved = mysqli_query($connection, $QueryUnApproved);
                                $RowsUnApproved = mysqli_fetch_array($ExecuteUnApproved);
                                $TotalUnApproved=array_shift($RowsUnApproved);
                                if($TotalUnApproved>0){
                            ?>
                            <span class="label pull-left label-danger">   
                            <?php echo $TotalUnApproved; ?>
                            </span> 
                            <?php } ?> 

                        </td>
                        <td>
                            <a href="EditPost.php?Edit=<?php echo $Id?>" target= "_blank">
                            <span class="btn btn-warning">Edit</span>
                            </a>
                            <a href="DeletePost.php?Delete=<?php echo $Id?>">
                            <span class="btn btn-danger">Delete</span>
                            </a>
                        </td>
                        <td>
                            <a href="fp.php?id=<?php echo $Id;?>" target= "_blank">
                                <span class="btn btn-primary">Live Preview</span>
                            </a>
                    </td>
                    </tr>
                    <?php }?>
                </table>
            </div>

        </div>
        </div>
    </div>
        <div style="height: 10px; background:#27aae1;"></div>
    </body>
</html> 