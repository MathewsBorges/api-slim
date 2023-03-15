<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

</head>
<style>
      * {
      box-sizing: border-box;
    }
    body {
      /* background-color: #121214; */
      height: 100vh;
    }
</style>
<body>
    <div class="col-md-12 p-5">
        <main>
            <div class="py-5 text-center">
                <i class="fa-solid fa-circle-plus fa-3x mb-2"></i>
              <h2>Cadastrar Produto</h2>
              <p class="lead">Bem-vindo a página de cadastrar produto aqui você pode cadastrar seu produto</p>
            </div>
        
            <div class="row g-5">
              <div class="col-md-5 col-lg-4 order-md-last card shadow p-5">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                  <span class="text-primary">Novo Produto</span>
                  <span class="badge bg-primary rounded-pill">1</span>
                </h4>
                <ul class="list-group mb-3">
                  <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                      <h6 class="my-0">Nome do Produto</h6>
                      <small class="text-muted">Brief description</small>
                    </div>
                  </li>
                  <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                      <h6 class="my-0">Classe do Produto</h6>
                      <small class="text-muted">Brief description</small>
                    </div>
                 
                  </li>
                  <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                      <h6 class="my-0">Quantidade do Produto</h6>
                      <small class="text-muted">Brief description</small>
                    </div>
                    
                  </li>
                  <li class="list-group-item d-flex justify-content-between bg-light">
                    <div class="text-success">
                      <h6 class="my-0">Preço do Produto</h6>
                    </div>
                    <span class="text-success">R$ 50,00</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between">
                    <span>Total (R$)</span>
                    <strong>$20</strong>
                  </li>
                </ul>
        
                <form class="card p-2">
                 
                  
                    <button type="submit" class="btn btn-success">Adicionar Produto</button>
               
                </form>
              </div>
              <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Informações do Produto</h4>
                <form class="needs-validation" novalidate="">
                  <div class="row g-3">
                    <div class="col-sm-6">
                      <label for="firstName" class="form-label">Nome do Produto</label>
                      <input type="text" class="form-control" id="nome-produto" placeholder="" value="" required="">
                      <div class="invalid-feedback">
                        Nome do Produto é obrigatório
                      </div>
                    </div>
        
                    <div class="col-sm-6">
                      <label for="lastName" class="form-label">Quantidade do Produto</label>
                      <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                      <div class="invalid-feedback">
                        Quantidade do Produto é obrigatória
                      </div>
                    </div>
        
        
                    <div class="col-md-5">
                      <label for="country" class="form-label">Classe</label>
                      <select class="form-select" id="country" required="">
                        <option value="">Escolha</option>
                        <option>Carnes</option>
                        <option>Fruteiras</option>
                        <option>Material de Limpeza</option>
                        <option>Alimentos</option>
                        <option>Bebidas</option>
                        <option>Outros</option>
                      </select>
                      <div class="invalid-feedback">
                        Por favor informe a classe do produto
                      </div>
                    </div> 
        
                    <div class="col-md-3">
                      <label for="zip" class="form-label">Código do Produto</label>
                      <input type="text" disabled class="form-control" id="zip" placeholder="" required="">
                    </div>
                  </div>
        
          </main>
    </div>
</body>
</html>