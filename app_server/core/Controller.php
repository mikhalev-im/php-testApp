<?php
  
class Controller {
  
  protected $view;
  protected $layoutDir = ROOT_DIR . '/app_server/views/layouts/';
  protected $viewPath;
  public $request;
  public $response;

  
  public function __construct(Request $request = null, Response $response = null) {
    $this->request = $request !== null ? $request : new Request();
    $this->response = $response !== null ? $response : new Response();
    $this->view = new View($this);
  }
  
  public function beforeAction() {
    $this->getViewPath();
  }

  private function getViewPath() {
    $name = str_replace("Controller", "", get_class($this));
    $this->viewPath = ROOT_DIR . '/app_server/views/' . strtolower($name) . 'View.php';
  }
}