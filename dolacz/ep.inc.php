
<?php
if(isset($_POST["edycja_submit"])){
    $username = $_POST["login"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    $NT=$_POST["nt"];
    $perm= $_POST["perm"];
    $id_mod=$_POST["id_mod"];
    require_once 'db.inc.php';
    if(isset($_SESSION["useruid"])){
        $usersUid=$_SESSION["useruid"];
       }
        if(!empty($username)){
            $sql="UPDATE `mods` SET `modlogin`='".$username."' where  `id_mod`='".$id_mod."' ";
            
            $result=mysqli_query($conn,$sql);
        }
        if(!empty($email)){
            $sql="UPDATE `mods` SET `modemail`='".$email."' where  `id_mod`='".$id_mod."' ";
            $result=mysqli_query($conn,$sql);
        }
        if(!empty($pwd) && ){
            $sql="UPDATE `mods` SET `modlogin`='".$username."' where  `id_mod`='".$id_mod."' ";
            
            $result=mysqli_query($conn,$sql);
        }
        
        if(!empty($NT)){
            $sql="UPDATE `mods` SET `modlogin`='".$username."' where  `id_mod`='".$id_mod."' ";
            
            $result=mysqli_query($conn,$sql);
        }
        if(!empty($Adres)){
            $sql="UPDATE `mods` SET `modlogin`='".$username."' where  `id_mod`='".$id_mod."' ";
            
            $result=mysqli_query($conn,$sql);
        }
        if(!empty($Miasto)){
            $sql="UPDATE `mods` SET `modlogin`='".$username."' where  `id_mod`='".$id_mod."' ";
            
            $result=mysqli_query($conn,$sql);
        }
        if(!empty($KP)){
            $sql="UPDATE `mods` SET `modlogin`='".$username."' where  `id_mod`='".$id_mod."' ";            
            $result=mysqli_query($conn,$sql);
        }

    if($result){
        header("location: ../edycja_pracownika.php?error=none");
    }
    else {
        header("location: ../edycja_pracownika.php?error=notchange");
    }
    mysqli_close($conn);
}
   ?>