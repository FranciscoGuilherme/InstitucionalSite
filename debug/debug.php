<?php
  class Debug
  {
    /**
     * -----------------------------------------------------------
     * Imprime o array na tela de forma organizada com <pre></pre>
     * -----------------------------------------------------------
     */

     public static function _array($data)
     {
       if ( is_array( $data ) )
       {
         echo '<pre>'.
                print_r( $data, true ).
              '</pre>';
       }
       else
       {
         echo '<pre>'.
                $data.
              '</pre>';
       }

       exit;
     }
  }
?>
