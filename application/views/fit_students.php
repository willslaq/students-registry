<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vínculo Aluno-Turma</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
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
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }

        select,
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 14px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #ffffff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <h1>Vínculo Aluno-Turma</h1>

    <form action="<?= base_url('api/fit-students') ?>" method="post">
        <label for="aluno">Aluno:</label>
        <select name="student" id="student">
            <?php foreach ($students as $student) : ?>
                <option value="<?= $student->id ?>"><?= $student->name ?></option>
            <?php endforeach; ?>
        </select>

        <br>

        <label for="turma">Turma:</label>
        <select name="classes" id="classes">
            <?php foreach ($classes as $class) : ?>
                <option value="<?= $class->id ?>"><?= $class->name ?></option>
            <?php endforeach; ?>
        </select>

        <br>

        <input type="submit" value="Vincular">
    </form>
</body>

</html>