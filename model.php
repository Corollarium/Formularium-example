<?php

use Formularium\Datatype;
use Formularium\Datatype\Datatype_string;
use Formularium\Field;
use Formularium\Frontend\HTML\Renderable\Renderable_number;
use Formularium\Frontend\HTML\Renderable\Renderable_string;
use Formularium\Model;
use Formularium\Renderable;
use Formularium\Validator\Max;
use Formularium\Validator\MaxLength;
use Formularium\Validator\Min;
use Formularium\Validator\MinLength;

// our own datatype. You can (and should) use autoload for this, too.
require('./Datatype_aaaaa.php');
require('./Renderable_aaaaa.php');

function modelData(): Model
{
    // build the model from data description. You can use a JSON file as well.
    $modelData = new Model(
        'TestModel',
    );
    $modelData->appendField(new Field(
        'myString',
        Datatype_string::class,
        [
            Renderable::LABEL => 'This is some string',
            Renderable::COMMENT => 'At least 3 characters but no more than 10',
            Renderable_string::NO_AUTOCOMPLETE => true,
            Renderable::PLACEHOLDER => "Type here",
            Renderable::ICON_PACK => 'fas',
            Renderable::ICON => 'fa-check'
        ],
        [
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
    ))->appendField(new Field(
        'someInteger',
        'integer',
        [
            Renderable_number::STEP => 2,
            Renderable_string::NO_AUTOCOMPLETE => true,
            Renderable::LABEL => 'Some integer',
            Renderable::COMMENT => 'Between 4 and 30',
            Renderable::PLACEHOLDER => "Type here"
        ],
        [
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
    ))->appendField(new Field(
        'myaaaaa',
        'aaaaa',
        [
            Renderable::LABEL => 'This is a custom datatype',
            Renderable::COMMENT => 'Fill this with aaaaa to validate properly',
            Renderable_string::NO_AUTOCOMPLETE => true,
            Renderable::PLACEHOLDER => "Type aaaaa here"
        ],
        [
            Datatype::REQUIRED => [
                'value' => true,
            ]
        ],
    ));
    return $modelData;
}
