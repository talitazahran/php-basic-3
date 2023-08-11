<!DOCTYPE html>
<html>
    <?php
        class Animal {
            public $name;
            public $legs = 4;
            public $cold_blooded = "no";

            public function __construct($name) {
                $this->name = $name;
            }

            public function name() {
                return $this->name;
            }

            public function legs () {
                return $this->legs;
            }

            public function cold_blooded () {
                return $this->cold_blooded;
            }
        }
    ?>
</html>