<?php

class MainController extends Controller {

  public function index() {
    if ($this->request->session->isLoggedIn()) {
      $this->response->setRedirect('http://localhost:8000/profile');
    } elseif ($this->request->session->getPreviousPage() == 'profile') {
      $this->request->session->setPreviousPage('/');
      $this->view->renderWithLayout($this->layoutDir, $this->viewPath, ['error' => 'You must be logged in to access this page']);
    } else {
      $this->request->session->setPreviousPage('/');
      $this->view->renderWithLayout($this->layoutDir, $this->viewPath);
    }
  }
}