<?php

require('vendor/autoload.php');
require('model.php');

use Formularium\FrameworkComposer;
use Formularium\Model;

// set your framework composition statically.
// For example, this builds HTML using Bootstrap as CSS and the Vue framework.
FrameworkComposer::set(['HTML', 'Bootstrap']);

$model = Model::fromStruct(modelData());
?><!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Formularium pure PHP</title>
    <?php echo FrameworkComposer::htmlHead(); ?>
</head>
<body>
<div class='container'>
    <h1>Formularium pure PHP</h1>
    <p>
        This is a simple example of using <a href="https://github.com/Corollarium/Formularium">Formularium</a> in a framework agnostic way.
    </p>
    <form method="POST" action="/post.php">
<?php // render a form 
    echo $model->editable();
?>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <footer>
        <a href="https://github.com/Corollarium/Formularium">Formularium on GitHub</a>
        <?php echo FrameworkComposer::htmlFooter(); ?>
    </footer>
</div>
</html>