<?php 
include_once "head.php";
echo "</head>";
include_once "nav.php";
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
        
        <div class="col-9 " style="padding:15px;background-color:#24273C">
            <section id="cover" class="min-vh-50">
                <div id="cover-caption">
                    <div class="container">
                        <div class="row text-white">
                            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                                <h4 class="display-12 py-2 text-center " >Dodaj pracownika</h4>
                              
                                    <form action="dolacz/dp.inc.php" class="justify-content-center" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Login" name="login">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="pwd" name="pwd">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="pwdrepeat" name="pwdrepeat">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Imie" name="imie">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nazwisko" name="nazwisko">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control"  minlength="9" maxlength="9" placeholder="Numer Telefonu" name="nt">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="number_perm" name="perm">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg" name="dodaj_submit">Zapisz</button>
                                    </form>
                                    <?php 
                                    if(isset($_GET["error"])){
                                      if($_GET["error"]=="none"){
                                        echo "<span style='color:pink' <p>Zmiany zostały zapisane</p></span>";
                                      }
                                      else if($_GET["error"]=="notchange"){
                                        echo "<span style='color:pink' <p>Niczego nie zmieniono!</p></span>";
                                      }
                                      else if($_GET["error"]=="invalidUid"){
                                        echo "<span style='color:pink' <p>login się nie zgadza</p></span>";
                                      }
                                      else if($_GET["error"]=="invalidEmail"){
                                        echo "<span style='color:pink' <p>zły email!</p></span>";
                                      }
                                      else if($_GET["error"]=="passnotmach"){
                                        echo "<span style='color:pink' <p>Hasło jest zajęte</p></span>";
                                      }
                                      else if($_GET["error"]=="usernametaken"){
                                        echo "<span style='color:pink' <p>już taki nick jest zajęty</p></span>";
                                      }
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
                    
                </div>  
                

 </div>
<script src="bootstrap/jquery.js"></script>
            <script src="bootstrap/bootstrap.bundle.min.js"></script>
        </body>
    
</html>