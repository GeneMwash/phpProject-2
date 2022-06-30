<?php

motto();
function motto(){
    echo "Hello, This is our Motto.Thank you. <br>";
}
motto();

function average(){
    $answer= (234 + 6565 +890)/3;
    echo "Hello, your answer is $answer <br>";
}
average();

function avg($x,$y,$z){
    $answer = ($x + $y + $z)/3;
    echo "Hello, your computed mean is $answer <br>";
}
avg(4343,4535,677);
avg(43,65,89);
avg(32,54,43);


function cylinderVolume($r,$h){
    $volume = pi() *pow($r,2) * $h;
    echo "Your volume is $volume <br>";
}
cylinderVolume(42,49);


// create a function to calculate the BMI of any user
function bmi($weight,$height){
    $bmi = $weight /pow($height,2);
    echo "Your BMI is $bmi <br>";
}
bmi(64,1.646);