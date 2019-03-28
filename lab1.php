<style>
p.italic {
    font-style: italic;
}
p.bold{
    font-weight: bold;
}
</style>

<?php

function problemHeader($pnum){
    echo "<h3>Problem $pnum </h3>";
}
//Problem 1
problemHeader(1);
echo '<p class="italic">"Good morning, Dave," said HAL.</p>';


// Problem 2
problemHeader(2);
$radius = 5;
$a = pi() * ($radius * $radius);
echo "<p>Area of circle with radius $radius is $a</p>\n";


// Problem 3
problemHeader(3);
function f_to_c($temperature){
    return (5/9) * ($temperature - 32);
}
$celFahr = f_to_c(100);
echo "<p>100 F = $celFahr C</p>";

// Problem 4
problemHeader(4);
function char_count($str){
    return strlen(trim($str));
}
$strP4 = " PHP is Fun ";
$count = char_count($strP4);

echo "<p>String has $count characters</p>\n";

// Problem 5
problemHeader(5);
$strP5 = "WDWWLWWWLDDWD";
$char = $strP5[strpos($strP5, "WWW")+3];
echo "$char";


// Problem 6
problemHeader(6);
function isPalindrome($str){
    $str = strtolower($str);
    if (strrev($str) === $str ){
        return true;
    }
    return false;
}

function echoResult($str){
    if (isPalindrome($str)){
        echo "<p>$str is a Palindrome</p>\n";
    }
    else{
        echo "<p> $str is not a Palindrome</p>\n";
    }
}

echoResult("Kayak");
echoResult("aabbaa");
echoResult("ababab");


// Problem 7
problemHeader(7);
$num = 7;

function isEven($n){
    if ($n % 2 === 0){
        return true;
    }
    return false;
}

echo "<p>$num is ", (isEven($num)? "even" : "odd"), "</p>";

//Problem 8
problemHeader(8);
$year = date("Y");
echo '<p class="bold"> ', ($year%4 === 0? "It is": "It isn't"), '</p>';
?>