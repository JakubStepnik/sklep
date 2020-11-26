<?php 
if(isset($_POST["usun"])){
    $login=$_POST['login'];
    require_once 'db.inc.php';
    if(!empty($login)){
$sql="DELETE FROM mods WHERE modlogin='".$login."';";
    }
$result=mysqli_query($conn,$sql);
if($result){
    header("location: ../usun_pracownika.php?error=none");
}else {
    header("location: ../usun_pracownika.php?error=notchange");
}
mysqli_close($conn);
}
?>