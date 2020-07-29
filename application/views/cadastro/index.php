<html>
    <head>
        <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css'); ?>">
        <title>Area 51</title>
    </head>
    <body>
        <header>
            <h1>Area de testes</h1>
        <hr>
        </header>
        <?php
            echo form_open('');
            
            echo form_input(array(
                'name' => 'email',
                'type' => 'email',
                'class' => 'form-control',
                'placeholder' => 'Insira um E-mail Válido'
            ));
            echo form_input(array(
                'name' => 'nome',
                'type' => 'text',
                'class' => 'form-control',
                'placeholder' => 'Nome Completo'
            ));
            echo form_input(array(
                'name' => 'senha',
                'type' => 'password',
                'class' => 'form-control',
                'placeholder' => '******'
            ));
            
            echo form_submit('submit', 'Cadastrar', array(
                'class' => 'btn btn-success'
            ));
            
            echo form_close();
        ?>
    </body>
</html>
