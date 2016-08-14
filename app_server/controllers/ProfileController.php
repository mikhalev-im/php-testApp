<?php

class ProfileController extends Controller {
  
  public function index() {
    $userEmail = $this->request->session->isLoggedIn();

    if ($userEmail !== false) {
      $data = $this->model->getUserProfile($userEmail);
      $this->view->renderWithLayout($this->layoutDir, $this->viewPath, $data);
    } else {
      $this->request->session->setError('mustBeLoggedIn');
      $this->response->setStatusCode(302);
      $this->response->setRedirect(Config::$homepage);
    }
  }
}