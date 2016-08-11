<?php

class View {
  
  private $controller;
  
  public function __construct(Controller $controller) {
    $this->controller = $controller;
  }

  public function renderWithLayout($layoutDir, $filePath, $data = null) {
    if (!isset($data['local'])) {
      $data['local'] = 'ru';
    }

    $lc = $this->getDictionary($data['local']);

    ob_start();
    require_once $layoutDir . "header.php";
    require_once $filePath . "";
    require_once $layoutDir . "footer.php";
    $renderedFile = ob_get_clean();
    
    $this->controller->response->setContent($renderedFile);
    return $renderedFile; 
  }

  private function getDictionary($local) {
    return require_once ROOT_DIR . '/app_server/local/' . $local .'.php';
  }
}