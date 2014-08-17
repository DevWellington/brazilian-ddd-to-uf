<?php

namespace BrazilianDddToUF\Convert;

use BrazilianDddToUF\AbstractBrazilianDddToUF;

class ConvertDDDtoStateName extends AbstractBrazilianDddToUF implements IConvertDDDtoStateName{

    use \BrazilianDddToUF\TraitValidator;

    public static function getStateName($ddd){

        self::validate(parent::getArrayDDDofUF(), $ddd);

        $stateName = parent::getArrayUFofStateName()[
            parent::getArrayDDDofUF()[$ddd]
        ];

        return $stateName;
    }
} 