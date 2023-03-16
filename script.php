<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora em PHP</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

  <div class="container">
    <h1>Calculadora em PHP</h1>
    <form method="POST">
      <div class="form-group">
        <label for="numero1">Digite o primeiro número:</label>
        <input type="number" class="form-control" id="numero1" name="numero1" required>
      </div>
      <div class="form-group">
        <label for="numero2">Digite o segundo número:</label>
        <input type="number" class="form-control" id="numero2" name="numero2" required>
      </div>
      <div class="form-group">
        <label for="operacao">Selecione a operação:</label>
        <select class="form-control" id="operacao" name="operacao">
          <option value="soma">Adição</option>
          <option value="subtracao">Subtração</option>
          <option value="multiplicacao">Multiplicação</option>
          <option value="divisao">Divisão</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $numero1 = $_POST['numero1'];
      $numero2 = $_POST['numero2'];
      $operacao = $_POST['operacao'];

      if ($operacao == 'soma') {
        $resultado = $numero1 + $numero2;
        echo "<h2>$numero1 + $numero2 = $resultado</h2>";
      } elseif ($operacao == 'subtracao') {
        $resultado = $numero1 - $numero2;
        echo "<h2>$numero1 - $numero2 = $resultado</h2>";
      } elseif ($operacao == 'multiplicacao') {
        $resultado = $numero1 * $numero2;
        echo "<h2>$numero1 * $numero2 = $resultado</h2>";
      } elseif ($operacao == 'divisao') {
        if ($numero2 == 0) {
          echo "<h2>Erro: divisão por zero</h2>";
        } else {
          $resultado = $numero1 / $numero2;
          echo "<h2>$numero1 / $numero2 = $resultado</h2>";
        }
      }
    }
    ?>

  </div>

  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNSliN6" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
