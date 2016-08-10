<?php

class Request {
  
  // parameters from url
  public $params = ["controller" => null, "action" => null, "args" => null];
  
  // POST data
  public $body = [];

  // querystring arguments
  public $query = [];

  // URL
  public $url = "/";

  // user local
  public $local = "en";

  // session id
  public $session = null;

  public function __construct() {
    $this->url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : null;
    $this->query = $_GET;
    $this->splitUrl();
    $this->body = $_POST;
    $this->session = new Session();
  }

  private function splitUrl() {
    if (!empty($this->url)) {
      $urlSplit = explode('/', filter_var(trim($this->url, '/'), FILTER_SANITIZE_URL));

      $this->params["controller"] = !empty($urlSplit[0]) ? ucwords($urlSplit[0]).'Controller' : null;
      $this->params["action"] = !empty($urlSplit[1]) ? $urlSplit[1] : null;

      unset($urlSplit[0], $urlSplit[1]);

      $this->params["args"] = !empty($urlSplit) ? array_values($urlSplit) : [];
    }
  }

}