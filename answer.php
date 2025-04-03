<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Volume of right rectangular pyramid  " />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Emre Guzel" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-light_green.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Mono:ital,wght@0,200..800;1,200..800&display=swap"
    rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="stylesheet" href="css/style.css">
  <title>Volume of Right Rectangular Pyramid </title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Volume of Right Rectangular Pyramid </span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
      </div>
      <br><br>
      <?php
      $lengthOfPyramid = $_GET["length-of-pyramid"];
      $widthOfPyramid = $_GET["width-of-pyramid"];
      $heightOfPyramid = $_GET["height-of-pyramid"];
      $volume = ($lengthOfPyramid * $widthOfPyramid * $heightOfPyramid) / 3; 
      echo "If a pyramid has lenght  = " . $lengthOfPyramid . " mm and the width = " . $widthOfPyramid . " mm, <br>";
      echo "If a pyramid  has a height = " . $heightOfPyramid . " mm, then:<br>";
      echo "<br />";
      echo "<br />";
      echo "The Volume of the pyramid is: " .round($volume) . " mm³ .";
      ?>
      <br /> <br>
      <div class="page-content-answer">
        <a href="./index.php">Return ...</a>
      </div>
      <br>
      <div class="Calculate-2">
        <img src="./images/pyramid.png" alt="Calculation">
      </div>
    </main>
</body>

</html>