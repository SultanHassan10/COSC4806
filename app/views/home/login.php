<?php require_once '../app/views/templates/headerPublic.php' ?>
<h1> LOG IN </h1>
<P1> Please enter your username and password <P1>
<body>

<form action="login/index" method="post"><br>
Username: <input type="text" name="username"/></br>
Password: <input type="password" name="password"/></br></br>
<input type="submit" name ="login" value="Log in"/>
<input type="submit" name = "failedAttempts" value="number of failed attempts"/>
</form>

<P2> please register if you don't have username and password <P2>
<form action="login/register" method="POST"><br>
<input type="submit" name ="register" value="REGISTER"/>
</form>
    <?php require_once '../app/views/templates/footer.php' ?>
