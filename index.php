<?php
    // Se alla fel under development.
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // starta session
    session_start();





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

      document.getElementById('publishingYear').value=val;

    }

  </script>

</head>

<body>

  <h1>Böcker</h1>

  <form action="session.php" method="POST">

    <label for="title">Titel</label>

    <input type="text" name="title" />

    <label for="author">Författare</label>

    <input type="text" name="author" />



    <label for="publishingYear">Utgivningsår</label>

    <input type="range"

      name="publishingYear"

      id="publishingYear"

      min="-2000"

      max="2300"

      step="100"

      value = "0"

      onchange="updateRange(this.value);" />

      <!-- Range har ingen inbyggd "info", därför denna js-lösning. -->

      <input type="text" id="publishingYear" value = "0" />


     <input name ="submit" type="submit" value="Spara">

  </form>

</body>

</html>
