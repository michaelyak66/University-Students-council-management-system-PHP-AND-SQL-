
<?php require_once("include/db.php"); ?>

<?php require_once("include/sessions.php"); ?>

<?php require_once("include/Funtions.php"); ?>

<?php ?>




<!DOCTYPE html>

<html>

    <head>

        <title>100 level</title>
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

    <div>

        <!--ending od sidebar--> 

        <div class="col-sm-12">

            <hr><h1>List of 100 Level Students</h1> <hr> <br>
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

                            

                        </tr>

                        <?php

                        global $connection;

                        $ViewQuery = "SELECT * FROM category WHERE level ='100' ORDER BY id desc";

                        $Execute=mysqli_query($connection, $ViewQuery);

                        $SrNo=0;

                        while($DataRows=mysqli_fetch_array($Execute)){

                            $ID = $DataRows["id"];

                            $DateTime = $DataRows["datetime"];

                            $CategoryName = $DataRows["name"];

                            $Department = $DataRows["dept"];

                            $level = $DataRows["level"];

                            $amount = $DataRows["amount"];

                            $matNum = $DataRows["matnum"];
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

                        </tr>

                    <?php } ?>

                    </table>

                </div>

        </div>

        </div>

    </div>

    </body>

</html> 