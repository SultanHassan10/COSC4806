<?php

/* database connection stuff here
 * 
 */

function db_connect() {
    try {
        $dbh = new PDO('mysql:127.0.0.1;=$severname;dbname=cosc','root','');
	return $dbh;
    } catch (PDOException $e) {
		echo $e->getMessage();
        //We should set a global variable here so we know the DB is down
    }
}
