<?php
$array = [10, 20, 30, 40, 50, 60, 70, 80, 90]; // example array


foreach($array as $value) {
    $a1[] = $value;  
    $b1 = $value;
    echo "Current Value: " . $value . PHP_EOL;
    echo "Current Value of a1:" . print_r($a1, true) . PHP_EOL;
    if($value>50) {
        break;
    } 
    if($value<50) {
        continue;
    } 
    print_r($b1);
    echo"----------------".PHP_EOL;
    print_r($a1); 
    continue;
}
echo "testinggg is here";





// class Car {
//     public $brand;
//     public $color;
//     public $getDetails; // store the function for later use

//     public function __construct($brand, $color) {
//         // Assign properties
//         $this->brand = $brand;
//         $this->color = $color;

//         // Build a function (anonymous function) inside constructor
//         $this-> getDetails = function()use($brand, $color) {
//             return "Car: " . $brand . " | Color: " . $color;
//         };
        
        
//     }



// }

// // Create object
// $car1 = new Car("BMW", "Black");

// // Call the function stored in object
// $detailsFunction = $car1->getDetails;
// echo $detailsFunction();   // Output: Car: BMW | Color: Black




// ?>