<?php
include_once "head.php";
echo '<link rel="stylesheet" href="style/produkty_style.css">';
echo "</head>";
include_once "nav.php";
?>

<body>

    <div style="margin-top:50.5px;">
        <div class="row flex-column  nomargin align-items-center ">
            <div class="col-9 " style="padding:15px;background-color:#24273C">
                <section id="cover" class="min-vh-50">
                    <div id="cover-caption">
                        <div class="container">
                            <div class="row text-white">
                                <div class="col-lg-6 col-sm-12">
                                    <?php
                                    $name = $_GET["name"];
                                    $sql = "SELECT * FROM `items` WHERE NAME='" . $name . "'";
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    echo "<img src='img_produkt/" . $row["src_img"] . "' class='w-100'>
                                </div>
                                <div class='col-lg-6 col-sm-12'>
                                  <h1 class='display-6 py-2 text-center text-uppercase'>" . $row["name"] . "</h1>
                                  <h4 class='display-6 py-2 text-center text-uppercase'>cena: " . $row["price"] . "PLN</h4>
                                  "; ?>
                                    <div class='form-group'>
                                        <form method="post" action="">
                                            <div class='input-group'>
                                                <label style='margin-top:5px; padding-right:15px;'>Ilosc:</label>

                                                <div class='input-group-btn'>
                                                    <button name="data" class='btn btn-default' onclick="return getDate()" style="height:38px;color:white;  border: 1px solid #434444;">
                                                        <span class='glyphicon glyphicon-plus' style='color: rgba(161, 175, 255, 1);'>-</span>
                                                    </button>

                                                </div>
                                                <input type='text' name="ilosc" id='myNumber' class='form-control input-number' value='1' style='flex: none !important; width: 50px' />

                                                <div class='input-group-btn'>
                                                    <button name="data" class='btn btn-default' onclick="return getData()" style="height:38px;color:white;    border: 1px solid #434444;">
                                                        <span class='glyphicon glyphicon-plus' style='color: rgba(161, 175, 255, 1);'>+</span>
                                                    </button>

                                                </div>

                                            </div>
                                    </div>
                                    <?php
                                    echo "<h6 class='display-6 py-2 '>Marka: " . $row["brand"] . " Kategoria: " . $row["category"] . "</h6>
                                      " ?>
                                    <button type="submit" class='btn buy' name="submit">KUP</button>
                                    </form>
                                    <hr>
                                    <h3 class='text-center'>OPIS PRODUKTU</h3>
                                    <?php
                                    echo " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit perspiciatis molestiae dolor magnam non cupiditate unde earum, debitis odio tenetur ipsam, facere, nihil magni commodi eos voluptate. Molestias, voluptatem ab.";
                                    if (isset($_POST["submit"])) {
                                        if (isset($_SESSION["useruid"])) {
                                            $name = $_GET["name"];
                                            $ilosc = $_POST["ilosc"];
                                            $sql = "SELECT * FROM items where name='" . $name . "'";
                                            $result = mysqli_query($conn, $sql);
                                            $row = mysqli_fetch_assoc($result);
                                            $sql_cart = "SELECT * FROM cart_view where name='" . $name . "'";
                                            $result_cart = mysqli_query($conn, $sql_cart);
                                            $row_cart = mysqli_fetch_assoc($result_cart);
                                            $user = $_SESSION["userid"];
                                            if (isset($row_cart["name"]) && isset($row_cart["usersId"])) {
                                                if ($name == $row_cart["name"] && $user == $row_cart["usersId"]) {
                                                    $sql = "UPDATE cart SET ilosc = ilosc+'{$ilosc}' WHERE id_user='" . $user . "' && id_items='" . $row["idStuff"] . "'";
                                                    $result = mysqli_query($conn, $sql);
                                                }  
                                            }else {
                                                    $sql = "INSERT INTO cart(id_items,ilosc,id_user,cena) VALUES ('" . $row["idStuff"] . "',$ilosc,$user,'" . $row["price"] . "')";
                                                    $result = mysqli_query($conn, $sql);
                                                }
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
    </div>
    </div>
    <script src="bootstrap/quantity.js"></script>
    <script src="bootstrap/jquery.js"></script>
    <script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>