<?php 
 include_once "head.php";
 echo '</head>';
if(isset($_SESSION["useruid"])){
  header("Location: index.php");
  exit();
}
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
<div class="lorem">
<div class="row flex-column  nomargin align-items-center">
    
    <div class="col-9 " style="padding:15px;background-color:#24273C">
        <section id="cover" class="min-vh-50">
            <div id="cover-caption">
                <div class="container">
                    <div class="row text-white">
                        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                            <h4 class="display-12 py-2 text-center " >LOGOWANIE</h4>
                          
                                <form action="dolacz/login.inc.php" class="justify-content-center" method="post">
                                    <div class="form-group">
                                        <label class="sr-only">Name</label>
                                        <input type="text" class="form-control" placeholder="Login/email" name="login_uid">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only">Email</label>
                                        <input type="password" class="form-control" placeholder="Password"  name="login_pwd">
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary btn-lg" name="login_submit">ZALOGUJ</button>
                                </form>
                                <?php 
                          if(isset($_GET["error"])){
                            if($_GET["error"]=="emptyInputLogin"){
                              echo "<span style='color:pink' <p> Chyba kolego czegoś nie wypełniłeś</p></span>";
                            }
                            else if($_GET["error"]=="wronglogin"){
                              echo "<p>Brak takiego użytkownika</p>";
                            }
                            else if($_GET["error"]=="wrongpassowrd"){
                              echo "<p>niepoprawne hasło</p>";
                            }
                          }
                        ?>
                        </div>
                    </div>
                </div>
                
            </div>  
            
</div>
<br>
<div class="col-9" style="padding:15px;background-color:#24273C">
    <section id="cover" class="min-vh-50 min-50">
        <div id="cover-caption">
            <div class="container">
                <div class="row text-white">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4 " style="object-fit:scale-down">
                        <h4 class="display-12 py-2 text-center " > <span class="tytul-filmy" >REJESTRACJA</span> </h4>
                      
                            <form action="dolacz/rejestracja.inc.php"
                            class="justify-content-center" method="post">
                                <div class="form-group">
                                    
                                    <input type="text" class="form-control" placeholder="Login" name="uid">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="e-mail" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password"  name="pwd">
                                  </div>
                                  <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Repeat Password"  name="pwdrepeat">
                                  </div>
                               
                                <button type="submit" class="btn btn-primary btn-lg" name="submit"><span class="tytul-filmy" >Zarejestruj</span></button>
                            </form>
                     
                 
            
            <?php 
            if(isset($_GET["error"])){
              if($_GET["error"]=="emptyInputSignup"){
                echo "<span style='color:pink' <p> Chyba kolego czegoś nie wypełniłeś</p></span>";
              }
              else if($_GET["error"]=="invalidUid"){
                echo "<p>Złe dane użytkownika</p>";
              }
              else if($_GET["error"]=="invalidEmail"){
                echo "<p>nie poprawny email</p>";
              }
              else if($_GET["error"]=="passnotmach"){
                echo "<p>hasło nie są identyczne!</p>";
              }
              else if($_GET["error"]=="usernametaken"){
                echo "<p>nick lub taki email już istnieje!</p>";
              }
              else if($_GET["error"]=="stmtfailed"){
                echo "<p>oj cos poszło nie ta, spróbuj jeszcze raz</p>";
              }
              else if($_GET["error"]=="none"){
                echo "<p>i gotowe, rejestracja się powiodła</p>";
              }
            }
            ?>
               </div>
                </div>
        </div> 
</div>
</div>
</div>
 </div>
<script src="bootstrap/jquery.js"></script>
            <script src="bootstrap/bootstrap.bundle.min.js"></script>
           
        </body>
    </head>
</html>