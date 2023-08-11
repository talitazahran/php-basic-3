<!DOCTYPE html>
<html>
    <?php
        require_once 'animal.php';
        require_once 'frog.php';
        require_once 'ape.php';

        $sheep = new Animal("shaun");
        echo "Name: " . $sheep->name . "<br>"; // "shaun"
        echo "Legs: " . $sheep->legs . "<br>"; // 4
        echo "Cold blooded: " . $sheep->cold_blooded . "<br> <br>"; // "no"

        $frog = new Frog("gabi");
        echo "Name: " . $frog->name . "<br>";
        echo "Legs: " . $frog->legs . "<br>";
        echo "Cold blooded: " . $frog->cold_blooded . "<br>"; 
        echo "Jump: " . $frog->jump() . "<br> <br>";

        $ape = new Ape("george");
        echo "Name: " . $ape->name() . "<br>";
        echo "Legs: " . $ape->legs() . "<br>";
        echo "Cold blooded: " . $ape->cold_blooded . "<br>"; 
        echo "Yell: " . $ape->yell();

        // NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
    ?>
</html>