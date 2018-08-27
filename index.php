<?php
    // Se alla fel under development.
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Autoloader för klasserna
    spl_autoload_register(function ($class_name) {
        include 'class/class.' . $class_name . '.php';
    });

    $saganOmRingen = new Book("Sagan om ringen", "J R Tolkien", 1950);

    echo "Boktitel: " . $saganOmRingen->getTitle() . "<br>";
    echo "Författare: " . $saganOmRingen->getAuthor() . "<br>";
    echo "Utgivningsår: " . $saganOmRingen->getPublishingYear() . "<br>";

?>

<html>

<head>

  <style>

    body {

      

    }

    label {

      display: block;

      margin-top: 1em;

    }

    input[type="submit"] {

      display: block;

      margin-top: 3em;

      background-color: blue;

      color: white;

      font-size: 1.5em;

    }

  </style>

  <script>

    function updateRange(val) {

      document.getElementById('favoriteCenturyInfo').value=val;

    }

  </script>

</head>

<body>

  <h1>Böcker</h1>

  <form action="index.php" method="POST">

    <label for="userTitle">Titel</label>

    <input type="title" name="userTitle" />

    <label for="userName">Författare</label>

    <input type="name" name="userName" />



    <label for="favoriteCentury">utgivnings datum</label>

    <input type="range"

      name="favoriteCentury"

      id="favoriteCentury"

      min="-2000"

      max="2300"

      step="100"

      value = "0"

      onchange="updateRange(this.value);" />

      <!-- Range har ingen inbyggd "info", därför denna js-lösning. -->

      <input type="text" id="favoriteCenturyInfo" value = "0" />


     <input name ="submit" type="submit" value="Spara">

  </form>

</body>

</html>
