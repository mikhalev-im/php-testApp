<?php

class ProfileController extends Controller {
  
  public function index() {
    $this->request->session->setPreviousPage('profile');
    if ($this->request->session->isLoggedIn()) {
      $this->view->renderWithLayout($this->layoutDir, $this->viewPath);
    } else {
      $this->request->session->setError('mustBeLoggedIn');
      $this->response->setStatusCode(302);
      $this->response->setRedirect(Config::$homepage);
    }
  }
}