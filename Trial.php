<?php
#This is a single line comment
//Also a single line comment
/**This is a multi 
 * line comment 
 * with many rows.
 */
echo "Example of comments";
//case sensitivity
echo "Hello World!";
ECHO "Hello World!";
//creating Variables(syntax)
$str="Hello Dave.";
echo "String is:$str<br>";
//the if statements
$age=18;
if($age < 20){
    echo "I am a Baby.";
}
//the if...else practise
if ($age < 20){
    echo "Still a Baby.";
}
else{
    echo "A Young Adult!";
}
$car="Jaguar";
//the switch statement practise
switch($car){
    case "Audi":
        echo "Audi is so sexy!";
    case "Jeep":
        echo "Jeep is so Manly!!";
    case "Jaguar":
        echo "Talk about comfort!";
        break;
    default:
        echo "Try other cars";
}
//for loop trial
for($i=2; $i<12; $i++){
    echo "$i <br>";
}
//while...do loop 
$a=1;
while($a<30){
    echo "$a <br>";
    $a++;#incrementing var a
}
#do....while loop
do{
    echo "$a <br>";
    $a++;//incrementation of var a
}while($a<=25)
?>
