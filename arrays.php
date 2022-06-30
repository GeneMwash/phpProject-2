<?php
// ARRAYS
     //INDEXED ARRAYS
     // ASSOCIATIVE ARRAYS

// ----------INDEXED ARRAYS--------//
$cars = ["Bughatti","Audi","Mercedes","Range","Jeep","Mobius","Discovery","Bently"];
echo $cars[0];
echo "<br>";
echo $cars[4];
echo "<br>";
// sorting an indexed array in an ascending order
sort($cars);
foreach ($cars as $gari){
    echo $gari;
    echo "<br>";

}
// sorting an indexed array in an as
//descending order
rsort($cars);
foreach ($cars as $gari){
    echo $gari;
    echo "<br>";

}

//-----------Associative arrays-------//

$magari =["KDH004"=>"Ruto","KDC908"=>"Jeremy","KDG765"=>"Edmond"];
echo $magari["KDC908"];

echo "<br>";
//sorting an associative array in ascending order in respect to the key
//ksort($magari);
//sorting an associative array in descending order in respect to the key
//krsort($magari);
//sorting an associative array in ascending order in respect to the value
//asort($magari);
//sorting an associative array in descending order in respect to the value
//arsort($magari);
foreach ($magari as $key => $value){
    echo "$key ----------$value<br>";
}
