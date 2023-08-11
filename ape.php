<!DOCTYPE html>
<html>
    <?php
        require_once 'animal.php';
        class Ape extends Animal {
            public function yell() {
                return "auooo";
            }
            public function legs() {
                return "2";
            }
        }
    ?>
</html>