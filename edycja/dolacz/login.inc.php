<?php 
if(isset($_POST["login_submit"])){
    $username=$_POST["login_uid"];
    $pwd=$_POST["login_pwd"];
    require_once 'db.inc.php';
    require_once 'functions.inc.php';
    if(emptyInputLogin($username,$pwd) !== false){
        header("location: ../logowanie.php?error=emptyInputLogin");
        exit();
    }
    loginUser($conn,$username,$pwd);

}else {
    header("location: ../logowanie.php?error=niedziala");
}
?>!