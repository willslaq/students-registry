<!DOCTYPE html>
<html>

<head>
    <title>Lista de Alunos</title>
</head>

<body>
    <h1>Lista de Alunos</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Nascimento</th>
            <th>Turma</th>
        </tr>
        <?php foreach ($students as $student) : ?>
            <tr>
                <td><?= $student->id ?></td>
                <td><?= $student->name ?></td>
                <td><?= $student->birth_date ?></td>
                <td>
                    <a href="<?= base_url('student/edit/' . $student->id) ?>">Editar</a>
                    <a href="<?= base_url('student/delete/' . $student->id) ?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>