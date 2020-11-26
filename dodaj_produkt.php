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
                                <h4 class="display-12 py-2 text-center " >Dodaj Produkt</h4>
                                <form action="dolacz/image.inc.php" class="justify-content-center" method="post" enctype="multipart/from-data">
                                <input type="" name="">
                                </form>
                                    <form action="dolacz/ds.inc.php" class="justify-content-center" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nazwa" name="nazwa">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Kategoria" name="kategoria">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Marka" name="marka">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Ilość" name="ilosc">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Cena" name="cena">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg" name="dodaj_submit">Zapisz</button>
                                    </form>
                                    <?php 
                                    if(isset($_GET["error"])){
                                      if($_GET["error"]=="none"){
                                        echo "<zspan style='color:pink' <p>Dodano nowy produkt</p></span>";
                                      }
                                      else if($_GET["error"]=="emptyInput"){
                                        echo "<span style='color:pink' <p>Czegoś nie wypełniono</p></span>";
                                      }
                                      else if($_GET["error"]=="invalidCategory"){
                                        echo "<span style='color:pink' <p>brak kategori!</p></span>";
                                      }
                                      else if($_GET["error"]=="invalidBrand"){
                                        echo "<span style='color:pink' <p>brak marki</p></span>";
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