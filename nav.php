
      <body >
          <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-color1 fixed-top  py-1 ">
              
              <a class="navbar-brand order-lg-0 order-0" href="index.php"><img src="ikony\logo.png" width="30px" height="30px"></a>
              <button class="navbar-toggler  " type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                  
                  <div class="nav justify-content-around ehh">
                  <li class="nav-item active order-lg-1 order-2">
                    <a class="nav-link " href="kanal.html"style="font-size:16px;  color:white; font-family: 'Lato', sans-serif;margin-left:2px">STREAM<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item order-lg-2 order-3">
                    <a class="nav-link" href="przeglądaj.html" style="font-size:16px; color:white; font-family: 'Lato', sans-serif;margin-left:2px"> PRZEGLĄDAJ</a>
                  </li>
                  <li class="nav-item order-lg-3 order-4">
                    <a class="nav-link" href="kategorie.html" style="font-size:16px; color:white; font-family: 'Lato', sans-serif;margin-left:2px">KATEGORIE</a>
                  </div>
                  </li>
                  
                  <!--SEARCH-->
                  <div class="search order-lg-4 order-1 " style=" padding:0%;">
                  <form class="form-inline my-2 my-lg-0  " style="margin-left:50px;width:100%; flex-flow: nowrap;">
                    <input class="form-control mr-sm-2 " style="width:400px; height:33px; border:none; border-radius: 15px; background: #44475C;" type="search" placeholder="Search" aria-label="Search">
                    <button class="button  bg-color1" type="submit">  <svg style="fill:white; border:15px;" width="25px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="15px" y="120px"
                      viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                       <path  stroke-width="6" d="M508.875,493.792L353.089,338.005c32.358-35.927,52.245-83.296,52.245-135.339C405.333,90.917,314.417,0,202.667,0
                         S0,90.917,0,202.667s90.917,202.667,202.667,202.667c52.043,0,99.411-19.887,135.339-52.245l155.786,155.786
                         c2.083,2.083,4.813,3.125,7.542,3.125c2.729,0,5.458-1.042,7.542-3.125C513.042,504.708,513.042,497.958,508.875,493.792z
                          M202.667,384c-99.979,0-181.333-81.344-181.333-181.333S102.688,21.333,202.667,21.333S384,102.677,384,202.667
                         S302.646,384,202.667,384z"/></svg> </button>
                  </form>
                </div>
                </ul>
                <!--SVG-->
                
                <div class="row">
                  <div class="col">
                    <!-- <li class="nav-item dropdown"> -->
        <a class="nav-link dropdown-toggle  dropdown-toggle-split"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:16px; color:white; font-family: 'Lato', sans-serif;margin-right:-20px">
        <img class="nav-item " src="login.svg" width="30px" height="30px">
        </a>
        <?php 
          if(isset($_SESSION["useruid"])){ echo'
        <div class="dropdown-menu"  aria-labelledby="navbarDropdown" style="left:-100%; background-color:#292F5A ;">
          <a class="dropdown-item lato" href="#" style="font-size:16px; color:white;margin-left:2px;background-color:#292F5A;">Ustawienia</a>
          <a class="dropdown-item lato" href="dolacz/wyloguj.inc.php" style="font-size:16px; color:white;margin-left:2px; background-color:#292F5A;">Wyloguj</a>
          </div>';
          } else { echo '
            <div class="dropdown-menu"  aria-labelledby="navbarDropdown" style="left:-100%; background-color:#292F5A ;">
            <a class="dropdown-item lato" href="logowanie.php" style="font-size:16px; color:white;margin-left:2px; background-color:#292F5A;">Logowanie</a>
            <a class="dropdown-item lato" href="logowanie.php" style="font-size:16px; color:white;;margin-left:2px; background-color:#292F5A;">Rejestracja</a>
            </div>';
          }
          ?>
          <!-- </li> --->
                  </div>
                  </div>
            </nav>