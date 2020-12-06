<?php 
include_once "head.php";
echo '<link rel="stylesheet" href="style/produkty_style.css">';
echo "</head>";
include_once "nav.php";
?>
      <body >
      
          <div style="margin-top:50.5px;" >
    <div class="row flex-column  nomargin align-items-center ">
        <div class="col-9 " style="padding:15px;background-color:#24273C">
            <section id="cover" class="min-vh-50">
                <div id="cover-caption">
                    <div class="container">
                        <div class="row text-white">
                            <div class="col-lg-6 col-sm-12">
                            <?php 
                                  $name=$_GET["name"];
                                  $sql = "SELECT * FROM `items` WHERE NAME='".$name."'";
                                  $result=mysqli_query($conn,$sql);
                                  $row=mysqli_fetch_assoc($result);
                                  echo "<img src='img_produkt/".$row["src_img"]."' class='w-100'>
                                </div>
                                <div class='col-lg-6 col-sm-12'>
                                  <h1 class='display-6 py-2 text-center text-uppercase'>".$row["name"]."</h1>
                                  <h4 class='display-6 py-2 text-center text-uppercase'>cena: ".$row["price"]."PLN</h4>
                                  ";?>
                                  <div class='form-group'>
                                      <div class='input-group'>
                                          <label style='margin-top:5px; padding-right:15px;'>Ilosc:</label>
                                          
                                          <div class='input-group-btn'>
                                              <button id='down' class='btn btn-default' style='height:38px;color:white;    border: 1px solid #434444;' onclick="down('1')"><span class='glyphicon glyphicon-minus' style='color: rgba(161, 175, 255, 1);'>-</span></button>
                                          </div>

                                          <input type='text' id='myNumber' class='form-control input-number' value='1' style='flex: none !important; width: 50px' />
                                          
                                          <div class='input-group-btn'>
                                              <button id='up' class='btn btn-default' onclick="up('10')" style='height:38px;color:white;  border: 1px solid #434444;'>
                                                  <span class='glyphicon glyphicon-plus' style='color: rgba(161, 175, 255, 1);'>+</span>
                                                  </button>
                                          </div>

                                      </div>
                                      </div>
                                      <?php 
                                      echo "<h6 class='display-6 py-2 '>Marka: ".$row["brand"]." Kategoria: ".$row["category"]."</h6>
                                  <button href='#' class='btn buy'>KUP</button>
                                  <hr>
                                  <h3 class='text-center'>OPIS PRODUKTU</h3>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit perspiciatis molestiae dolor magnam non cupiditate unde earum, debitis odio tenetur ipsam, facere, nihil magni commodi eos voluptate. Molestias, voluptatem ab.";
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