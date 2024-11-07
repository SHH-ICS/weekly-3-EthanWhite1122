<!DOCTYPE html>
<html>

<head>

  <!-- Stylesheet Stuff goes here -->
  <link rel="stylesheet" href="./css/styles.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

  <!-- Title Stuff goes here -->
  <title>Ethan's Pizzaria'</title>

</head>

<body>

  <!-- Always shows a header, even in smaller screens. -->
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title">Pizza calculator</span>
        <!-- Add spacer, to align navigation to the right -->
        <div class="mdl-layout-spacer"></div>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="page-content"><br />

        <!-- Your content goes here -->


        <center>

<?php

function calculateCost($size, $numToppings) {

    $sizePrices = [
        'large' => 6.00,
        'extra_large' => 10.00
    ];
    $toppingPrices = [
        1 => 1.00,
        2 => 1.75,
        3 => 2.50,
        4 => 3.35
    ];


    $hstRate = 0.13;


    if (!isset($sizePrices[$size])) {
        return "Invalid pizza size selected.";
    }

    if ($numToppings < 1 || $numToppings > 4) {
        return "You can only choose between 1 and 4 toppings.";
    }

    $pizzaPrice = $sizePrices[$size];
    $toppingPrice = isset($toppingPrices[$numToppings]) ? $toppingPrices[$numToppings] : 0;

    $subtotal = $pizzaPrice + $toppingPrice;

    $tax = $subtotal * $hstRate;

    $finalCost = $subtotal + $tax;
    
    return [
        'subtotal' => $subtotal,
        'tax' => $tax,
        'finalCost' => $finalCost

          <br /><br />
          <!-- Colored raised button -->
          <a href="index.html"><button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
              Do Another?
            </button></a>
        </center>


      </div>
    </main>
  </div>

</body>

</html>