<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Produtos</title>
</head>
<body>
  
<style>
    * {
      box-sizing: border-box;
    }
    body {
      background-color: #121214;
      height: 100vh;
    }
    th{
        color: rgb(119, 255, 255);
    }
  </style>

    <div class="px-4 py-5 my-5 text-center">
      <h1 class="display-5 fw-bold text-info">Lista de Produtos</h1>
      <div class="col-lg-6 mx-auto">
        <p class="lead mb-4 text-white">
          Visualize todos os seus produtos aqui, também é possível fazer a
          exclusão do mesmo se assim preferir
        </p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <button type="button" onclick="location.href='/cadastrar'" class="btn btn-primary btn-lg px-4 gap-3">
            Cadastrar Produto
          </button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">
            Editar Produto
          </button>
        </div>
      </div>
    </div>
    <div class="com-md-12 p-5">
      <table class="table table-dark table-hover text-white p-5">
        <thead>
          <tr>
            <th scope="col"><i class="fa-solid fa-hashtag me-2"></i>Código</th>
            <th scope="col"><i class="fa-solid fa-signature me-2"></i>Nome</th>
            <th scope="col"><i class="fa-solid fa-list me-2"></i>Quantidade</th>
            <th scope="col">
              <i class="fa-solid fa-money-bill-trend-up me-2"></i>Preço
            </th>
            <th scope="col"><i class="fa-solid fa-filter me-2"></i> Tipo</th>
            <th scope="col"><i class="fa-solid fa-gear me-2"></i>Opções</th>
          </tr>
        </thead>
        <tr>
            <td>1</td>
            <td>Carne</td>
            <td>30</td>
            <td>R$ 34,00</td>
            <td>Carne</td>
            <td></td>

        </tr>
      </table>
    </div>


</body>
</html>