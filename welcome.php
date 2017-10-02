<?php
$username = $_POST['username'];
$password = $_POST['password'];
$names = array("Sultan"=>"1111","Salman"=>"2222","Faisal"=>"3333","Mazin"=>"4444");
//$pass = array("1111", "2222", "3333", "4444");
$NArrlength = count($names);
//$PArrlength = count($pass);

//for($i = 0; $i < $PArrlength; $i++) {
	for($j = 0; $j < $NArrlength; $j++) {

//	if(($username == $names[$j] AND $password == $pass[$j]) == TRUE){
	if(($username == $names[$j]) == TRUE){
	echo "Hello $username, you have successfully logged in!";
	
}//if statement

//	elseif(($username == $names[$j] AND $password == $pass[$j]) == FALSE){
	else{
	echo "password or username is wrong!!!";
	
}//else if statement
}//second for loop
//}//first for loop

?>


