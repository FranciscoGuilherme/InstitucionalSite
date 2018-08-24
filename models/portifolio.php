<?php
  class Portifolio extends Conection
  {
    private $id;
    private $image;

    public function __construct()
    {
      parent::__construct();
    }

    public function getImage()
    {
      return $this -> image;
    }

    public function setImage($image)
    {
      $this -> image = $image;
    }

    /**
     * -----------------------------------------------------
     * GET | Retorna uma quantidade $limit de fotos do banco
     * -----------------------------------------------------
     *
     * @param int $limit Quantidade de fotos a serem resgatadas do banco
     * @return array Registros com os dados das imagens ou um array vazio
     */

    public function getPhotos($limit = 0)
    {
      try
      {
        $query = 'SELECT * FROM portifolio ';
        $query = ( $limit > 0 ) ? $query.'LIMIT '.$limit : $query;
        $query = $this -> db -> prepare( $query );
        $query -> execute();

        if ( ( $query -> rowCount() ) > 0 )
        {
          return $query -> fetchAll();
        }

        return $query = array();
      }
      catch ( PDOException $ex)
      {
        'Falha ao resgatar as imagens. Detalhes '.$ex -> getMessage();
      }
    }
  }
?>
