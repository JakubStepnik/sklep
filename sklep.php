<?php 
include_once "head.php";
echo '<link rel="stylesheet" href="style/produkty_style.css">';
echo "</head>";
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
<div class="lorem">
  <!--Shop-->
<h1 class="text-center">Sklep</h1>
<hr>
<div class="row">
<?php 
$sql="Select *from stuff;";
$result=mysqli_query($conn,$sql) or die("błędne zapytanie: $sql");
while($row=mysqli_fetch_assoc($result)){
  echo "<div class='col-md-3 col-sm-6 product-grid'>
  <div class='image_shop '>
    <a href='produkt.php?name={$row["name"]}'>
      <img src='img_produkt/{$row["src_img"]}' class='w-100'>
      <div class='overlay'>
        <div class='detail'>Szczegóły</div>
      </div>
    </a>
  </div>
  <h5 class='text-center text-product'>{$row["name"]}</h4>
  <h6 class='text-center'>Cena: {$row["price"]} zł</h5>
  <a href='#' class='btn buy'>Kup</a>
  </div> ";
}
?>




              
  </div>
  
</div>
<script src="bootstrap/jquery.js"></script>
            <script src="bootstrap/bootstrap.bundle.min.js"></script>
        </body>
</html>