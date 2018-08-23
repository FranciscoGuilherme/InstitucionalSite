<?php
  require 'environment.php';

  /**
   * -----------------------------------------
   * Informações para acesso ao banco de dados
   * -----------------------------------------
   */

   global $file;
   global $db_configuration;

   $file = array();
   $db_configuration = array();

   if ( ENVIRONMENT == 'development' )
   {
     $db_configuration['name'] = 'institucional';
     $db_configuration['host'] = 'localhost';
     $db_configuration['user'] = 'root';
     $db_configuration['pass'] = '';
   }

   /**
    * ------------------------------------------------
    * Informações de acesso aos arquivos para autoload
    * ------------------------------------------------
    */

    function path($class, &$file)
    {
      $file['core'] = 'core/'.$class.'.php';
      $file['view'] = 'views/'.$class.'.php';
      $file['model'] = 'models/'.$class.'.php';
      $file['controller'] = 'controllers/'.$class.'.php';
    }
?>
