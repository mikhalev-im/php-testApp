<?php

class MainController extends Controller {

  public function index() {
    if ($_SESSION['remember']) {
      $this->response->setRedirect('http://localhost:8000/profile');
    }

    $this->view->renderWithLayout($this->layoutDir, $this->viewPath);
  }
}