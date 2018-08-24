<?php
  require 'configuration.php';
  require 'debug/debug.php';

  spl_autoload_register(function ($class)
  {
    global $file;

    path( $class, $file );

    if ( strpos( $class, 'Controller' ) > -1 )
    {
      if ( file_exists( $file['controller'] ) )
      {
        require_once $file['controller'];
      }
    }
    else if ( file_exists( $file['model'] ) )
    {
      require_once $file['model'];
    }
    else
    {
      require_once $file['core'];
    }
  });

  $core = new Core();
  $core -> run();
?>
