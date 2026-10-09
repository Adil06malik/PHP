

<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "<h1>PHP is working!</h1>";

$fruits = ["Apple", "Banana", "Mango"];

foreach ($fruits as $value) {
    echo $value . "<br>";
}

// $fruits = array("Apple", "Banana", "Orange");
// print_r($fruits);
// print_r(array_values($fruits));



// $colors = ["Red", "Green", "Blue"];
// echo $colors[0]; // Red


//print the first value first
// $fruits = [1, 2,5,"x", "abc",9];
// for ($i = 0; $i< count($fruits); $i++) {
//     echo $fruits[$i] . "\n";
// }

//this array print the last value first
// $fruits = [1, 2,5,"x", "abc",9];
// for ($i = count($fruits); $i > 0; $i--) {
//     echo $fruits[$i] . "\n";
// }

// $arr = count($fruits);
// echo $fruits[$arr-3];


// echo "$fruits[3]";

// print_r($fruits[3]);
// print_r(array_values($fruits[3]));
// $fruits = ["Apple", "Banana", "Orange"];
// foreach ($fruits as $fruit) {
//     echo $fruit . "\n";
// }

// for($i = count($fruits)-1; $i >= 0; $i--) {
//     echo $fruits[$i] . "\n";
// }

// $fruits = ["Apple", "Banana", "Mango", "Orange", "Grapes", "Papaya", "Pineapple"];
// foreach($fruite as $value){    
// }

// $i = 3; // Number of items per chunk
// $split = [];


// for ($i = 0; $i < count($fruits); $i++) {
//     $currentChunk[] = $fruits[$i];

//     // If the current chunk is full or it's the last item, print and reset
//     if (count($currentChunk) === $chunkSize || $i === count($fruits) - 1) {
//         echo $currentChunk;
//         // echo "Chunk $chunkIndex: " . implode(", ", $currentChunk) . "\n";
//         $currentChunk = []; // Reset for the next chunk
//         $chunkIndex++;
//     }
// }

 
// $i= 3;




?>
