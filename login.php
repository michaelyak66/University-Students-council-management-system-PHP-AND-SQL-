<?php require_once("include/db.php"); ?>
<?php require_once("include/sessions.php"); ?>
<?php require_once("include/Funtions.php"); ?>

<?php
if(isset($_POST["submit"])){ 
    $Username = mysqli_real_escape_string($connection, $_POST["Username"]);
    $Password = mysqli_real_escape_string($connection, $_POST["Password"]);

    if(empty($Username)||empty($Password)){
        $_SESSION["ERRORMessage"] =  "All fields must be filled out";
        Redirect_to("login.php");
    }else{
        $Found_Account=login($Username, $Password);
        $_SESSION["User_Id"]=$Found_Account["id"];
        $_SESSION["Username"]=$Found_Account["username"];
        if($Found_Account){
            $_SESSION["SuccessMessage"] =  "Welcome {$_SESSION["Username"]}";
            Redirect_to("dashboard.php");
        }else{
        $_SESSION["ERRORMessage"] =  "Invalid Username / Password";
        Redirect_to("login.php");
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Dashboard</title>
        <link rel="icon" type="image/png" href="logo.ico"/>
        <link rel="stylesheet" href="css/publicstyles.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script defer src="fontawesome/js/all.min.js"></script>
        <link rel="stylesheet" href="fontawesome/js/all.min.css">
        <style>
            #FI{
                color: rgb(251, 174, 44);
                font-family: 'Times New Roman', Times, serif;
                font-size: 1.2em;
            }
            body{
                background-color: #fff;
            }
            .bb{
                margin: 5px;
            }
            .m{
                margin: -10px;
            }
            
        </style>
    </head>
    <body>
   <br><br><br><br><br><br><br><br><br>
    <div class="container">
    <div class="row">
     
        <!--ending od sidebar--> 
        <div class="col-sm-offset-4 col-sm-4">
            <br><br><br><br><br>
        <div> <?php echo Message();
                        echo SuccessMessage(); 
                  ?>
            </div>
            <h2>Welcome back!</h2>
                <div>
                    <form action="login.php" method="POST">
                        <fieldset>
                            <div class="form-group">
                            <label id="FI" for="Username"> Username:</label>

                                <div class=" pa input-group input-group-lg">
                                    <span class="input-group-addon"><span class="m glyphicon glyphicon-user text-success"></span></span>
                                    <input class="form-control" type="text" name="Username" id="Username" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group">
                            <label id="FI" for="Password"> Password:</label>
                            <div class="input-group input-group-lg">
                                    <span class="input-group-addon"><span class="m glyphicon glyphicon-lock text-success"></span></span>
                                    <input class="form-control" type="password" name="Password" id="Password" placeholder="Password">
                                </div>
                            </div>
                            <br>
                            <input class="btn btn-success btn-block" type="submit" name="submit" value="login">
                            <br>
                        </fieldset>
                    </form>
                </div>
              
        </div>
        </div>
    </div>
    <script>
        setTimeout(function() {
            $('.loader_bg').fadeToggle();
        }, 1500);
    </script>
    <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('load', function () {
        if (window.pageYOffset > 100) {
          nav.classList.add('bg-light', 'shadow');
        } else {
          nav.classList.add('bg-light', 'shadow');
        }
      });
    </script>
    </body>
</html> 