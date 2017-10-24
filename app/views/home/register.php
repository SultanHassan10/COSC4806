<?php require_once '../app/views/templates/headerPublic.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Please create an account</h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal" action="/login/register" method="post">
			    <fieldset>
					<div class="form-group">
Username: <input type="text" name="username"/></br>
Password: <input type="password" name="password"/></br>
Email: <input type="text" name="email"/></br>
<input type="submit" name ="register" value="Register!"/>
<input type="submit" name = "cancel" value="Cancel"/>
</form>


    <?php require_once '../app/views/templates/footer.php' ?>
