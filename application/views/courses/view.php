<h2>Visualizando curso</h2>


<div class="row">
    <div class="col-md-6">
        Título: <?php echo $course->title; ?><br>
        Url: <?php echo $course->slug; ?>
        <pre><code><?php echo html_escape($course->body); ?></code></pre>
    </div>
    <div class="col-md-6">
        <p>visualização:</p>
        <div class="panel panel-default">
            <div class="panel-body">
                <?php echo $course->body; ?>
            </div>
        </div>
    </div>
</div>

<hr>
<a href="/courses" class="btn btn-success">Voltar</a>