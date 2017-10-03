<?php

SESSION_start();
SESSION_destroy();
$_SESSION['isauthenticated'] = false;
header("Location: index.php");

?>