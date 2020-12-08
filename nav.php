<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-color1">
  <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
                   <a class="navbar-brand order-lg-0 order-0" href="index.php"><img src="style/logo.png" width="30px" height="30px"></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="kategorie.php" style="font-size: large;margin-left:5px;margin-right:5px">Kostki</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="kategorie.php" style="font-size: large;margin-left:5px;margin-right:5px">Książki</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="kategorie.php" style="font-size: large;margin-left:5px;margin-right:5px;">sakiweki</a>
          </li>
      </ul>
  </div>
  <div class="mx-auto order-0 navbar-brand mx-auto">
    <form class="form-inline my-2 my-lg-0  " action="index.php" method="GET" style="margin-left:50px;width:100%; flex-flow: nowrap;">
      <input class="form-control mr-sm-2 " name="query" style="color:white;width:400px; height:33px; border:none; border-radius: 15px; background: #44475C;" type="search" placeholder="Search" aria-label="Search">
      <button class="button  bg-color1" type="submit_search">  <svg style="fill:white; border:15px;" width="25px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="15px" y="120px"
        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
         <path  stroke-width="6" d="M508.875,493.792L353.089,338.005c32.358-35.927,52.245-83.296,52.245-135.339C405.333,90.917,314.417,0,202.667,0
           S0,90.917,0,202.667s90.917,202.667,202.667,202.667c52.043,0,99.411-19.887,135.339-52.245l155.786,155.786
           c2.083,2.083,4.813,3.125,7.542,3.125c2.729,0,5.458-1.042,7.542-3.125C513.042,504.708,513.042,497.958,508.875,493.792z
            M202.667,384c-99.979,0-181.333-81.344-181.333-181.333S102.688,21.333,202.667,21.333S384,102.677,384,202.667
           S302.646,384,202.667,384z"/></svg> </button>
    </form>
  </div>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
    <span class="navbar-toggler-icon"></span>
</button>
  <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">

      <div class="row navbar-nav ml-auto">
        <a class="nav-link" href="koszyk.php">
    <img class="nav-item " src="style/cart.png" width="30px" height="30px">
    </a>
        <div class="col">
          <!-- <li class="nav-item dropdown"> -->
          <a class="nav-link dropdown-toggle  dropdown-toggle-split"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:16px; color:white; font-family: 'Lato', sans-serif;margin-right:-20px">
<img class="nav-item " src="user.png" width="30px" height="30px">
</a>
<?php 
if(isset($_SESSION["perm"])){
  $sql="Select*from mods where perm={$_SESSION["perm"]}";
  $result=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($result); 
  if($row["perm"]==1){
    echo '
<div class="dropdown-menu"  aria-labelledby="navbarDropdown" style="left:-100%; background-color:#292F5A ;">
<a class="dropdown-item lato" href="panel_adm.php" style="font-size:16px; color:white;margin-left:2px;background-color:#292F5A; font-algin:center">Panel admina</a>
<a class="dropdown-item lato" href="dolacz/wyloguj.inc.php" style="font-size:16px; color:white;margin-left:2px; background-color:#292F5A;">Wyloguj</a>
</div>';
}
else if($row["perm"]==2){
  echo  '
<div class="dropdown-menu"  aria-labelledby="navbarDropdown" style="left:-100%; background-color:#292F5A ;">
<a class="dropdown-item lato" href="panel_adm.php" style="font-size:16px; color:white;margin-left:2px;background-color:#292F5A; font-algin:center">Panel pracownika</a>
<a class="dropdown-item lato" href="dolacz/wyloguj.inc.php" style="font-size:16px; color:white;margin-left:2px; background-color:#292F5A;">Wyloguj</a>
</div>';
}
} else if(isset($_SESSION["useruid"])){
echo '
<div class="dropdown-menu"  aria-labelledby="navbarDropdown" style="left:-100%; background-color:#292F5A ;">
<a class="dropdown-item lato" href="ustawienia.php" style="font-size:16px; color:white;margin-left:2px;background-color:#292F5A;">Ustawienia</a>
<a class="dropdown-item lato" href="dolacz/wyloguj.inc.php" style="font-size:16px; color:white;margin-left:2px; background-color:#292F5A;">Wyloguj</a>
</div>';
}else { echo '
  <div class="dropdown-menu"  aria-labelledby="navbarDropdown" style="left:-100%; background-color:#292F5A ;">
  <a class="dropdown-item lato" href="logowanie.php" style="font-size:16px; color:white;margin-left:2px; background-color:#292F5A;">Logowanie</a>
  <a class="dropdown-item lato" href="logowanie.php" style="font-size:16px; color:white;;margin-left:2px; background-color:#292F5A;">Rejestracja</a>
  </div>';
}

?>

<!-- </li> --->
        </div>
        </div>
  </div>
</nav>