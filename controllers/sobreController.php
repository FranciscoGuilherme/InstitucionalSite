<?php
  class sobreController extends Controller
  {
    public function index()
    {
      $data = array();

      $this -> loadTemplate( 'sobre', $data );
    }
  }
?>
