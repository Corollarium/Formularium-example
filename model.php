<?php

use Formularium\Datatype;
use Formularium\Datatype\Datatype_integer;
use Formularium\Datatype\Datatype_string;
use Formularium\FrameworkComposer;
use Formularium\Frontend\HTML\Renderable\Renderable_number;
use Formularium\Frontend\HTML\Renderable\Renderable_string;
use Formularium\Model;
use Formularium\Renderable;

// our own datatype. You can use autoload for this, too.
require('./Datatype_aaaaa.php');
require('./Renderable_aaaaa.php');

function modelData() {
    // build the model from data description. You can use a JSON file as well.
    $modelData = [
        'name' => 'TestModel',
        'fields' => [
            'myString' => [
                'datatype' => 'string',
                'validators' => [
                    Datatype_string::MIN_LENGTH => 3,
                    Datatype_string::MAX_LENGTH => 10,
                    Datatype::REQUIRED => true,
                ],
                'extensions' => [
                    Renderable::LABEL => 'This is some string',
                    Renderable::COMMENT => 'At least 3 characters but no more than 10',
                    Renderable_string::NO_AUTOCOMPLETE => true,
                    Renderable::PLACEHOLDER => "Type here",
                    Renderable::ICON_PACK => 'fas',
                    Renderable::ICON => 'fa-check'
                    ]
            ],
            'someInteger' => [
                'datatype' => 'integer',
                'validators' => [
                    Datatype_integer::MIN => 4,
                    Datatype_integer::MAX => 30,
                    Datatype::REQUIRED => true,
                ],
                'extensions' => [
                    Renderable_number::STEP => 2,
                    Renderable_string::NO_AUTOCOMPLETE => true,
                    Renderable::LABEL => 'Some integer',
                    Renderable::COMMENT => 'Between 4 and 30',
                    Renderable::PLACEHOLDER => "Type here"
                ]
            ],
            'myaaaaa' => [
                'datatype' => 'aaaaa',
                'validators' => [
                    Datatype::REQUIRED => true,
                ],
                'extensions' => [
                    Renderable::LABEL => 'This is a custom datatype',
                    Renderable::COMMENT => 'Fill this with aaaaa',
                    Renderable_string::NO_AUTOCOMPLETE => true,
                    Renderable::PLACEHOLDER => "Type aaaaa here"
                ]
            ],
        ]
    ];
    return $modelData;
}