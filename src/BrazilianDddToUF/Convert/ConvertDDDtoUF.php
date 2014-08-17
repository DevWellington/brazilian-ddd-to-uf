<?php

namespace BrazilianDddToUF\Convert;

use BrazilianDddToUF\AbstractBrazilianDddToUF;

class ConvertDDDtoUF extends AbstractBrazilianDddToUF implements IConvertDDDtoUF {

    use \BrazilianDddToUF\TraitValidator;

    public static function getUF($ddd){

        self::validate(parent::getArrayDDDofUF(), $ddd);
        return parent::getArrayDDDofUF()[$ddd];
    }

} 