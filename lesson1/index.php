<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>fibonacci</title>
</head>
<body>
<h3 style="font-family: 'changa one', sans-serif;
	font-weight: normal; font-size:27px; color:#B60909;">fu*kin Fibonacci numbers</h3>
	<p>Here is the code</p>
	<p>$first = 0; <br/>   
$second = 1; <br/>

for($i=0;$i<=20;$i++)   <br/> 
{    <br/>
    $fib = $first + $second;    <br/>
    echo $fib.;  <br/>       
    $first=$second;    <br/>   
    $second=$fib;     
}   </p>

<p style="font-size: 20px; color: blue">

<?php

$first = 0;    
$second = 1; 

for($i=0;$i<=20;$i++)    
{    
    $fib = $first + $second;    
    echo $fib."<br />";         
    $first=$second;       
    $second=$fib;     
}   
?>
</p>
</body>
</html>