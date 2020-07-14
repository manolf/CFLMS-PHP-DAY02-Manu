
<!DOCTYPE html>
<html>
<head>
       <title>PHP example</title>
</head>
<body>
<?php

echo "<br><br>";
echo"<b>function writeMessage()</b>";
echo "<br>";
  function writeMessage()
  {
     echo  "Hello World";
  };
  writeMessage();


echo "<br><br>";
echo"<b>addFunction(10, 20)</b>";
echo "<br>";
// $num1;
// $num2;
  function addFunction($num1, $num2)
{
$sum = $num1 + $num2;
echo  "Sum of the two numbers is : $sum";
}
addFunction(10, 20);


echo "<br><br>";
echo"<b>addFunction2(10, 20) mit returnvalue</b>";
echo "<br>";
function addFunction2($num3, $num4)
{
$sum = $num3 + $num4;
return  $sum;
}
$return_value = addFunction2(10, 20);
echo  "Returned value from the function : $return_value";
?>

</body>
</html>