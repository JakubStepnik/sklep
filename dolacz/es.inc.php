<?php
define('MB', 1048576);
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
                $sql_img="select * from stuff where name='".$snazwa."'";
                $query_img=mysqli_query($conn,$sql_img);
                $row_img=mysqli_fetch_assoc($query_img);
                $old_src_img=$row_img["src_img"];
                if(file_exists("../img_produkt/$old_src_img")){
                    unlink("../img_produkt/$old_src_img");
                }else {
                    header("location: ../edytuj_produkt.php?error='imgnotfound");
                    exit();
                }
                $fileNameNew=uniqid('',true).".".$fileActualExt;
                $fileDestination= '../img_produkt/'.$fileNameNew;
                move_uploaded_file($FileTmpName,$fileDestination);
                $sql="UPDATE `stuff` SET `src_img`='".$fileNameNew."' where  `name`='".$snazwa."' ";
                $result=mysqli_query($conn,$sql);
            }else {
                header("location: ../edytuj_produkt.php?error=toobig");
                exit();
            }
        }else {
            header("location: ../edytuj_produkt.php?error=wrongimg");
            exit();
        }
    }else {
        header("location: ../edytuj_produkt.php?error=wrongimgtype");
        exit();
    }
    if($result){
        header("location: ../edytuj_produkt.php?error=none");
    }
    else {
        header("location: ../edytuj_produkt.php?error=notchange");
    }
    mysqli_close($conn);
}else {
    header("location: ../edytuj_produkt.php?error=notprodukt");
}
}
   ?>