<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=0.9" />
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

    <title>Gerenciador de Produto</title>
  </head>
  <style>
    .principal {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: sans-serif;
    }
  </style>

  <body>
    <body class="text-center principal bg-dark-subtle">
      <div
        class="col-md-4 p-4 d-flex justify-content-around align-items-center card shadow rounded-3"
      >
        <main class="form-signin w-100 m-auto bg">
          <form>
            <h1>Gerenciar Produtos</h1>
            <hr />

            <h2 class="h3 mb-3 fw-normal">Login</h2>

            <div class="form-floating mb-2">
              <input
                type="email"
                class="form-control"
                id="floatingInput"
                placeholder="name@example.com"
              />
              <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mb-4">
              <input
                type="password"
                class="form-control"
                id="floatingPassword"
                placeholder="Password"
              />
              <label for="floatingPassword">Senha</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary mt-4 mb-4" type="submit">
              Entrar
            </button>
            <a href="registrar.html" class="text-decoration-none">Não possui conta? Faça seu Registro</a>
            <p class="mt-5 mb-3 text-muted">© 2023 Matheus N. Borges, Prog Web II</p>
          </form>
        </main>
      </div>
    </body>
  </body>
</html>
