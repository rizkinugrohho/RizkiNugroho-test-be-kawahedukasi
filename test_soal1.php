<?php
$data = [1, 2, 4, 3, 10, 11, 20, 5, 100, 200];

for($i =0;$i<count($data);$i++){
if($data[$i]==5){
	print("Fizz <br>");
}elseif($data[$i] == 11){
	print("Buzz <br>");
}elseif($data[$i] == 5 && $data[$i] == 11){
	print("FizzBuzz <br>");
}
}
?>
