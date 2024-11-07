<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/styles.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <title>Pizza Order</title>
</head>

<body>

  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Pizza Calculator</span>
        <div class="mdl-layout-spacer"></div>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="page-content"><br />

        <?php
        if (isset($_POST["size"])) {
          $a = 0;
          $b = 0;

          $x = strtolower(trim($_POST['size']));

          if ($x == 'large' || $x == 'l') {
            $a = 6.00;
          } elseif ($x == 'extra large' || $x == 'xl') {
            $a = 10.00;
          } else {
            echo "<p>Please enter a valid size (Large / Extra Large).</p>";
            exit();
          }

          $t = isset($_POST['toppings']) ? intval($_POST['toppings']) : 0;

          if ($t == 1) {
            $b = 1.00;
          } elseif ($t == 2) {
            $b = 1.75;
          } elseif ($t == 3) {
            $b = 2.50;
          } elseif ($t == 4) {
            $b = 3.35;
          } elseif ($t == 0) {
            $b = 0.00;
          } else {
            echo "<p>Please enter a valid number of toppings (0-4).</p>";
            exit();
          }

          $v = ($a + $b) * 1.13;

          echo "<div class='mdl-card mdl-shadow--4dp result-card'>";
          echo "<div class='mdl-card__title'><h2 class='mdl-card__title-text'>Order Summary</h2></div>";
          echo "<div class='mdl-card__supporting-text'>";
          echo "<p>Your total cost is: $" . number_format($v, 2) . "</p>";
        }
        ?>

</body>

</html>