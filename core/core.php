<?php
  require 'core/controller.php';

  class Core
  {
    public function run()
    {
      $current = array(
        'Controller' => '',
        'Action' => '',
        'Params' => array()
      );

      $URL = explode( 'index.php', $_SERVER['PHP_SELF'] );
      $URL = end( $URL );

      $this -> setViewController( $URL, $current );

      $controller = new $current['Controller']();

      call_user_func_array( array( $controller, $current['Action'] ), $current['Params'] );
    }

  /**
   * ----------------------------------------
   * Configura o nome do controller e da view
   * ----------------------------------------
   *
   * @param string $URL Rota de acesso a uma página
   * @param array $current Armazena o controller, a action e os parâmetros
   *                       - $current['Controller']
   *                       - $current['Action']
   *                       - $current['Params']
   */

   private function setViewController(&$URL, &$current)
   {
     if ( !empty( $URL ) )
     {
       $URL = explode( '/', $URL );

       $current['Controller'] = $URL[1];
       $current['Action'] = ( isset( $URL[2] ) ) ? $URL[2] : 'index';

       array_shift( $URL );
       array_shift( $URL );
       array_shift( $URL );

       if ( count( $URL ) )
       {
         $current['Params'] = $URL;
       }
     }
     else
     {
       $current['Controller'] = 'homeController';
       $current['Action'] = 'index';
     }
   }
 }
?>
