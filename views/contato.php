<div class="contato">
  <form method="POST" class="formulario">
    <?php if ( isset( $response['data']['message'] ) && !empty( $response['data']['message'] ) ): ?>
      <?php echo $response['data']['message'] ?>
    <?php endif; ?>

    <label for="name">Nome:</label><br />
    <input type="text" id="name" name="name" placeholder="Digite seu nome..." />

    <br />
    <br />

    <label for="email">E-mail:</label><br />
    <input type="email" id="email" name="email" placeholder="Digite seu email..." />

    <br />
    <br />

    <label for="message">Mensagem:<label><br />
    <textarea id="message" name="message" placeholder="Mensagem..."></textarea>

    <br />
    <br />

    <input type="submit" value="Enviar" />
  </form>
</div>
