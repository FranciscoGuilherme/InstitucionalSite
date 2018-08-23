<?php
  class Debug
  {
    /**
     * -----------------------------------------------------------
     * Imprime o array na tela de forma organizada com <pre></pre>
     * -----------------------------------------------------------
     */

     public static function _array($array)
     {
       if ( is_array( $array ) )
       {
         echo '<pre>'.
                print_r( $array, true ).
              '<//pre>';
         exit;
       }
     }
  }
?>
