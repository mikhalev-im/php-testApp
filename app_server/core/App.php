<?php

class App {
  

  private $controller = null;
  private $method = null;
  private $args = [];


  public function __construct() {
    $this->request = new Request();
    $this->response = new Response();

    $this->controller = $this->request->params["controller"];
    $this->method = $this->request->params["action"];
    $this->args = $this->request->params["args"];
  }

  public function run() {

    if (empty($this->controller)) {
      $this->controller = 'MainController';
    } elseif (!class_exists($this->controller)) {
      $this->notFound();
      return;
    }

    if (empty($this->method)) {
      $this->method = "index";
    } elseif (!method_exists($this->controller, $this->method)) {
      $this->notFound();
      return;
    }

    return $this->invoke($this->controller, $this->method, $this->args);
  }

  private function invoke($controller, $method = "index", $args = []) {

    $this->controller = new $controller($this->request, $this->response);

    $this->controller->$method();

    return $this->response->send();
  }

  private function notFound() {
    echo '404 NOT FOUND';
    return;
  }

}