<?php 
include_once "head.php";
echo "</head>";
include_once "nav.php";
?>
          <!--BODY-->
          <div style="margin-top:45.5px;" >
  
<div class="container">
    <div class="row flex-column  nomargin align-items-center">
        
        <div class="col-9 " style="padding:15px;background-color:#24273C">
            <section id="cover" class="min-vh-50">
                <div id="cover-caption">
                    <div class="container">
                        <div class="row text-white">
                            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                                <h4 class="display-12 py-2 text-center " >Dodaj Produkt</h4>
                                    <form action="dolacz/ds.inc.php" class="justify-content-center" method="post" enctype="multipart/form-data">
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
                                            <input type="file"  name="file">
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
                                      else if($_GET["error"]=="toobig"){
                                        echo "<span style='color:pink' <p>Twój plik jest za duży!</p></span>";
                                      }
                                      else if($_GET["error"]=="wrongimg"){
                                        echo "<span style='color:pink' <p>Coś poszło nie tak, spróbuj jeszcz raz!</p></span>";
                                      }
                                      else if($_GET["error"]=="wrongimgtype"){
                                        echo "<span style='color:pink' <p>Nie możesz przesłać takiego typu pliku!</p></span>";
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