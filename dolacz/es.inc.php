
<?php
if(isset($_POST["edycja_submit"])){
    $snazwa = $_POST["snazwa"];
    $nnazwa = $_POST["nnazwa"];
    $kategoria = $_POST["kategoria"];
    $marka = $_POST["marka"];
    $ilosc = $_POST["ilosc"];
    $cena = $_POST["cena"];
    //$NT=$_POST["nt"];
    require_once 'db.inc.php';
    if(!empty($snazwa)){

        if(!empty($kategoria)){
            $sql_idcategory="select * from categories where name='".$kategoria."'";
            $query_idcategory=mysqli_query($conn,$sql_idcategory);
            $row_idcategory=mysqli_fetch_assoc($query_idcategory);
            $idcategory=$row_idcategory["idcategory"];
            $sql="UPDATE `stuff` SET `id_category`='".$idcategory."' where  `name`='".$snazwa."' ";
            $result=mysqli_query($conn,$sql);
        }

        if(!empty($marka)){
            $sql_idbrand="select * from brands where bname='".$marka."'";
            $query_idbrand=mysqli_query($conn,$sql_idbrand);
            $row_idbrand=mysqli_fetch_assoc($query_idbrand);
            $idbrand=$row_idbrand["idbrand"];
            $sql="UPDATE `stuff` SET `id_brand`='".$idbrand."' where  `name`='".$snazwa."' ";
            
            $result=mysqli_query($conn,$sql);
        }

        if(!empty($ilosc)){
            $sql="UPDATE `stuff` SET `quantity`='".$ilosc."' where  `name`='".$snazwa."' ";
            
            $result=mysqli_query($conn,$sql);
        }
        
        if(!empty($cena)){
            $sql="UPDATE `stuff` SET `price`='".$cena."' where  `name`='".$snazwa."' ";
            
            $result=mysqli_query($conn,$sql);
        }
        if(!empty($nnazwa)){
            $sql="UPDATE `stuff` SET `name`='".$nnazwa."' where  `name`='".$snazwa."' ";
            
            $result=mysqli_query($conn,$sql);
        }
    if($result){
        header("location: ../edycja_pracownika.php?error=none");
    }
    else {
        header("location: ../edycja_pracownika.php?error=notchange");
    }
    mysqli_close($conn);
}else {
    header("location: ../edycja_pracownika.php?error=notprodukt");
}
}
   ?>