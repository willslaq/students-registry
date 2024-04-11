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

        <label for="address">Endereço:</label>
        <input type="text" name="address" id="address" required><br>

        <label for="city">Cidade:</label>
        <input type="text" name="city" id="city" required><br>

        <label for="parent_name">Nome do Responsável:</label>
        <input type="text" name="parent_name" id="parent_name" required><br>

        <label for="parent_phone">Telefone do Responsável:</label>
        <input type="text" name="parent_phone" id="parent_phone" required><br>

        <label for="parent_email">E-mail do Responsável:</label>
        <input type="email" name="parent_email" id="parent_email" required><br>

        <label for="birth_date">Data de Nascimento:</label>
        <input type="date" name="birth_date" id="birth_date" required><br>


        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>