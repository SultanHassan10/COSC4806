<h1> LOG IN </h1>
<P1> Please enter your username and password <P1>
<body>
<form action="index.php" method="POST">
<?php
if(isset($_GET['status']) && $_GET['status'] == "false"){
	echo "password or username is wrong!!!";
}
?>
<br>username: <input type="text" name="username"/></br>
password: <input type="password" name="password"/>
<input type="submit" value="submit"/>

</form>
<?php
$_SESSION['failed'] = 0; 
SESSION_start();
//if(isset($_POST['submit'])){
//$username = $_POST['username'];
//$password = $_POST['password'];
$names = array("Sultan","Salman","Faisal","Mazin");
$pass = array("1111", "2222", "3333", "4444");
$NArrlength = count($names);
//$PArrlength = count($pass);

//for($i = 0; $i < $PArrlength; $i++) {
	if (isset($_POST['username']) && isset($_POST['password'])){
		
		for($j = 0; $j < $NArrlength; $j++) {
		if($_POST['username'] == $names[$j] && $_POST['password'] == $pass[$j]){
			
		header("location:welcome.php");
	//echo "HELLO $username";	
}//if statement
	else {
	header ("location:index.php?status=false");
	}	
}//else if statement
}//second for loop

//}//first for loop

?>
<body>