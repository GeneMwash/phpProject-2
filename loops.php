<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 5/27/22
 * Time: 8:41 AM
 */

//WHILE LOOPS
        //while loop
        // do while loop

//FOR LOOPS
        // for loop
        // foreach loop


//WHILE LOOP
       //<----while loop------->//
$x = 0 ;
while ($x <= 5){
    echo $x;
    $x++;
}
echo "<br>";

      //<---- do while loop ----->//
$y = 10 ;
do{
    echo "<p>$y</p>";
    $y++;
}while( $y <= 15);

echo "<br>";

     //<--- for loop ---->//


for ($z = 20; $z <= 25; $z++){
    echo "<p>$z</p>";
}
echo "<br>";

//using a while loop,do while anf for loop respectively,
//print all the numbers from 0-100 in a descending order

 //while loop//
$w = 100;
while ($w >=0){
    echo $w;
    $w--;
}
echo "<br>";23
// do while loop
$v = 100;
do{
    echo "<p>$v</p>";
    $v--;
}while($v >= 0);
echo "<br>";

// for loop //


for($counter =100; $counter >=0; $counter--){
    echo "<p>$counter</p>";
}
echo "<br>";


/// prime number
for($counter =100; $counter >=0; $counter--){
    if($counter % 2 == 0){
            echo "<p>$counter</p>";
    }
}



