<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=0.9" />
    <script
      src="https://kit.fontawesome.com/7073a72774.js"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <title>Menu</title>
  </head>
  <style>
    * {
      box-sizing: border-box;
    }
    body {
      background-color: #121214;
      height: 100vh;
    }
    footer {
      margin-top: 11.9rem;
    }
    li:active {
      color: aqua;
    }
  </style>
  <body>
    <div class="content">
      <header>
        <div class="px-3 py-2 text-bg-dark">
          <div class="container">
            <div
              class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start"
            >
              <a
                href="/"
                class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-info-emphasis text-decoration-none"
              >
                <i class="fa-solid fa-bars-progress fa-2x me-4"></i>
                <h2 class="font-monospace text-info-emphasis">Gerenciador</h2>
              </a>

              <ul
                class="nav menu-inner col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small"
              >
                <li>
                  <a href="menu.html" class="nav-link text-secondary active">
                    Inicio
                  </a>
                </li>
                <li>
                  <a href="lista.html" class="nav-link text-white">
                    Lista de Produtos
                  </a>
                </li>
                <li>
                  <a href="cadastrar.html" class="nav-link text-white">
                    Cadastrar Produto
                  </a>
                </li>
                <li>
                  <a href="index.html" class="nav-link text-danger">
                    Sair
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </header>
      <div class="col-md-12 p-5">
        <main id="conteudo">
          <div class="row row-cols row-cols-md-3 mb-3 text-center">
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm bg-success-subtle">
                <div class="card-header py-3">
                  <h4 class="my-0 fw-normal">Quantidade Total de Produtos</h4>
                </div>
                <div class="card-body">
                  <h1 class="card-title pricing-card-title">
                    0<small class="text-muted fw-light">/mo</small>
                  </h1>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li>10 users included</li>
                  </ul>
                  <button
                    type="button"
                    class="w-100 btn btn-lg btn-outline-primary"
                  >
                    Visualizar
                  </button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm bg-primary-subtle">
                <div class="card-header py-3">
                  <h4 class="my-0 fw-normal">Variedade de Produtos</h4>
                </div>
                <div class="card-body">
                  <h1 class="card-title pricing-card-title">
                    $15<small class="text-muted fw-light">/mo</small>
                  </h1>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li>20 users included</li>
                  </ul>
                  <button type="button" class="w-100 btn btn-lg btn-primary">
                    Visualizar
                  </button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm bg-warning-subtle">
                <div class="card-header py-3">
                  <h4 class="my-0 fw-normal">Valor total de Produtos</h4>
                </div>
                <div class="card-body">
                  <h1 class="card-title pricing-card-title">
                    $29<small class="text-muted fw-light">/mo</small>
                  </h1>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li>Produto mais caro:</li>
                  </ul>
                  <button type="button" class="w-100 btn btn-lg btn-primary">
                    Visualizar
                  </button>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>

    <footer
      class="d-flex flex-wrap justify-content-between align-items-center p-5 bg-dark"
    >
      <p class="col-md-4 mb-0 text-white">
        © 2023 Matheus N. Borges, Prog Web II
      </p>

      <a
        href="/"
        class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none"
      >
        <svg class="bi me-2" width="40" height="32">
          <use xlink:href="#bootstrap"></use>
        </svg>
      </a>

      <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item">
          <a href="#" class="nav-link px-2 text-white"
            ><i class="fa-brands fa-github me-2"></i>GitHub</a
          >
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link px-2 text-danger">Sair</a>
        </li>
      </ul>
    </footer>
  </body>
  <script>
    $(".menu-inner a").click(function (e) {
      e.preventDefault();

      var href = $(this).attr("href");
      if (href == "menu.html") {
        window.location.reload();
      } else {
        $("menu-inner a").each(function (index, elemente) {
        $(elemente).removeClass("active");
      });
      $(this).parent().addClass("active");
        $("#conteudo").load(href);

      }

    
    
  
   
    });
  </script>
</html>
