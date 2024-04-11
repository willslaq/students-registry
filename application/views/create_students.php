<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Produto</title>
</head>
<body>
    <h1>Cadastro de Produto</h1>
    <form action="<?= base_url('api/students/create') ?>" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="document">Documento</label>
        <input type="text" id="document" name="document" required><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
