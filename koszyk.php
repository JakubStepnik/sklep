<?php 
include_once "head.php";
echo "</head>";
include_once "nav.php";
?>
          <!--BODY-->
          <div style="margin-top:45.5px;" >
        
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
                  </tr>
                </thead>
                <tbody>
                  <?php 
                     if(isset($_SESSION["useruid"])){
                      $user=$_SESSION["userid"];
                      $sql="Select *from cart_view where usersId='".$user."';";
                      $result=mysqli_query($conn,$sql) or die("błędne zapytanie: $sql");
                      while($row=mysqli_fetch_assoc($result)){
                        $wynik=number_format($row["cena"])*number_format($row["ilosc"]);
                       echo " <tr>
                       <td><image src='img_produkt/{$row["src_img"]}' width='150px' height='150px'></td>
                        <td style='algin:center;'>{$row["name"]}</td>
                        <td>{$row["ilosc"]}</td>
                        <td>{$row["cena"]}</td>
                        <td>$wynik</td>
                      </tr>";
                      }
                    }
                    ?>
                    <td>aaa</td>
                </tbody>
              </table>
                
                

<script src="bootstrap/jquery.js"></script>
            <script src="bootstrap/bootstrap.bundle.min.js"></script>
        </body>
    
</html>