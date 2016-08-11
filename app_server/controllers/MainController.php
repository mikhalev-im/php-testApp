<?php

class MainController extends Controller {

  public function index() {
    if ($this->request->session->isLoggedIn()) {
      $this->response->setRedirect('http://localhost:8000/profile');
    }

    $this->view->renderWithLayout($this->layoutDir, $this->viewPath);
  }
}