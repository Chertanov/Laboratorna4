<?php
if(isset($_COOKIE["username"])){
    echo "Current username value in Cookies is equal to: ".$_COOKIE["username"].".<br>";
}else{
    echo "there was a problem getting Cookies value<br>";
}
session_start();
if(isset($_SESSION["username"])){
    echo "Current username value in Session is equal to: ".$_SESSION["username"].".<br>";
}else{
    echo "there was a problem getting Session value<br>";
}
?>