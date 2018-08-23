<?php
  class Controller
  {
    /**
     * -----------------------------------------
     * Carrega uma view na tela a partir do nome
     * -----------------------------------------
     *
     * @param string $viewName Nome da view
     * @param array $data Dados a serem carregados juntos com a view
     */

    public function loadView($viewName, $data = array())
    {
      extract( $data );

      include 'views/'.$viewName.'.php';
    }

    /**
     * --------------------------------------------------------------
     * Carrega o template do site com os dados de uma view específica
     * --------------------------------------------------------------
     *
     * @param string $viewName Nome da view
     * @param array $data Dados a serem carregados juntos com a view
     */
     
    public function loadTemplate($viewName, $data = array())
    {
      include 'views/template.php';
    }
  }
?>
