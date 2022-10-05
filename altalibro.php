<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="creadolibro.php">
        <label>ISBN</label>
        <input type="number" name="isbn" required="true">
        <br/>
        <label>Título </label>
        <input type="text" name="titulo"required="true">
        <br/>
        <label>Autor</label>
        <input type="text" name="autor" required="true">
        <br/>
        <label>Fecha de publicación </label>
        <input type="date" name="fecha" required="true">
        <br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>