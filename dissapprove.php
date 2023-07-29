<?php require_once("include/db.php"); ?>
<?php require_once("include/sessions.php"); ?>
<?php require_once("include/Funtions.php"); ?>
<?php 
    if(isset($_GET["id"])){
        $IdFromURL = $_GET["id"];
        $Query = "UPDATE test SET status = 'OFF' WHERE id='$IdFromURL' ";
        $Execute = mysqli_query($connection, $Query); 
        if($Execute){
            $_SESSION["SuccessMessage"]="Comment Dis-approved Successfully";
            Redirect_to("comments.php");
        }else{
            $_SESSION["ErrorMessage"]="Something Went Wrong Try Again";
            Redirect_to("comments.php");
        }
    }
 ?>