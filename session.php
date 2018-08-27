<?php
    session_start(['gc_maxlifetime' => 60]);
    ini_set('session.gc_probability', 100);

    // Autoloader för klasserna
    spl_autoload_register(function ($class_name) {
        include 'class/class.' . $class_name . '.php';
    });

    
    if (isset($_POST['submit'])) {
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";

        $favCar = $_POST['favoriteCar'];
        $_SESSION['userCar'] = $_POST['userCar'];


        // instansiera objekt
        $bok001 = new Book("Sagan om ringen", "J R Tolkien", 1950);

        echo "Boktitel: " . $bok001->getTitle() . "<br>";
        echo "Författare: " . $bok001->getAuthor() . "<br>";
        echo "Utgivningsår: " . $bok001->getPublishingYear() . "<br>";

        $_SESSION["library"][] = $bok001;
    }






?>