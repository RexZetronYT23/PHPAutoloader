<?php

class Autoloader {
  
  /**
  *
  *  Loads all classes
  * 
  *  @return void 
  * 
  */
  
  public function loadClasses() : void {
    
    spl_autoload_register(function ($class) : void {
      
      $file = __DIR__ . DIRECTORY_SEPERATOR . str_replace("\\", DIRECTORY_SEPERATOR, $class);
      
      if (file_exists($file)) {
        
        require_once $file;
        
      }
      
    })
    
  }
  
}

// open Autoloader class

$loader = new Autoloader();

// load all classes

$loader->loadClasses();

// now you had an autoloader, enjoy! :D
