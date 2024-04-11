<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola Primária</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-top: 20px;
        }

        p {
            color: #666;
            text-align: center;
        }

        a {
            display: block;
            text-align: center;
            margin: 10px auto;
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <h1>Seja bem-vindo</h1>
    <p>Escolha uma opção:</p>
    <a href="<?= base_url('students') ?>">Alunos</a>
    <a href="<?= base_url('classes') ?>">Turmas</a>
    <a href="<?= base_url('fit-students') ?>">Enturmar</a>
</body>

</html>