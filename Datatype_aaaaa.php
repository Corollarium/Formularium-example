<?php

namespace Formularium\Datatype;

use Formularium\Field;
use Formularium\Model;
use Formularium\Exception\ValidatorException;
use Formularium\Validator\Equals;

class Datatype_aaaaa extends \Formularium\Datatype\Datatype_string
{
    public function __construct($typename = 'aaaaa', $basetype = 'string')
    {
        parent::__construct($typename, $basetype);
    }

    public function getRandom(array $params = [])
    {
        return 'aaaaa';
    }

    public function validate($value, Model $model = null)
    {
        $value = parent::validate($value, $model);
        
        $value = Equals::validate($value, ['value' => 'aaaaa'], $model);

        return $value;
    }
}