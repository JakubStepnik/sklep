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
                            <div class="col-xl-12 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                                <h4 class="display-12 text-center " >Panel administracyjny</h4>
                                <h4 class="display-12 text-center " >Produkt</h4>
                                       <a href="dodaj_produkt.php"> <button class="btn btn-primary btn-lg">Dodaj</button> </a>
                                       <a href="edytuj_produkt.php"> <button class="btn btn-primary btn-lg"> Edytuj</button> </a>
                                       <a href="edycja_pracownika.php"> <button class="btn btn-primary btn-lg"> Usuń</button> </a>
                                       
                            </div>
                        </div>
                        <div class="row text-white">
                            <div class="col-xl-12 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                                <h4 class="display-12 text-center " >Pracownik</h4>
                                       <a href="dodaj_pracownika.php"> <button class="btn btn-primary btn-lg">Dodaj</button> </a>
                                       <a href="edycja_pracownika.php"> <button class="btn btn-primary btn-lg"> Edytuj</button> </a>
                                       <a href="usun_pracownika.php"> <button class="btn btn-primary btn-lg"> Usuń</button> </a>

                            </div>
                        </div>
                    </div>
                    
                </div>  
                

 </div>
<script src="bootstrap/jquery.js"></script>
            <script src="bootstrap/bootstrap.bundle.min.js"></script>
        </body>
    
</html>