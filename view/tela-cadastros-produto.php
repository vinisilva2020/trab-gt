<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <style>
        #cor-nav {
            background-color: #003785;
        }
    </style>
</head>
<body>
<nav id="cor-nav" class="navbar navbar-expand-md text-dark sticky-top border-bottom" data-bs-theme="dark">
  <div class="container">
      <div class="offcanvas-body">
        <ul class="navbar-nav flex-grow-1 justify-content-between">
          <li class="nav-item"><a class="text-white nav-link" href="#">Cadastro de Funcionários</a></li>
          <li class="nav-item"><a class="text-white nav-link" href="#">Cadastro de Produtos</a></li>
          <li class="nav-item"><a class="text-white nav-link" href="#">Cadastro de Vendas</a></li>
          </a></li>
        </ul>
      </div>
    </div>
</nav>
<div class="container px-2 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom text-center">Cadastro de Produtos</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-9">
    <div class="container shadow-lg">
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-12">
              <label for="firstName" class="form-label">Nome do Produto:</label>
              <input type="text" class="form-control" id="address" placeholder="Digite a quantidade de produto" required>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Quantidade do Produto:</label>
              <input type="text" class="form-control" id="address" placeholder="Digite a quantidade de produto" required>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Valor do Produto:</label>
              <input type="text" class="form-control" id="address" placeholder="Digite o valor de produto" required>
            </div>

          <hr class="my-4">

          <button class="btn btn-primary btn-md" type="submit">Cadastrar Produto</button>
        </form>
</div>
    </div>
    </div>
    <div class="bd-example-snippet bd-code-snippet shadow-lg"><div class="bd-example m-0 border-0">
    <table class="table">
          <thead>
          <tr>
            <th scope="col">Nome do Produto</th>
            <th scope="col">Quantidade do Produto</th>
            <th scope="col">Valor do Produto</th>
            <th scope="col">Opções</th>
          </tr>
          </thead>
          <tbody>
            <tr>
                <td>Banana</td>
                <td>1000</td>
                <td>R$ 5,00</td>
                <td><a title="Excluir" class="btn btn-sm btn-outline-danger" href=""><i class="bi bi-trash3"></i></a> 
                <a title="Editar" class="btn btn-sm btn-outline-primary" href=""><i class="bi bi-pen"></i></a>
            </tr>
          </tbody>
        </table>
        </div></div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>