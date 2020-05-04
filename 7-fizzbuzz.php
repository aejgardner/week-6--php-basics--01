<?php 

for ($i = 1; $i <= 100; $i += 1) {

    $result = ($i % 3 === 0) ? "Fizz" : "";
  
    $result .= ($i % 5 === 0) ? "Buzz" : "";
  
    echo ($result !== "" ? $result : $i) . "\n"; 
}