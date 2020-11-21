<?php 
if(isset($_POST["submit"])){
$username = $_POST["uid"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];
$pwdrepeat = $_POST["pwdrepeat"];
require_once 'db.inc.php';
require_once 'functions.inc.php ';
if(emptyInputSignup($username,$email,$pwd,$pwdrepeat) !== false){
header("location: ../logowanie.php?error=emptyInputSignup");
exit();
}
    if(invailidUid($username) !== false){
        header("location: ../logowanie.php?error=invalidUid");
        exit();
     }
    if(invailidEmail($email) !== false){
        header("location: ../logowanie.php?error=invalidEmail");
        exit();
    }
        
    if(pwdMatch($pwd,$pwdrepeat) !== false){
        header("location: ../logowanie.php?error=passnotmach");
        exit();
    }
  
    if(uidExists($conn,$username,$email) !== false){
        header("location: ../logowanie.php?error=usernametaken");
        exit();
    }
    createUser($conn,$username,$email,$pwd);
}

else {
    header("location:../logowanie.php");
    exit();
}

?>