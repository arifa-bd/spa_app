<?php 

/**
 *  this function returns value from php global get array or
 *  from array passed as argument
 *  @since 1.0.0
 *  @return bool|string
 */

function spaGet($key,$array = false):bool|string {

    // check if the key is set
      if(!$key){
            return false;
      }

      if(isset($_GET[$key]))
      {
           return $_GET[$key];
      }

      if(is_array($array) && array_key_exists($key,$array))
      {
           return $array[$key];
      }

      return false;
}


/**
 * This function loads the controller
 *@since 1.0.0
 *@return void
 */
function loadController(): void
{
     $page = spaGet('page');
     $page = $page ? $page : 'main';
     $todo = spaGet('todo') ? spaGet('todo') : 'index';

     if ($page) {
          $controller = $page . 'Controller';
          $controllerFile = BASE_PATH . '/controllers/' . $controller . '.php';
          if (file_exists($controllerFile)) {
               include_once $controllerFile;
          }
     }

     $newController = new $controller();
     $newController->$todo();
}


/**
 * This function loads the view
 *@since 1.0.0
 *@return void
 */
function loadView($path): void {
     $page = spaGet('page');
     $page = $page ? $page : 'main';
     $todo = spaGet('todo') ? spaGet('todo') : 'index';

     $viewFile = BASE_PATH . '/views/' . $path . '.php';
     if (file_exists($viewFile)) {
          include_once $viewFile;
     }
    
}