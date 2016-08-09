<?php

class Request {
  
  // parameters from url
  public $params = ["controller" => null, "action" => null, "args" => null];
  
  // POST data
  public $body = [];

  // querystring arguments
  public $query = [];

  // URL
  public $url = [];

  public function __construct() {
    $this->body = $this->formBody($_POST, $FILES);
    $this->query = $_GET;
    $this->url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : null;
  }

  private function formBody() {

  }

}