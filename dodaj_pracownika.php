<?php 
include_once "head.php";
echo "</head>";
include_once "nav.php";
?>
          <!--BODY-->
          <div style="margin-top:45.5px;" >
             
<!--Ustawienia-->
<div class="container">
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