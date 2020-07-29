<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Curso</th>
            <th class="text-right">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($courses as $course) : ?>
            <tr>
                <td><?= $course->id; ?></td>
                <td><?= $course->title; ?></td>
                <td class="text-right">
                    <a href="/courses/<?= $course->id; ?>" class="btn btn-xs btn-default">
                        Ver
                    </a>
                    <a href="/courses/<?= $course->id; ?>/edit" class="btn btn-xs btn-info">
                        Editar
                    </a>
                    <form action="/courses/<?= $course->id; ?>/delete" method="post" style="display: inline-block">
                        <input type="submit" class="btn btn-xs btn-danger" value="Remover">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>