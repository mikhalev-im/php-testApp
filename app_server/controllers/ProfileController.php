<?php

class ProfileController extends Controller {
  
  public function index() {
    $this->view->renderWithLayout($this->layoutDir, $this->viewPath);
  }
}