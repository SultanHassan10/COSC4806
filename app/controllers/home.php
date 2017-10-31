<?php

class Home extends Controller {

    public function index($name = '') {		
        $user = $this->model('User');
		
		$message = 'Hello '.$_SESSION['user'].', welcome to your page, your password is '.$_SESSION['pass'].'Today date is: '.date("d/m/y");
		
        $this->view('home/index', ['message' => $message]);
    }

    public function login($name = '') {
        $this->view('home/login');
    }

}
