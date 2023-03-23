<?php

/*
  App Core Class
  Creates URL & loads core controller
  URL FORMAT - /controller/method/params
*/

class Core {
  protected $currentController = 'Pages';
  protected $currentMethod = 'index';
  protected $params = [];

  public function __construct() {
    $this->getUrl();
  }

  public function getUrl() {
    if(isset($_GET['url'])) {
      echo $_GET['url'];
    }
  }
}