<?php

class ProfileController extends Controller {
  
  public function index() {
    if ($this->request->session->isLoggedIn()) {
      $this->view->renderWithLayout($this->layoutDir, $this->viewPath);
    } else {
      $this->response->setStatusCode(302);
      $this->response->setRedirect('http://localhost:8000/');
    }
  }
}