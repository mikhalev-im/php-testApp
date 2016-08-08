<?php
  class Route {
    
    static function start() {
      // контроллер и действие по умолчанию
      $controllerName = 'Main';
      $actionName = 'Index';
      
      $routes = explode('/', $_SERVER['REQUEST_URI']);

      // получаем имя контроллера
      if ( !empty($routes[1]) ) {
        $controllerName = ucfirst($routes[1]);
      }
      
      // получаем имя экшена
      if ( !empty($routes[2]) ) {
        $actionName = ucfirst($routes[2]);
      }

      // добавляем префиксы
      $modelName = $controllerName.'Model';
      $controllerName = $controllerName.'Controller';
      $actionName = 'action'.$actionName;

      // подцепляем файл с классом модели (файла модели может и не быть)

      $modelFile = $modelName.'.php';
      $modelPath = "app_server/models/".$modelFile;
      if(file_exists($modelPath)) {
        include "app_server/models/".$modelFile;
      }

      // подцепляем файл с классом контроллера
      $controllerFile = $controllerName.'.php';
      $controllerPath = "app_server/controllers/".$controllerFile;
      if(file_exists($controllerPath)) {
        include "app_server/controllers/".$controllerFile;
      } else {
        /*
        правильно было бы кинуть здесь исключение,
        но для упрощения сразу сделаем редирект на страницу 404
        */
        Route::ErrorPage404();
      }
      
      // создаем контроллер
      $controller = new $controllerName;
      $action = $actionName;
      
      if(method_exists($controller, $action)) {
        // вызываем действие контроллера
        $controller->$action();
      } else {
        // здесь также разумнее было бы кинуть исключение
        Route::ErrorPage404();
      }
    
    }
    
    function ErrorPage404() {
      $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
      header('HTTP/1.1 404 Not Found');
      header("Status: 404 Not Found");
      header('Location:'.$host.'404');
    }
  }