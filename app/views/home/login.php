<?php require_once '../app/views/templates/headerPublic.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>You are not logged in! haha</h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal" action="/login/index" method="post">
			   
Username: <input type="text" name="username"/></br>
Password: <input type="password" name="password"/></br></br>
<input type="submit" name ="login" value="Log in"/>
<input type="submit" name = "failedAttempts" value="number of failed attempts"/>
</form>

<P2> please register if you don't have username and password <P2>
<form action="registeration.php" method="POST"><br>
<input type="submit" name ="register" value="REGISTER"/>
</form>

    <?php require_once '../app/views/templates/footer.php' ?>
