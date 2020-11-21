<?php
session_start();
if(isset($_POST["edycja_submit"])){
    $Imie=$_POST["Imie"];
    $Nazwisko=$_POST["Nazwisko"];
    $NT=$_POST["Numer_Telefonu"];
    $Adres=$_POST["Adres"];
    $Miasto=$_POST["Miasto"];
    $KP=$_POST["Kod_Pocztowy"];
    require_once 'db.inc.php';
    if(isset($_SESSION["useruid"])){
        $usersUid=$_SESSION["useruid"];
       }
        if(!empty($Imie)){
            $sql="UPDATE `users` SET `Imie`='".$Imie."' where  `usersUid`='".$usersUid."' ";
            
            $result=mysqli_query($conn,$sql);
        }
        if(!empty($Nazwisko)){
            $sql="UPDATE `users` SET `Nazwisko`='".$Nazwisko."' where  `usersUid`='".$usersUid."' ";
            
            $result=mysqli_query($conn,$sql);
        }
        if(!empty($NT)){
            $sql="UPDATE `users` SET `numertelefonu`='".$NT."' where  `usersUid`='".$usersUid."' ";
            
            $result=mysqli_query($conn,$sql);
        }
        if(!empty($Adres)){
            $sql="UPDATE `users` SET `adres`='".$Adres."' where  `usersUid`='".$usersUid."' ";
            
            $result=mysqli_query($conn,$sql);
        }
        if(!empty($Miasto)){
            $sql="UPDATE `users` SET `miasto`='".$Miasto."' where  `usersUid`='".$usersUid."' ";
            
            $result=mysqli_query($conn,$sql);
        }
        if(!empty($KP)){
            $sql="UPDATE `users` SET `kodpocztowy`='".$KP."' where  `usersUid`='".$usersUid."' ";
            
            $result=mysqli_query($conn,$sql);
        }

    if($result){
        header("location: ../edycja.php?error=none");
    }else {
        header("location: ../edycja.php?error=notchange");
    }
    mysqli_close($conn);
}
   ?>