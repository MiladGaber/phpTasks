<?php 

echo '<h1> Simple *Static Calculator </h1>';

$firstNum = 2;
$secondNum = 5;

$result = "";
$oprator = "+";

switch ($oprator)
{
    case '+':
    $result = $firstNum + $secondNum;
    break;

    case '-':
    $result = $firstNum - $secondNum;
    break;

    case '*':
    $result = $firstNum * $secondNum;
    break;

    case '/':
    $result = $firstNum / $secondNum;
    break;

    default:
    return "Sorry No command found";
}
print("<h2> Resutl of " . $firstNum . " " . $oprator . " " . $secondNum . " = " .$result ."</h2>")
?>