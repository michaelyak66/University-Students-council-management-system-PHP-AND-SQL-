<?php require_once("include/db.php"); ?>
<?php require_once("include/sessions.php"); ?>
<?php require_once("include/Funtions.php"); ?>
<?php 
    if(isset($_GET["id"])){
        $IdFromURL = $_GET["id"];
        $Query = "DELETE FROM test WHERE id='$IdFromURL' ";
        $Execute = mysqli_query($connection, $Query); 
        if($Execute){
            $_SESSION["SuccessMessage"]="Comment Deleted Successfully";
            Redirect_to("comments.php");
        }else{
            $_SESSION["ErrorMessage"]="Something Went Wrong Try Again";
            Redirect_to("comments.php");
        }
    }
 ?>