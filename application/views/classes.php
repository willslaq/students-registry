<!DOCTYPE html>
<html>

<head>
    <title>Lista de Turmas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        .btn-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e6e6e6;
        }
    </style>
</head>

<body>
    <h1>Lista de Turmas</h1>
    <div class="btn-container">
        <a href="<?= base_url('classes/form') ?>" class="btn">Cadastrar Nova Turma</a>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Número</th>
            <th>Professor(a)</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($classes as $class) : ?>
            <tr>
                <td><?= $class->id ?></td>
                <td><?= $class->name ?></td>
                <td><?= $class->number ?></td>
                <td><?= $class->teacher ?></td>
                <td>
                    <a href="#">Editar</a>
                    <a href="#">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>