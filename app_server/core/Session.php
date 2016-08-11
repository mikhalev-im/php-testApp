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

  public function setPreviousPage($previousPage) {
    return $_SESSION['PREVIOUS_PAGE'] = $previousPage;
  }

  public function getPreviousPage() {
    return isset($_SESSION['PREVIOUS_PAGE']) ? $_SESSION['PREVIOUS_PAGE'] : null;
  }

  public function destroySession() {
    session_unset();
    session_destroy();
    return;
  }

  public function checkSessionExpire() {

    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
      // last request was more than 30 minutes ago
      session_unset();     // unset $_SESSION variable for the run-time 
      session_destroy();   // destroy session data in storage
    }

    $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
    return;
  }
}