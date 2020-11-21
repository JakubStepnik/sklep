<?php 
 include_once "head.php";
 echo '</head>';
include_once "nav.php";
require_once 'dolacz/db.inc.php';
?>
         
          <!--BODY-->
          <div style="margin-top:45.5px;" >
             <!--LEFT-->
            <div class="obserwowani" style="position: fixed">
              
              <!--LEFT1-->
              <div class="row">
                <div class="d-flex justify-content-between blok-700">
                <div class=col-1>
              <div class="kolo">
         <svg height="50" width="50">
   <circle cx="17" cy="25" r="15" stroke-width="3" fill="grey" />
</svg>
</div>
<svg style="  width: 100%;height: 100% ;position: absolute;top: 30;left: 15;"height="25" width="30">
  <circle cx="25" cy="5" r="5" stroke-width="3" fill="green"/>
</svg>
</div>
<div class="row " style="position: relative; left:-34px;">
<div class="col-lg-12 col-sm-10 napis-obserwowani  text-truncate" >H2p_żyd</div> 
</div>
</div>
</div>
 <!--LEFT2-->
              <div class="row">
                <div class="d-flex justify-content-between blok-700">
                <div class=col-1>
              <div class="kolo">
         <svg height="50" width="50">
   <circle cx="17" cy="25" r="15" stroke-width="3" fill="grey" />
</svg>
</div>
<svg style="  width: 100%;height: 100% ;position: absolute;top: 30;left: 15;"height="25" width="30">
  <circle cx="25" cy="5" r="5" stroke-width="3" fill="green"/>
</svg>
</div>
<div class="row " style="position: relative; left:-34px;">
  <div class="col-lg-12 col-sm-10 napis-obserwowani  text-truncate" >H2p_żyd</div> 
  </div>
</div>
</div>
 <!--LEFT3-->
 <div class="row">
  <div class="d-flex justify-content-between blok-700">
  <div class=col-1>
<div class="kolo">
<svg height="50" width="50">
<circle cx="17" cy="25" r="15" stroke-width="3" fill="grey" />
</svg>
</div>
<svg style="  width: 100%;height: 100% ;position: absolute;top: 30;left: 15;"height="25" width="30">
<circle cx="25" cy="5" r="5" stroke-width="3" fill="green"/>
</svg>
</div>
<div class="row " style="position: relative; left:-34px;">
  <div class="col-lg-12 col-sm-10 napis-obserwowani  text-truncate" >H2p_żyd</div> 
  </div>
</div>
</div>
</div>
<!--Ustawienia-->
<div class="lorem">
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