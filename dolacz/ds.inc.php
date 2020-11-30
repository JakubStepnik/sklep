<?php 
define('MB', 1048576);
if(isset($_POST["dodaj_submit"])){
$nazwa = $_POST["nazwa"];
$kategoria = $_POST["kategoria"];
$marka = $_POST["marka"];
$ilosc = $_POST["ilosc"];
$cena = $_POST["cena"];
require_once 'db.inc.php';
require_once 'functions.inc.php ';
if(emptyInputStuff($nazwa,$kategoria,$marka,$ilosc,$cena) !== false){
header("location: ../dodaj_produkt.php?error=emptyInput");
exit();
} 
if(invailidCategory($conn,$kategoria) == false){
    header("location: ../dodaj_produkt.php?error=invalidCategory");
    exit();
}
        
    if(invailidBrand($conn,$marka) == false){
        header("location: ../dodaj_produkt.php?error=invalidBrand");
        exit();
    }
    $file=$_FILES['file'];
    print_r($file);
    $FileName=$_FILES['file']['name'];

    $FileTmpName=$_FILES['file']['tmp_name'];
    $FileSize=$_FILES['file']['size'];
    $FileError=$_FILES['file']['error'];
    $FileType=$_FILES['file']['type'];
    $fileExt = explode('.',$FileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg','jpeg','png');
    if(in_array($fileActualExt,$allowed)){
        if($FileError===0){
            if($FileSize<5 *MB){
                $fileNameNew=uniqid('',true).".".$fileActualExt;
                $fileDestination= '../img_produkt/'.$fileNameNew;
                move_uploaded_file($FileTmpName,$fileDestination);
                createStuff($conn,$nazwa,$kategoria,$marka,$ilosc,$cena,$fileNameNew);
            }else {
                header("location: ../dodaj_produkt.php?error=toobig");
                exit();
            }
        }else {
            header("location: ../dodaj_produkt.php?error=wrongimg");
            exit();
        }
    }else {
        header("location: ../dodaj_produkt.php?error=wrongimgtype");
        exit();
    }
    
}

else {
    header("location:../dodaj_produkt.php?error=none");
    exit();
}
?>
