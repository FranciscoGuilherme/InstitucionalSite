<?php
  class contatoController extends Controller
  {
    public function index()
    {
      $data = array( 'response' => $this -> response );

      if ( isset( $_POST['name'] ) && !empty( $_POST['name'] ) )
      {
        $data['name'] = addslashes( $_POST['name'] );
        $data['email'] = addslashes( $_POST['email'] );
        $data['message'] = addslashes( $_POST['message'] );

        $email = array(
          'to'      => 'suporte@outlook.com',
          'subject' => 'Contatando',
          'message' => '<b>Name: </b>'.$data['name'].'<br />'.
                       '<b>E-mail: </b>'.$data['email'].'<br />'.
                       '<b>Messagem: </b>'.$data['message'].'<br />',
          'header'  => array(
                         'from'   => 'From: somethig@gmail.com'.'\r\n',
                         'replay' => 'Replay-To: '.$data['email'].'\r\n',
                         'xmail'  => 'X-Mailer: PHP/'.phpversion()
                       )
        );

        @mail( $email['to'], $email['subject'], $email['message'],
              $email['header']['from'].
              $email['header']['replay'].
              $email['header']['xmail']
        );

        $data['response']['data']['message'] = 'E-mail enviado com sucesso.'.'<br /><br/>';
      }

      $this -> loadTemplate( 'contato', $data );
    }
  }
?>
