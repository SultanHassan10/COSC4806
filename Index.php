<h1> LOG IN </h1>
<P1> Please enter your username and password <P1>
<body>
<form action="index.php" method="POST"><br>
Username: <input type="text" name="username"/></br>
Password: <input type="password" name="password"/></br></br>
<input type="submit" name ="login" value="Log in"/>
<input type="submit" name = "faildAttempts" value="number of faild attempts"/>

</form>
<?php
SESSION_start();

$_SESSION['faild'] = 0; 

$names = array("Sultan","Salman","Faisal","Mazin");
$pass = array("1111", "2222", "3333", "4444");
$NArrlength = count($names);
	if(isset($_POST['login'])){
		for($j = 0; $j < $NArrlength; $j++) {
		if($_POST['username'] == $names[$j] && $_POST['password'] == $pass[$j]){
			$_SESSION['user'] = $_POST['username'];
			$_SESSION['pass'] = $_POST['password'];
			$_SESSION['isauthenticated'] = true;
		header("location:welcome.php");	
}//if statement
	else {
		$_SESSION['isauthenticated'] = false;
		$_SESSION['faild'] = $_SESSION['faild'] + 1;
	}	
}//else if statement

}
	if(isset($_POST['faildAttempts'])){
		echo "number of invalid info attempts ".$_SESSION['faild'];
	}
	


?>


<body>