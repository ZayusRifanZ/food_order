<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!-- Menyisipkan library Google Maps -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/path/to/parallax.js"></script>

    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html,
      body {
         margin:0;
         padding:0;
         height:100%;
      }
      .parallax-window {
            min-height: 400px;
            background: transparent;
            z-index: 9999;
        }
      #container {
         min-height:100px;
         position:relative;
      }
      
      #footer {
        bottom:0;
        width:100%;
        height:60px;   /* tinggi dari footer */
        background:#3B3A3A;

      }
      .img img{
          width: 100%;
          height: 450px;
        }

    </style>
    <title>
    	<?php echo $judul; ?>
    </title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
      <a class="navbar-brand" href="#"><h2>Food Order</h2></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
        <div class="navbar-nav text-right" >
          <a class="nav-item nav-link active" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
          <!-- <a class="nav-item nav-link active" href="<?= base_url(); ?>Order">Order</a> -->
          <a class="nav-item nav-link active" href="<?= base_url(); ?>Order_list">Order List</a>
          
        </div>
      </div>
      </div>
    </nav>

