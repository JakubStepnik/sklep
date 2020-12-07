<?php
  require_once 'db.inc.php';
  require_once 'functions.inc.php';
  session_start();
if(isset($_POST["delete"])){
              $user = $_SESSION["userid"];
              $name=$_POST["delete"];
              $sql="SELECT * FROM items where name='".$name."'";
              $result=mysqli_query($conn,$sql);
              $row=mysqli_fetch_assoc($result);
            $sql="DELETE FROM cart WHERE id_items='".$row["idStuff"]."' && id_user='".$user."';";
            $result=mysqli_query($conn,$sql);
            header("location ../koszk.php");
            if($result){
                header("location: ../koszyk.php?error=");
            }
        }
?>