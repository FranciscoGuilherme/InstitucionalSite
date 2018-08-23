<?php
  class Conection
  {
    protected $db;

    public __construct()
    {
      global $db_configuration;

      try
      {
        $dsn = 'mysql:dbname='.$db_configuration['name'].';host='.global $db_configuration['host'];

        $this -> db = new PDO( $dsn, $db_configuration['user'], $db_configuration['pass'] );
      }
      catch ( PDOException $ex )
      {
        echo 'Falha na conexão com o banco. Detalhes: '.$ex -> getMessage();
      }
    }
  }
?>
