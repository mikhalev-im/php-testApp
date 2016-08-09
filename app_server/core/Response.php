<?php

class Response {
  
  public $content;

  public function send() {
    echo $this->content;
    return $this;
  }
}