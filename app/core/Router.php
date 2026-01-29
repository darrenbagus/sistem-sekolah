<?php

namespace App\Core;

use App\Controllers\StudentController;

class Router
{

   private $routes = [];
   public function add (string $method, string $uri, string $controller, string $funcion)
   {
     $this->routes[] = [
        'method' => $method,
        'uri' => $uri,
        'controller' => $controller,
        'function' => $funcion
     ];
     $patttern = '#^' . $patttern . '$#';

     if (preg_match($patttern, $uri, $matches)) {
        require_once './app/controllers/' . $route['controller'] . '.php';
        array_shift($matches);
        $controllerclass = 'App\\Controllers\\' . $route['controller'];
        $controller = new $controllerclass();

        $funcion = $route['function'];
        $controller->$funcion(...array_slice($matches, 1));

       return; 
     }

   }


  public function run ()
    {
       $method = $_SERVER['REQUEST_METHOD'];
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
 
   foreach ($this->routes as $route) {
      $patttern = str_replace(
         '(id)',
         '([0-9]+)',
         $route['uri']
      );
 
    $method = $_SERVER['REQUEST_METHOD'];
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
 
 
   
 
   http_response_code(404);
   echo '<h1>404 - Page Not Found</h1>';
   }
    

    }

}