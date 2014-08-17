<?php

namespace BrazilianDddToUF\Validate;

use BrazilianDddToUF\AbstractBrazilianDddToUF;

class Validate extends AbstractBrazilianDddToUF implements IValidate {

    use \BrazilianDddToUF\TraitValidator;

    public static function isValid($ddd){
        return self::validate(parent::getArrayDDDofUF(), $ddd);
    }
}