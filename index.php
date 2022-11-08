<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./front6.css">
    <title>EXERCICIO 3</title>
</head>
<body>
    <Form action="exer6.php" method="get">
        <h1>valores de aulas</h1>
        <br><br>
        <label for="a">Preço por Hora R$:</label>
        <input type="number_format(double)" id="vh" name="vh"/>
        <br><br>
        <label for="b">Hora Aulas por Mês:</label>
        <input type="number_format(int)" id="hm" name="hm"/>
        <br><br>
        <input type="submit" value="Calcular">
    </Form>
    
</body>
</html>