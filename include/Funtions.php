<?php require_once("include/sessions.php"); ?>
<?php
function Redirect_to($New_Location){
    header("Location:".$New_Location);
    exit;
}
function login($Username, $Password){
    $Query="SELECT * FROM admin WHERE username='$Username' AND password='$Password'";
    $Execute=mysqli_query(mysqli_connect('localhost', 'root', '', 'phpcms'), $Query);
    if($admin=mysqli_fetch_assoc($Execute)){
        return $admin;
    }else{
        return null;
    }
}
function status(){
    if(isset($_SESSION["User_Id"])){
        return true;
    }
}
function confirm_login(){
    if(!status()){
        $_SESSION["ErrorMessage"]="Login Required!";
        Redirect_to("Login.php");
    }
}
?>