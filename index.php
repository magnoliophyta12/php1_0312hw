<?php
require __DIR__. '/vendor/autoload.php';
//3
function getCircle(string $diameter){
    return "<div style='float:left; width: {$diameter}px; height: {$diameter}px; background-color: blue; border-radius: 50%;'></div>";
}
for($i=0;$i<10;$i++){
    echo getCircle(50);
}

//4
$binaryNumber = "110110";
$hexadecimalNumber = dechex(bindec($binaryNumber));
echo "<p>Number: $binaryNumber</p>";
echo "<p>Converted: $hexadecimalNumber</p>";

?>



