<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <title>Logowanie</title>
      </head>
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
                    <a class="nav-link" href="przeglądaj.html"style="font-size:16px; color:white; font-family: 'Lato', sans-serif;margin-left:2px"> PRZEGLĄDAJ</a>
                  </li>
                  <li class="nav-item order-lg-3 order-4">
                    <a class="nav-link" href="kategorie.html" style="font-size:16px; color:white; font-family: 'Lato', sans-serif;margin-left:2px">KATEGORIE</a>
                    <?php 
          if(isset($_SESSION["useruid"])){
            echo "<li class='nav-item order-lg-3 order-4'>
            <a class='nav-link' href='index.php' style='font-size:16px; color:white; font-family: 'Lato', sans-serif;margin-left:2px'>PROFILE</a>";
          }else {
            echo "<li class='nav-item order-lg-3 order-4'>
            <a class='nav-link' href='logowanie.php'' style='font-size:16px; color:white; font-family: 'Lato', sans-serif;margin-left:2px'>PROFILE</a>";
          }
          ?>
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
          
          
                   <a href="logowanie.php"> <img class="nav-item " src="login.svg" width="30px" height="30px"></a>
                  </div>
                  </div>
                <div class="row">
                <div class="col ikonka">
                
             <svg height="50" width="50">
          <circle cx="35" cy="21.5" r="15" stroke-width="3" fill="grey" />
          </svg>
          <svg style="  width: 100%;height: 100% ;position: absolute;top: 30;left: 15;"height="25" width="30">
          <circle cx="45" cy="3.5" r="5" stroke-width="3" fill="green"/>
          </svg>
              </div>
            </nav>