<?php

class View {
  
  private $controller;
  
  public function __construct(Controller $controller) {
    $this->controller = $controller;
  }
  
  public function render($filePath, $data = null) {
    
    ob_start();
    include $filePath . "";
    $renderedFile = ob_get_clean();
    $this->controller->response->content = $renderedFile;
    return $renderedFile;
  }

  public function renderWithLayout($layoutDir, $filePath, $data = null) {
    
    ob_start();
    require_once $layoutDir . "header.php";
    require_once $filePath . "";
    require_once $layoutDir . "footer.php";
    $renderedFile = ob_get_clean();
    
    $this->controller->response->setContent($renderedFile);
    return $renderedFile; 
  }
}