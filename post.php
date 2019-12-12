<?php

require('vendor/autoload.php');
require('model.php');

use Formularium\FrameworkComposer;
use Formularium\Model;

// set your framework composition statically.
FrameworkComposer::set(['HTML', 'Bootstrap']);
// build the model
$model = Model::fromStruct(modelData());

// validate some data
$validation = $model->validate($_POST);

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
    <div>
<?php 
    if (!empty($validation['errors'])) {
        foreach ($validation['errors'] as $fieldName => $error) {
            echo "<p class='alert alert-danger'>$fieldName has an error: $error</p>";
        }
    }
    else {
        // get data after validation
        $validated = $validation['validated'];

        // render a view
        echo $model->viewable($validated);
    }
?>
    </div>
    
    <footer>
        <a href="https://github.com/Corollarium/Formularium">Formularium on GitHub</a>
        <?php echo FrameworkComposer::htmlFooter(); ?>
    </footer>
</div>
</html>