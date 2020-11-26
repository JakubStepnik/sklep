<?php 
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
    createStuff($conn,$nazwa,$kategoria,$marka,$ilosc,$cena);
}

else {
    header("location:../dodaj_produkt.php");
    exit();
}
?>
