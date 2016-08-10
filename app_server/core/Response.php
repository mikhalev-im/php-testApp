<?php

class Response {
  
  private $headers;
  private $content;
  private $statusCode;
  private $statusText;
  private $redirect;
  private $version = '1.1';

  private $statusTexts = [
    200 => 'OK',
    302 => 'Found',
    400 => 'Bad Request',
    401 => 'Unauthorized',
    403 => 'Forbidden',
    404 => 'Not Found',
    500 => 'Internal Server Error'
  ];

  public function __construct($content = "", $status = 200, $headers = []) {
    $this->content = $content;
    $this->statusCode = $status;
    $this->headers = $headers;
  }

  public function setStatusCode($code) {
    $this->statusCode = $code;
    $this->statusText = $this->statusTexts[$code];
  }

  public function setRedirect($link) {
    $this->headers['Location'] = $link;
  }

  public function setContent($content) {
    $this->content = $content;
  }

  public function send() {
    $this->sendHeaders();
    $this->sendContent();
    
    return $this;
  }

  private function sendContent() {
    echo $this->content;
    return;
  }

  private function sendHeaders() {
    if (headers_sent()) {
      return $this;
    }

    header('HTTP/' . $this->version . ' ' . $this->statusCode . ' ' . $this->statusText);

    foreach ($this->headers as $name => $value) {
      header($name . ': ' . $value);
    }
  }

}