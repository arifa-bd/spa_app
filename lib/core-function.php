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

      if(array_key_exists($key,$array))
      {
           return $array[$key];
      }

      return false;
}
