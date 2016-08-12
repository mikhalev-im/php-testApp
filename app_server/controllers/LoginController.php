<?php

class LoginController extends Controller {
  
// get fields
// validate
// check if correct
// login / register / restore

  private $loginPage = ROOT_DIR . '/app_server/views/mainView.php';


  public function login() {
    $email = $this->request->body['email'];
    $password = $this->request->body['password'];
    $remember = $this->request->body['remember'];

    if ($email == 'c1one@yandex.ru' && $password == 'password') {
      $this->request->session->setUserId('c1one@yandex.ru');
      $this->response->setStatusCode(302);
      $this->response->setRedirect(Config::$homepage . '/profile');
    } else {
      $this->request->session->setError('incorrectLogin');
      $this->response->setRedirect(Config::$homepage);
    }

  }

  public function register() {

  }

  public function restore() {

  }

  public function logout() {
    $this->request->session->destroySession();
    $this->response->setStatusCode(302);
    $this->response->setRedirect(Config::$homepage);
  }
}