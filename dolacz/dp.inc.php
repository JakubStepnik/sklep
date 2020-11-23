<?php 
if(isset($_POST["dodaj_submit"])){
$username = $_POST["login"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];
$pwdrepeat = $_POST["pwdrepeat"];
$imie = $_POST["imie"];
$nazwisko = $_POST["nazwisko"];
$NT=$_POST["nt"];
$perm= $_POST["perm"];
require_once 'db.inc.php';
require_once 'functions.inc.php ';
if(emptyInputSignupM($username,$email,$pwd,$pwdrepeat,$imie,$nazwisko,$NT,$perm) !== false){
header("location: ../dodaj_pracownika.php?error=emptyInputSignup");
exit();
}
    if(invailiLoginM($username) !== false){
        header("location: ../dodaj_pracownika.php?error=invalidUid");
        exit();
     }
    if(invailidEmail($email) !== false){
        header("location: ../dodaj_pracownika.php?error=invalidEmail");
        exit();
    }
        
    if(pwdMatch($pwd,$pwdrepeat) !== false){
        header("location: ../dodaj_pracownika.php?error=passnotmach");
        exit();
    }
  
    if(uidExistsM($conn,$username,$email) !== false){
        header("location: ../dodaj_pracownika.php?error=usernametaken");
        exit();
    }
    createMod($conn,$username,$email,$pwd,$imie,$nazwisko,$NT,$perm);
}

else {
    header("location:../dodaj_pracownika.php");
    exit();
}
?>
