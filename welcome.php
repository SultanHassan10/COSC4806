<?php
SESSION_start();
echo "Hello ".$_SESSION['user'].", welcome to your page <br>";
echo "your password is ".$_SESSION['pass']."<br>";
echo "Today's date is: ".date("d/m/y");
?>

<form method="post" action="logout.php">
<br> <input type="submit" value="Logout"/>
</form>


