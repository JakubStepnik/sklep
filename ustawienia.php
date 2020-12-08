<?php 
 include_once "head.php";
 echo '</head>';
include_once "nav.php";
require_once 'dolacz/db.inc.php';
?>
         
          <!--BODY-->
          <div style="margin-top:45.5px;" >
            
<div class="container">
    <div class="row flex-column  nomargin align-items-center">
        <div class="col-9 " style="padding:15px;background-color:#24273C" >
            <section id="cover" class="min-vh-50" >
                <div id="cover-caption" >
                    <div class="container" >
                        <div class="row text-white" >
                            <h4 class="w-100 text-center">MOJE DANE</h4>
                            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 p-4">
                             <?php 
                                $sql = "SELECT * FROM `users` WHERE usersId='".$_SESSION['userid']."';";
                                $result=mysqli_query($conn,$sql);
                                while($row=mysqli_fetch_assoc($result)){
                                echo
                                '<div class="mb-1">Imie:</div>
                                <div class="mb-1 h6" style="word-wrap: break-word">'."{$row['Imie']} </div>".
                                '<div class="mb-1">Nazwisko:</div>
                                <div class="mb-1 h6" style="word-wrap: break-word">'."{$row['Nazwisko']} </div>".
                                '<div class="mb-1">Numer Telefonu:</div>
                                <div class="mb-1 h6" style="word-wrap: break-word">'."{$row['numertelefonu']} </div>".
                                '<div class="mb-1">Adres:</div>
                                <div class="mb-1 h6" style="word-wrap: break-word">'."{$row['adres']} </div>".
                                '<div class="mb-1">Miasto:</div>
                                <div class="mb-1 h6" style="word-wrap: break-word">'."{$row['miasto']} </div>".
                                '<div class="mb-1">Kod Pocztowy:</div>
                                <div class="mb-1 h6" style="word-wrap: break-word">'."{$row['kodpocztowy']} </div>";
                                }
                                ?>
                            </div>
                            <div class="w-100 text-right">
                            <form action="edycja.php">
                                <input class="btn btn-primary btn-lg" type="submit" value="Edytuj"/>
                            </form>
                        </div>
                        </div>
                    </div>
                    
                </div>  
                

 </div>
<script src="bootstrap/jquery.js"></script>
            <script src="bootstrap/bootstrap.bundle.min.js"></script>
        </body>
    
</html>