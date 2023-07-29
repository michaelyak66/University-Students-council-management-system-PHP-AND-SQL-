<?php require_once("include/db.php"); ?>

<?php require_once("include/sessions.php"); ?>

<?php require_once("include/Funtions.php"); ?>

<?php confirm_login(); ?>



<!DOCTYPE html>

<html>

    <head>

        <title>Comments</title>
        <title>SRA</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="logo.ico"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="messages/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="messages/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="messages/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="messages/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="messages/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="messages/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="messages/css/util.css">
	<link rel="stylesheet" type="text/css" href="messages/css/main.css">
<!--===============================================================================================-->

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
                <li><a href="dashboard.php"> <span class="glyphicon glyphicon-th"></span> Dashboard</a></li>
                <li><a href="AddNewPost.php"><span class="glyphicon glyphicon-list-alt"></span> &nbsp;Add New Post</a></li>
                <li><a href="categories.php"><span class="glyphicon glyphicon-tags"></span> &nbsp;Student Dues</a></li>
                <li><a href="admins.php"><span class="glyphicon glyphicon-user"></span> &nbsp;Manage Admins</a></li>
                <li class="active"><a href="comments.php"><span class="glyphicon glyphicon-comment"></span> &nbsp;Messages
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

        <div class="container-contact100">
		<div class="wrap-contact100">
				<span class="contact100-form">
                <span class="contact100-form-title">
					Messages
				</span>
                <?php
$link = mysqli_connect('localhost', 'root', '', 'phpcms');
// Create connection
// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

$sql = "SELECT message, date FROM message ORDER BY id desc";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<hr><br>". $row["message"]. "<br><br>" .$row["date"]."<hr>";
    }
} else {
    echo "0 results";
}

$link->close();
?>
  <div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
							<a style="color: white;" href="https://api.whatsapp.com/send?text=Hello, I just wrote my suggestion on the veritas anonymous website follow the link to drop your own review about the school http://vuna-sra-anonymous.epizy.com/" data-action="share/whatsapp/share">Share                                     via Whatsapp</a>								<input type="submit" value="">
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
		</div>
            </span>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

        </div>

    </div>

   

    </body>

</html> 