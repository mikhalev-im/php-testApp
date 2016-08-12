<?php

class Model {
  
  private $dsn = null;
  protected $pdo = null;
  private $options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ];

  public function __construct() {
    $user = Config::db['user'];
    $pass = Config::db['pass'];
    $dbname = Config::db['dbname'];
    $charset = Config::db['charset'];

    $this->dsn = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=' . $charset;
    $this->pdo = new PDO($this->dsn, $user, $pass, $options);
  }

  protected function validateEmail($email) {
    return (bool)filter_var($email, FILTER_VALIDATE_EMAIL);
  }

  protected function validateDate($date) {

  }

  protected function validatePassword($string) {
    return;
  }

  protected function validateLink($link) {

  }

  protected function validateUserName($name) {

  }

  protected function validatePlace($place) {
    
  }

}