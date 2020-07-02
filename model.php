<?php

use Formularium\Datatype;
use Formularium\Datatype\Datatype_integer;
use Formularium\Datatype\Datatype_string;
use Formularium\FrameworkComposer;
use Formularium\Frontend\HTML\Renderable\Renderable_number;
use Formularium\Frontend\HTML\Renderable\Renderable_string;
use Formularium\Model;
use Formularium\Renderable;
use Formularium\Validator\Max;
use Formularium\Validator\MaxLength;
use Formularium\Validator\Min;
use Formularium\Validator\MinLength;

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
                    MinLength::class => [
                        'value' => 3,
                    ],
                    MaxLength::class => [
                        'value' => 10,
                    ],
                    Datatype::REQUIRED => [
                        'value' => true,
                    ]
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
                    Min::class => [
                        'value' => 4,
                    ],
                    Max::class => [
                        'value' => 30,
                    ],
                    Datatype::REQUIRED => [
                        'value' => true,
                    ]
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
                    Datatype::REQUIRED => [
                        'value' => true,
                    ]
                ],
                'extensions' => [
                    Renderable::LABEL => 'This is a custom datatype',
                    Renderable::COMMENT => 'Fill this with aaaaa to validate properly',
                    Renderable_string::NO_AUTOCOMPLETE => true,
                    Renderable::PLACEHOLDER => "Type aaaaa here"
                ]
            ],
        ]
    ];
    return $modelData;
}