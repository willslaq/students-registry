<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vínculo Aluno-Turma</title>
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