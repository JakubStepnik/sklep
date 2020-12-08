<?php
include_once "head.php";
echo "</head>";
include_once "nav.php";
?>
<!--BODY-->
<div style="margin-top:45.5px;">
 
  <div class="container">
    <div class="row flex-column  nomargin align-items-center">

      <div class="col-9 " style="padding:15px;background-color:#24273C">
        <section id="cover" class="min-vh-50">
          <div id="cover-caption">
            <div class="container">
              <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                  <h4 class="display-12 py-2 text-center ">Edytuj produkt</h4>
                  wybierz nazwe produktu którego chcesz zmienić
                  <form action="dolacz/es.inc.php" class="justify-content-center" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <select class="form-control" name="snazwa">
                        <?php
                        $sql = "Select * from stuff;";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo "<option>" . $row["name"] . "</option>";
                        }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="nowa nazwa" name="nnazwa">
                    </div>
                    <div class="form-group">
                      <label>Kategorie:</label>
                      <select multiple class="form-control" name="kategoria">
                        <?php
                        $sql = "Select * from categories;";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo "<option>" . $row["name"] . "</option>";
                        }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Marka:</label>
                      <select multiple class="form-control" name="marka">
                        <?php
                        $sql = "Select * from brands;";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo "<option>" . $row["bname"] . "</option>";
                        }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="ilość" name="ilosc">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="cena" name="cena">
                    </div>
                    <input type="file" name="file">

                    <button type="submit" class="btn btn-primary btn-lg" name="edycja_submit">Zapisz</button>
                  </form>
                  <?php
                  if (isset($_GET["error"])) {
                    if ($_GET["error"] == "none") {
                      echo "<span style='color:pink' <p>Zmiany zostały zapisane</p></span>";
                    } else if ($_GET["error"] == "notchange") {
                      echo "<span style='color:pink' <p>Niczego nie zmieniono!</p></span>";
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