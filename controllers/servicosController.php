<?php
  class servicosController extends Controller
  {
    public function index()
    {
      $data = array();

      $this -> loadTemplate( 'servicos', $data );
    }
  }
?>
