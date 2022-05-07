<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalculadoraNice</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Calculadora</h1>
            <div class="col-dm-12">
                <form action="./pag2.php" method="post">
                    <input type="number" name="n1" placeholder="Ingrese Numero">
                    <select class="" name="opciones">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option> 
                    </select>
                    <input type="number" name="n2" placeholder="Ingrese Numero" />
                    <input type="submit" name="Siguiente" id="Siguiente" Value="Calcular" />
                </form>
            </div>
        </div>
    </div>
</body>
</html>