<?php
  class SigninController extends Controller {
    function actionIndex() {
      $this->view->generate('signinView.php', 'templateView.php');
    }
  }