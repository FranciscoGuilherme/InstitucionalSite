<?php
  class portifolioController extends Controller
  {
    public function index()
    {
      $data = array();

      $portifolio = new Portifolio();
      $data['photos'] = $portifolio -> getPhotos();

      $this -> loadTemplate( 'portifolio', $data );
    }
  }
?>
