<?php

class LoginController extends Controller {
  
// get fields
// validate
// check if correct
// login / register / restore


  public function login() {
    $email = $this->request->body['email'];
    $password = $this->request->body['password'];
    $remember = $this->request->body['remember'];

    session_id('test');
    session_start();
    $_SESSION['remember'] = !empty($remember);

    $this->response->setStatusCode(302);
    $this->response->setRedirect('http://localhost:8000/profile');
  }

  public function register() {

  }

  public function restore() {

  }
}