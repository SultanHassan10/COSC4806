<?php
SESSION_start();
if(!isset($_SESSION['isauthenticated'])){
	header("location:index.php");
}
echo "Hello ".$_SESSION['user'].", welcome to your page <br>";
echo "your password is ".$_SESSION['pass']."<br>";
echo "Today's date is: ".date("d/m/y");
?>

<form method="post" action="logout.php">
<br> <input type="submit" value="Logout"/>
</form>


