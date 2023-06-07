<?php 
include_once "config.php";
/**
 * This is a home page of our single page application 
 * 
 */

 /**
  *It will include all lib files 
   * @since 1.0.0
   * @return void
  */
 function includes():void{

  $directoryList = ["lib"];

  foreach ($directoryList as $directory) {

    $directoryPath = __DIR__ . '/' . $directory;

    $files = scandir($directoryPath);
   
    foreach ($files as $file) {
      if ($file !== '.' && $file !== '..') {
              $filePath = $directoryPath . '/' . $file;

        if (is_file($filePath) && pathinfo($filePath, PATHINFO_EXTENSION) === 'php') {
          include_once $filePath;
        }
      }
   }

  }

 }

 // call the includes function load all lib files 
includes();

include_once "views/main.php";

