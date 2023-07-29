<?php
session_start();
function Message(){
    if(isset($_SESSION["ERRORMessage"])){
        $Output="<div class=\"alert alert-danger\">";
        $Output.=htmlentities($_SESSION["ERRORMessage"]);
        $Output.="</div>";
        $_SESSION["ERRORMessage"]=null;
        return $Output;
    }
}
function SuccessMessage(){
    if(isset($_SESSION["SuccessMessage"])){
        $Output="<div class=\"alert alert-success\">";
        $Output.=htmlentities($_SESSION["SuccessMessage"]);
        $Output.="</div>";
        $_SESSION["SuccessMessage"]=null;
        return $Output;
    }
}
?>