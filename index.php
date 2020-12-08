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
            
<div class="container">
  <!--Shop-->
<h1 class="text-center">Sklep</h1>
<hr>
<div class="row">
<?php 

if(isset($_GET["query"])){
	$query = $_GET['query']; 
	// gets value sent over search form
	
	$min_length = 3;
	// you can set minimum length of the query if you want
	
	if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
		
		$query = htmlspecialchars($query); 
		// changes characters used in html to their equivalents, for example: < to &gt;
		
		$query = mysqli_real_escape_string($conn,$query);
		// makes sure nobody uses SQL injection
		$sql="SELECT * FROM items
    WHERE (`name` LIKE '%".$query."%')";
		$raw_results = mysqli_query($conn,$sql);
			
		// * means that it selects all fields, you can also write: `id`, `title`, `text`
		// articles is the name of our table
		
		// '%$query%' is what we're looking for, % means anything, for example if $query is Hello
		// it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
		// or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
		
		if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
			
			while($results = mysqli_fetch_array($raw_results)){
			// $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
      echo "<div class='col-md-3 col-sm-6 product-grid'>
      <div class='image_shop '>
        <a href='produkt.php?name={$results["name"]}'>
          <img src='img_produkt/{$results["src_img"]}' class='w-100'>
          <div class='overlay'>
            <div class='detail'>Szczegóły</div>
          </div>
        </a>
      </div>
      <h5 class='text-center text-product'>{$results["name"]}</h4>
      <h6 class='text-center'>Cena: {$results["price"]} zł</h5>
      <a href='#' class='btn buy'>Kup</a>
      </div> ";
			
	
			}
			
		}
		else{ // if there is no matching rows do following
			echo "<h3>Brak wynikow<h3>";
		}
		
	}
	else{ // if query length is less than minimum
		echo "Minimum length is ".$min_length;
  }
} else {
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
}
?>




              
  </div>
  
</div>
<script src="bootstrap/jquery.js"></script>
            <script src="bootstrap/bootstrap.bundle.min.js"></script>
            

        </body>
</html>