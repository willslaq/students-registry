<!DOCTYPE html>
<html>

<head>
    <title>Cadastro de Produto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <h1>Cadastro de Produto</h1>
    <form action="<?= base_url('api/students/create') ?>" method="post">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="document">Documento:</label>
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