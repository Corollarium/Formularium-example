<?php

namespace Formularium\Datatype;

use Formularium\Field;
use Formularium\Exception\ValidatorException;

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

    public function validate($value, Field $field)
    {
        $value = parent::validate($value, $field);
        if ($value === 'aaaaa') {
            return $value;
        }
        throw new ValidatorException('Not aaaaa');
    }
}