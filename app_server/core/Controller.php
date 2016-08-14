<?php
  
class Controller {
  
  protected $view;
  protected $layoutDir = ROOT_DIR . '/app_server/views/layouts/';
  protected $viewPath;
  protected $model;
  public $request;
  public $response;

  
  public function __construct(Request $request = null, Response $response = null) {
    $this->request = $request !== null ? $request : new Request();
    $this->response = $response !== null ? $response : new Response();
    $this->view = new View($this);
    $this->getViewPathAndModelName();
    $this->model = class_exists($this->model) ? new $this->model() : null;
  }

  private function getViewPathAndModelName() {
    $name = str_replace("Controller", "", get_class($this));
    $this->viewPath = ROOT_DIR . '/app_server/views/' . strtolower($name) . 'View.php';
    $this->model = $name . 'Model';
  }

}