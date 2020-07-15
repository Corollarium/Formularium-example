<?php

namespace Formularium\Frontend\HTML\Renderable;

use Formularium\Field;
use Formularium\HTMLNode;

class Renderable_aaaaa extends Renderable_string
{
    public function editable($value, Field $field, HTMLNode $previous): HTMLNode
    {
        $element = parent::editable($value, $field, $previous);
        $element->get('input')[0]->setAttribute('style', 'background-color: #ccf');
        return $element;
    }

}
