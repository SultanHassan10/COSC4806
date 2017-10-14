<h1> REGISTRATION FORM </h1>
<P1> Please enter the required information below <P1>
<body>
<form action="registeration.php" method="POST"><br>
Username: <input type="text" name="username"/></br>
Password: <input type="password" name="password"/></br>
Email: <input type="text" name="email"/></br>
<input type="submit" name ="register" value="Register!"/>
<input type="submit" name = "cancel" value="Cancel"/>
</form>

<?php
try{
	$dbc = new PDO ('mysql:host=localhost;dbname=cosc','root','');
	$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	if(isset($_POST[register])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		
		$insert = $dbc->prepare("INSERT_INTO users(username, password, email) VALUES (:username,:password,:email)");
		
		$insert->bindParam('username',$username);
		$insert->bindParam('password',$password);
		$insert->bindParam('email',$email);
		$insert->excute();
		header("location:index.php");
	}
 }catch(PDOException $e){
	 echo $e->getMessage();
}





?>