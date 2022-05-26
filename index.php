<?php
function here_to_delete($var){
  return $var !== 4;
  //return ($var != $value);
}

echo "<br>";

	

$age = array(1,2,3,4,5,6,7);
$value= 4;
print_r($age);
echo "<br>";
print_r(array_filter($age,"here_to_delete"));


?>
