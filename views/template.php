<html>
  <head>
    <title></title>

    <meta charset="UTF-8" />

    <link rel="stylesheet" href="/assets/css/template.css" />
    <link rel="stylesheet" href="/assets/css/home.css" />
  </head>

  <body>
    <header>
      <div class="topo">
        <div class="topo_inside"></div>
        <div class="banner"></div>
      </div>
    </header>

    <nav>
      <div class="menu">
        <ul>
          <a href="/"><li>Home</li></a>
          <a href="/portifolio"><li>Portifólio</li></a>
          <a href="/sobre"><li>Sobre</li></a>
          <a href="/servicos"><li>Serviços</li></a>
          <a href="/contato"><li>Contato</li></a>
        </ul>
      </div>
    </nav>

    <section>
      <article>
        <div class="container">
          <?php $this -> loadView( $viewName, $data ); ?>
        </div>
      </article>
    </section>

    <aside>
    </aside>

    <footer>
      <div class="footer"></div>
    </footer>
  </body>
</html>
