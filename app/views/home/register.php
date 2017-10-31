<?php require_once '../app/views/templates/headerPublic.php' ?>
<h1> REGISTRATION FORM </h1>
<P1> Please enter the required information below <P1>
<body>
<form action="login/register" method="POST"><br>
Username: <input type="text" name="username"/></br>
Password: <input type="password" name="password"/></br>
Email: <input type="text" name="email"/></br>
<input type="submit" name ="register" value="Register!"/>
<input type="submit" name = "cancel" value="Cancel"/>
</form>
    <?php require_once '../app/views/templates/footer.php' ?>
