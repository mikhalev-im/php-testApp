<?php

class Session {
  
  private $sessionId;

  public function __construct() {
    session_start();
    $this->session_id = session_id();
    $this->checkSessionExpire();
  }

  public function setUserId($userId) {
    $_SESSION['USER_ID'] = $userId;
    return;
  }

  public function isLoggedIn() {
    return isset($_SESSION['USER_ID']);
  }

  public function setLanguage($lang) {
    $_SESSION['LANGUAGE'] = $lang;
    return;
  }

  public function getLanguage() {
    return isset($_SESSION['LANGUAGE']) ? $_SESSION['LANGUAGE'] : 'en';
  }

  public function setError($err) {
    $_SESSION['ERROR'] = $err;
    return;
  }

  public function unsetError() {
    unset($_SESSION['ERROR']);
    return;
  }

  public function getError() {
    return isset($_SESSION['ERROR']) ? $_SESSION['ERROR'] : null;
  }

  public function destroySession() {
    // unset $_SESSION variable for the run-time 
    session_unset();
    // destroy session data in storage
    session_destroy();
    return;
  }

  public function checkSessionExpire() {

    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
      $this->destroySession();
    }

    $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
    return;
  }
}