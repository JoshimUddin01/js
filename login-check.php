<?php 

if(isset($_REQUEST['login'])) {
    setcookie("login_info" , "true", time()+3600);
    header("location: index.php?sss");
}

?>