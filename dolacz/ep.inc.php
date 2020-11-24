
<?php
if(isset($_POST["edycja_submit"])){
    $username = $_POST["login"];
    $email = $_POST["email"];
    $oldpwd = $_POST["oldpwd"];
    $newpwd = $_POST["newpwd"];
    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    $NT=$_POST["nt"];
    $perm= $_POST["perm"];
    $id_mod=$_POST["id_mod"];
    require_once 'db.inc.php';
        $pwdHashed="SELECT modpwd from mods where `id_mod`='".$id_mod."' ";
        echo $pwdHashed;
        if(!empty($username)){
            $sql="UPDATE `mods` SET `modlogin`='".$username."' where  `id_mod`='".$id_mod."' ";
            
            $result=mysqli_query($conn,$sql);
        }
        if(!empty($email)){
            $sql="UPDATE `mods` SET `modemail`='".$email."' where  `id_mod`='".$id_mod."' ";
            $result=mysqli_query($conn,$sql);
        }
        if(!empty($oldpwd) && !empty($newpwd)){
            $sql="SELECT * from mods where `id_mod`='".$id_mod."';";
            $wynik=mysqli_query($conn,$sql) or die("błędne zapytanie: $sql");
            $row=mysqli_fetch_assoc($wynik);
            $samepwd=$row['modpwd'];
            if(password_verify($oldpwd,$samepwd)){
                $hashedPwd=password_hash($newpwd,PASSWORD_DEFAULT);
                $sql="UPDATE `mods` SET `modpwd`='".$hashedPwd."' where  `id_mod`='".$id_mod."' ";
                $result=mysqli_query($conn,$sql);
            }
            if(password_verify($oldpwd,$samepwd)==false) {
                header("location: ../edycja_pracownika.php?error=passnot");
                exit();
        }
        }
        if(!empty($imie)){
            $sql="UPDATE `mods` SET `imie`='".$imie."' where  `id_mod`='".$id_mod."' ";
            
            $result=mysqli_query($conn,$sql);
        }
        if(!empty($nazwisko)){
            $sql="UPDATE `mods` SET `nazwisko`='".$nazwisko."' where  `id_mod`='".$id_mod."' ";
            
            $result=mysqli_query($conn,$sql);
        }
        
        if(!empty($NT)){
            $sql="UPDATE `mods` SET `numertelefonu`='".$NT."' where  `id_mod`='".$id_mod."' ";
            
            $result=mysqli_query($conn,$sql);
        }
        if(!empty($perm)){
            $sql="UPDATE `mods` SET `perm`='".$perm."' where  `id_mod`='".$id_mod."' ";
            
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