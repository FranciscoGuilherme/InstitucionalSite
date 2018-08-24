<?php
  class homeController extends Controller
  {
    public function index()
    {
      $data = array();

      $portifolio = new Portifolio();

      $data['photos'] = $portifolio -> getPhotos( 8 );

      $this -> loadTemplate( 'home', $data );
    }
  }
?>
