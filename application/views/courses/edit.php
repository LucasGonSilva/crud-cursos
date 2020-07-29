<h2>Editando curso</h2>

<?php echo validation_errors(); ?>

<form action="/courses/<?php echo $course->id; ?>/edit" method="post">

    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" name="title" class="form-control" placeholder="Seu título aqui..." value="<?php echo $course->title;?>"/>
    </div>
    <div class="form-group">
        <label for="text">Conteúdo</label>
        <textarea name="body" class="form-control" placeholder="HTML da página"><?php echo $course->body;?></textarea>
    </div>

    <input type="submit" name="submit" value="Atualizar esta página" class="btn btn-primary" />

</form>

<hr>
<a href="/courses" class="btn btn-success">Voltar</a>