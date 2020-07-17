<?php

require('vendor/autoload.php');
require('model.php');

use Formularium\FrameworkComposer;
use Formularium\Model;
use Formularium\Element;

// set your framework composition.
// For example, this builds HTML using Bootstrap as CSS and the Vue framework.
$composer = FrameworkComposer::create(['HTML', 'Bootstrap']);

// in real code you would pre-generate this and cache instead of runtime.
$model = Model::fromStruct(modelData());

// get a button dynamically
$submitButton = $composer->element(
    'Button',
    [
        Element::LABEL => 'Submit',
        Formularium\Frontend\HTML\Element\Button::TYPE => 'submit',
        Element::SIZE => Element::SIZE_LARGE,
    ]
);

?><!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Formularium pure PHP</title>
    <?php echo $composer->htmlHead(); ?>
</head>
<body>
<div class='container'>
    <h1>Formularium pure PHP</h1>
    <p>
        This is a simple example of using <a href="https://github.com/Corollarium/Formularium">Formularium</a> in a framework agnostic way.
    </p>
    <form method="POST" action="/post.php">
<?php // render a form 
    echo $model->editable($composer);
    echo $submitButton;
?>
    </form>
    <footer style="text-align: center; margin-top: 2em;">
        <small>
            See <a href="https://github.com/Corollarium/Formularium">Formularium on GitHub</a>
        </small>
        <?php echo $composer->htmlFooter(); ?>
    </footer>
</div>
</html>