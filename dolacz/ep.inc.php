<?php 
if(isset($_POST["edycja_submit"])){
$username = "szef";
$email = "szef@gmail.com";
$pwd = "szef";
$pwdrepeat = "szef";
$imie = $_POST["imie"];
$nazwisko = $_POST["nazwisko"];
$NT=$_POST["nt"];
$perm= $_POST["perm"];
require_once 'db.inc.php';
require_once 'functions.inc.php ';
if(emptyInputSignupM($username,$email,$pwd,$pwdrepeat) !== false){
header("location: ../logowanie.php?error=emptyInputSignup");
exit();
}
    if(invailiLoginM($username) !== false){
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
  
    if(uidExistsM($conn,$username,$email) !== false){
        header("location: ../logowanie.php?error=usernametaken");
        exit();
    }
    createMod($conn,$username,$email,$pwd,$imie,$nazwisko,$NT,$perm);
}

else {
    header("location:../logowanie.php");
    exit();
}

?>