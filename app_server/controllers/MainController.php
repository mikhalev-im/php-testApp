<?php

class MainController extends Controller {

  public function index() {
    $lang = $this->request->session->getLanguage();
    $err = $this->request->session->getError();

    if ($this->request->session->isLoggedIn()) {
      $this->response->setRedirect(Config::$homepage . '/profile');
    } elseif (!empty($err)) {
      $this->request->session->unsetError();
      $this->request->session->setPreviousPage('/');
      $this->view->renderWithLayout($this->layoutDir, $this->viewPath, ['error' => $err, 'language' => $lang]);
    } else {
      $this->request->session->setPreviousPage('/');
      if (isset($this->request->body['switchToRu'])) {
        $this->request->session->setLanguage('ru');
        $lang = 'ru';
      } elseif (isset($this->request->body['switchToEn'])) {
        $this->request->session->setLanguage('en');
        $lang = 'en';
      }
      $this->view->renderWithLayout($this->layoutDir, $this->viewPath, ['language' => $lang]);
    }
  }
}