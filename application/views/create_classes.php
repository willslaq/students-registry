<!DOCTYPE html>
<html>

<head>
    <title>Cadastro de Turma</title>
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
    <h1>Cadastro de Turma</h1>
    <form action="<?= base_url('api/classes/create') ?>" method="post">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="document">Número:</label>
        <input type="text" id="number" name="number" required><br>

        <label for="address">Número máximo de Alunos:</label>
        <input type="text" name="max_students" id="max_students" required><br>

        <label for="city">Professor(a):</label>
        <input type="text" name="teacher" id="teacher" required><br>

        <label for="parent_name">Turno</label>
        <input type="text" name="schedule_type" id="schedule_type" required><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>