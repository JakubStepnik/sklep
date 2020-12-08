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
                                <h4 class="display-12 py-2 text-center " >Usuń pracownika</h4>
                                 podaj Login pracownika aby go usunąć 
                                <form action="dolacz/up.inc.php" class="justify-content-center" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Login" name="login">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg" name="usun">Usuń</button>
                                       </form>
                                       <?php 
                                       if(isset($_GET["error"])){
                                         if($_GET["error"]=="none"){
                                         echo "<span style='color:pink' <p>Pracownik został usunięty</p></span>";
                                         }else if($_GET["error"]=="notchange"){
                                        echo "<span style='color:pink' <p>Nie podano loginu pracownika</p></span>";
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