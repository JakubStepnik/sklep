<?php
include_once "head.php";
echo "<style>
.table td, .table th {
vertical-align:BASELINE !important;
</style>}";
echo "</head>";
include_once "nav.php";
?>
<!--BODY-->
<div style="margin-top:45.5px;">

  <!--Ustawienia-->

  <div class="row flex-column  nomargin align-items-center">

    <div class="col-9 " style="padding:15px;color:white">
      <table class="table" style="color:white">
        <thead>
          <tr>
            <th scope="col">zdjecie</th>
            <th scope="col">nazwa</th>
            <th scope="col">ilosc</th>
            <th scope="col">cena</th>
            <th scope="col">łącza cena</th>
            <th scope="col">usuń</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if (isset($_SESSION["useruid"])) {
            $user = $_SESSION["userid"];
            $sql = "Select *from cart_view where usersId='" . $user . "';";
            $result = mysqli_query($conn, $sql) or die("błędne zapytanie: $sql");
            $sum = 0;
            $del = "";
            while ($row = mysqli_fetch_assoc($result)) {
              $wynik = number_format($row["cena"]) * number_format($row["ilosc"]);
              echo " <tr'> 
                       <td><image src='img_produkt/{$row["src_img"]}' width='150px' height='150px'></td>
                        <td style='algin:center;'>{$row["name"]}</td>
                        <td rowspan='1';>{$row["ilosc"]}</td>
                        <td>{$row["cena"]}</td>
                        <td>$wynik</td>
                        <td><form method='post' action='dolacz/del.inc.prod.php'><button name='delete' value='" . $row["name"] . "' style='border:none;padding:0;color:red;background-color:transparent'>X</button></form></td>
                        </tr>";
              $number = $wynik;
              $sum = $sum + $number;
            }
          }
          ?>
          <td>
            <button type="submit" class="btn btn-primary btn-lg" name="submit"><span class="tytul-filmy">cofnij</span>
          </td>
          <td></td>
          <td></td>
          <td>CENA CAŁKOWITA</td>
          <td>
            <h5><?php echo $sum; ?></h5>
          </td>
          <td></td>
        </tbody>
      </table>
    </div>
  </div>
</div>



<script src="bootstrap/jquery.js"></script>
<script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>