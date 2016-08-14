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

    if ($this->model->authenticate($email, $password)) {
      $this->request->session->setUserId($email);
      $this->response->setStatusCode(302);
      $this->response->setRedirect(Config::$homepage . '/profile');
    } else {
      $this->request->session->setError('incorrectLogin');
      $this->response->setRedirect(Config::$homepage);
    }

  }

  public function register() {
    $username = isset($this->request->body['username']) ? $this->request->body['username'] : null;
    $email = isset($this->request->body['email']) ? $this->request->body['email'] : null;
    $password = isset($this->request->body['password']) ? $this->request->body['password'] : null;
    $passwordReapeated = isset($this->request->body['passwordRepeat']) ? $this->request->body['passwordRepeat'] : null;
    $location = isset($this->request->body['location']) ? $this->request->body['location'] : 'Unknown';
    $website = isset($this->request->body['website']) ? $this->request->body['website'] : 'Unknown';
    $birthdate = isset($this->request->body['dateOfBirth']) ? $this->request->body['dateOfBirth'] : null;

    $data = [
      'username' => $username,
      'email' =>  $email,
      'password' => $password,
      'passwordRepeated' => $passwordReapeated,
      'location' => $location,
      'website' => $website,
      'birthdate' => $birthdate,
      'avatar' => '380x500.png'
    ];

    $res = $this->model->registerNewUser($data);

    if ($res && gettype($res) !== 'array') {
      $this->request->session->setUserId($email);
      $this->response->setStatusCode(302);
      $this->response->setRedirect(Config::$homepage . '/profile');
    } else {
      $this->request->session->setError($res);
      $this->response->setStatusCode(302);
      $this->response->setRedirect(Config::$homepage);
    }


  }

  public function restore() {

  }

  public function logout() {
    $this->request->session->destroySession();
    $this->response->setStatusCode(302);
    $this->response->setRedirect(Config::$homepage);
  }
}