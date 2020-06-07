<?php

session_start();
session_unset();
session_regenerate_id(true);

setcookie("cookie_email",$_COOKIE["cookie_email"],time()-3600,"/");
setcookie("cookie_password",$_COOKIE["cookie_password"],time()-3600,"/");

if(!isset($_SESSION["user"]))
{
    header("Location: ../login.php");
}

?>