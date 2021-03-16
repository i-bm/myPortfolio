<?php 

// for($i = 0; $i<=100; $i++){
// // $output = "";
// // if($i%3 == 0){echo $output.'Fizz'.'<br>';}
// // if($i%5 == 0){echo $output.'Bizz'.'<br>';}

// if($i % 3 == 0 and $i % 5 == 0){
//  echo 'FizzBuzz'.'<br>';
// }
// else if($i % 3 == 0 ){ echo 'Fizz'.'<br>';}
// else if($i % 5 == 0 ){ echo 'Buzz'.'<br>';}
	

// else {
// 	echo $i.'<br>';
// }
// }


$mac = system('arp -an');
echo $mac;



for($i = 0; $i <= 100; $i++){
	$output = "";
	if($i % 3 == 0){ echo $output .='Fizz'.'<br>';}
	if($i % 5 == 0 ){ echo $output .='Buzz'.'<br>';}
	if($output ==''){echo $i.'<br>';}
}

?>

