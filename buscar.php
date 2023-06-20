<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aluguel e Compras de Veículos</title>
  <style>
    body {
      font-family: monospace;
      background-color: lightblue;
    }

    #container {
      background-color: rgba(0, 0, 0, 0.9);
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      padding: 80px;
      border-radius: 15px;
      color:white;
      font-family: cursive;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h1 {
      font-size: 36px;
      margin-top: 0;
      text-align: center;
    }

    form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    label {
      font-size: 18px;
      margin-bottom: 10px;
    }

    input,
    select {
      padding: 6px;
      font-size: 15px;
      margin-bottom: 15px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 5px;
      font-size: 18px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #3e8e41;
    }

    select {
      width: 200px;
    }

    select:not(:last-child) {
      margin-right: 10px;
    }
  </style>
</head>

<body>
  <div id="container">
    <h1>Aluguel e Compras de Veículos</h1>
    <form action="buscar.php" method="GET">
      <label for="marca">Marca:</label>
      <select id="marca" name="marca">
        <option value="todas">Todas as marcas</option>
        <option value="marca1">Marca 1</option>
        <option value="marca2">Marca 2</option>
        <option value="marca3">Marca 3</option>
        <!-- Adicione mais opções de marcas aqui -->
      </select>

      <label for="modelo">Modelo:</label>
      <select id="modelo" name="modelo">
        <option value="">Selecione um modelo</option>
        <option value="modelo1">Modelo 1</option>
        <option value="modelo2">Modelo 2</option>
        <option value="modelo3">Modelo 3</option>
        <!-- Adicione mais opções de modelos aqui -->
      </select>

      <label for="ano">Ano:</label>
      <select id="ano" name="ano">
        <option value="">Selecione um ano</option>
        <option value="2021">2021</option>
        <option value="2020">2020</option>
        <option value="2019">2019</option>
        <!-- Adicione mais opções de anos aqui -->
      </select>

      <label for="preco">Preço:</label>
      <select id="preco" name="preco">
        <option value="">Selecione um preço</option>
        <option value="1000">1000$</option>
        <option value="2000">2000$</option>
        <option value="3000">3000$</option>
        <!-- Adicione mais opções de preços aqui -->
        <option value="8000">8000$</option>
      </select>

      <input type="submit" value="Pesquisar">
    </form>
  </div>
</body>

</html>
