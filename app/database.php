<?php

 $DB_HOST = "locahost";
 $DB_DATABASE = "cosc";
 $DB_USER = "root";
 $DB_PASS= "";

function db_connect() {
    try {
        $dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_DATABASE . ';charset=utf8', DB_USER, DB_PASS);
        return $dbh;
    } catch (PDOException $e) {
		echo "Failed to get DB handle: " . $e->getMessage() . "\n";
    }
}
