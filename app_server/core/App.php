<?php

class App {
  

  private $controller = null;
  private $method = null;
  private $args = [];


  public function __construct() {
    $this->request = new Request();
    $this->response = new Response();
  }

  public function run() {
    $this->splitUrl();

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

    $this->controller->beforeAction();
    $this->controller->$method();

    return $this->response->send();
  }

  private function splitUrl() {
    $url = $this->request->url;

    if (!empty($url)) {
      $url = explode('/', filter_var(trim($url, '/'), FILTER_SANITIZE_URL));

      $this->controller = !empty($url[0]) ? ucwords($url[0]).'Controller' : null;
      $this->method = !empty($url[1]) ? $url[1] : null;

      unset($url[0], $url[1]);

      $this->args = !empty($url) ? array_values($url) : [];
    }
  }

  private function notFound() {
    echo 'NOT FOUND 404';
    return;
  }

}