<?php
class Car {
    public $brand;
    public $color;
    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
        // Anonymous function (closure)
        $details = function() use ($brand, $color) {
            return "Car: $brand, Color: $color";
        };

      $name = function() {
            return "Car: " . $this->brand . " | Color: " . $this->color;
        };

        // Call the function
        echo $details();
        echo $name();
    }
}

$car1 = new Car("BMW", "Black");
$car2 = new Car("Audi", "White");
