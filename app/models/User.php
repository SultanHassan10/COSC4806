<?php

class User {

    public $username;
    public $password;
    public $auth = false;

    public function __construct() {
        
    }

    public function authenticate() {
        /*
         * if username and password good then
         * $this->auth = true;
         */
		 
		$db = db_connect();
        $statement = $db->prepare("select * from users
                                WHERE name = :name;
                ");
        $statement->bindValue(':name', $this->username);
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
		
		if ($rows) {
			$this->auth = true;
			$_SESSION['name'] = $rows[0]['name'];
			$_SESSION['age'] = $rows[0]['age'];
		}
    }
	
	public function register ($username, $password, $email) {
		$db = db_connect();
		$insert = $db->prepare("INSERT INTO users(username, password, email) VALUES (:username,:password,:email)");
		$insert->bindParam('username',$username);
		$insert->bindParam('password',$password);
		$insert->bindParam('email',$email);
		$insert->excute();
		

	}

}
