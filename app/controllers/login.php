<?php

class Login extends Controller {
    public function index() {
        $user = $this->model('User');
//my code
        	if(isset($_POST['login'])){
		for($j = 0; $j < $NArrlength; $j++) {
		if($_POST['username'] == $names[$j] && $_POST['password'] == $pass[$j]){
			$_SESSION['user'] = $_POST['username'];
			$_SESSION['pass'] = $_POST['password'];
			$_SESSION['isauthenticated'] = true;
		header("location:welcome.php");	
}//if statement
	else {
	//	$_SESSION['isauthenticated'] = false;
		echo "invalid password or username";
			//$_SESSION['faild'] = ($_SESSION['faild']=+1);
			$_SESSION['failed']++;
		die();
	
	}	
	}

}//else if statement
        
        header('Location: /home');
    }
	
	public function register () {
		$user = $this->model('User');
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$user->register($username, $password);
			$_SESSION['auth'] = true;
		}
		
		$this->view('home/register');
	}
}
