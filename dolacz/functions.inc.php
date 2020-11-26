<?php 
function emptyInputSignup($username,$email,$pwd,$pwdrepeat) {
    $result;
    if(empty($username) || empty($email) || empty($pwd) || empty($pwdrepeat)){
    $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function emptyInputSignupM($username,$email,$pwd,$pwdrepeat,$imie,$nazwisko,$NT,$perm) {
    $result;
    if(empty($username) || empty($email) || empty($pwd) || empty($pwdrepeat) || empty($imie) || empty($nazwisko) ||  empty($NT)  ||  empty($perm)  ){
    $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function emptyInputStuff($nazwa,$kategoria,$marka,$ilosc,$cena) {
    $result;
    if(empty($nazwa) || empty($kategoria) || empty($marka) || empty($ilosc) || empty($cena)){
    $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function invailidUid($username) {
    $result;
    if(preg_match("/^[a-zA-Z0-9]*&/",$username)){
    $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function invailiLoginM($username) {
    $result;
    if(preg_match("/^[a-zA-Z0-9]*&/",$username)){
    $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invailidEmail($email) {
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd,$pwdrepeat) {
    $result;
    if($pwd !== $pwdrepeat){
    $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function uidExists($conn,$username,$email)  {
$sql = "SELECT * FROM users where usersUid = ? OR usersEmail = ?;";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    header("location: ../logowanie.php?error=stmtfailed");
    exit();
}
mysqli_stmt_bind_param($stmt,"ss",$username,$email);
mysqli_stmt_execute($stmt);
$resultData=mysqli_stmt_get_result($stmt);
if($row = mysqli_fetch_assoc($resultData)){
return $row;
 
}else {
$result = false;
return $result;
}
mysqli_stmt_close($stmt);
}
function createUser($conn,$username,$email,$pwd)  {

    $sql = "INSERT INTO users(usersUid,usersEmail,usersPwd) VALUES (?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../logowanie.php?error=stmtfailed");
        exit();
    }
    $hashedPwd=password_hash($pwd,PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt,"sss",$username,$email,$hashedPwd);
    mysqli_stmt_execute($stmt);
    
    mysqli_stmt_close($stmt);
    header("location: ../logowanie.php?error=none");
    exit();
    }
  
    function createMod($conn,$username,$email,$pwd,$imie,$nazwisko,$NT,$perm)  {

        $sql = "INSERT INTO mods(modlogin,modemail,modpwd,perm,imie,nazwisko,numertelefonu) VALUES (?,?,?,?,?,?,?);";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("location: ../logowanie.php?error=stmtfailed");
            exit();
        }
        $hashedPwd=password_hash($pwd,PASSWORD_DEFAULT);
    
        mysqli_stmt_bind_param($stmt,"sssssss",$username,$email,$hashedPwd,$imie,$nazwisko,$NT,$perm);
        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_close($stmt);
        header("location: ../logowanie.php?error=none");
        exit();
        }
    function emptyInputLogin($username,$pwd) {
        $result;
        if(empty($username) || empty($pwd)){
        $result = true;
        } else {
            $result = false;
        }
        return $result;
    }
    function uidExistsM($conn,$username){
        $sql = "SELECT * FROM mods where modlogin = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("location: ../logowanie.php?error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt,"s",$username);
        mysqli_stmt_execute($stmt);
        $resultData=mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($resultData)){
        return $row;
         
        }else {
        $result = false;
        return $result;
        }
        mysqli_stmt_close($stmt);
        }




    function loginUser($conn,$username,$pwd)  {
        $uidExists=uidExists($conn,$username,$username);
        $uidExistsM=uidExistsM($conn,$username);
        if($uidExists===false && $uidExistsM===false){
            header("location: ../logowanie.php?error=wronglogin");
            exit();
            
        }
            
        if(!$uidExistsM===false){
            $pwdHashedM = $uidExistsM["modpwd"];
            $checkPwdM = password_verify($pwd, $pwdHashedM);
            if($checkPwdM === false){
                header("location: ../logowanie.php?error=wrongpassowrd");
                exit();
            }else if($checkPwdM === true){
                session_start();
                $_SESSION["id_mod"]=$uidExistsM["id_mod"];
                $_SESSION["modlogin"]=$uidExistsM["modlogin"];
                $_SESSION["perm"]=$uidExistsM["perm"];
                header("Location: ../panel_adm.php");
                exit();
        }
        }
        $pwdHashed = $uidExists["usersPwd"];
        $checkPwd = password_verify($pwd,$pwdHashed);
        if( $checkPwd === false){
            header("location: ../logowanie.php?error=wrongpassowrd");
            exit();
        }else if($checkPwd === true){
            session_start();
            $_SESSION["userid"]=$uidExists["usersId"];
            $_SESSION["useruid"]=$uidExists["usersUid"];
            header("Location: ../index.php");
            exit();
    }
}

function invailidCategory($conn,$kategoria){
    $sql = "SELECT * FROM categories where name = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../dodaj_produkt.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"s",$kategoria);
    mysqli_stmt_execute($stmt);
    $resultData=mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData)){
    return $row;
     
    }else {
    $result = false;
    return $result;
    }
    mysqli_stmt_close($stmt);
    }

    function invailidBrand($conn,$marka){
        $sql = "SELECT * FROM brands where bname = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("location: ../dodaj_produkt.php?error=z");
            exit();
        }
        mysqli_stmt_bind_param($stmt,"s",$marka);
        mysqli_stmt_execute($stmt);
        $resultData=mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($resultData)){
        return $row;
         
        }else {
        $result = false;
        return $result;
        }
        mysqli_stmt_close($stmt);
        }
        function  createStuff($conn,$nazwa,$kategoria,$marka,$ilosc,$cena)  {
            $sql_idcategory="select * from categories where name='".$kategoria."'";
            $query_idcategory=mysqli_query($conn,$sql_idcategory);
            $row_idcategory=mysqli_fetch_assoc($query_idcategory);
            $idcategory=$row_idcategory["idcategory"];
            $sql_idbrand="select * from brands where bname='".$marka."'";
            $query_idbrand=mysqli_query($conn,$sql_idbrand);
            $row_idbrand=mysqli_fetch_assoc($query_idbrand);
            $idbrand=$row_idbrand["idbrand"];
            $sql = "INSERT INTO stuff(name,id_category,id_brand,quantity,price) VALUES (?,?,?,?,?);";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("location: ../dodaj_produkt.php?error=f");
                exit();
            }
        
            mysqli_stmt_bind_param($stmt,"sssss",$nazwa,$idcategory,$idbrand,$ilosc,$cena);
            mysqli_stmt_execute($stmt);
            
            mysqli_stmt_close($stmt);
            header("location: ../dodaj_produkt.php?error=none");
            exit();
            }
    ?>