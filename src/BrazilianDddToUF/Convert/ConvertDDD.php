<?php

namespace BrazilianDddToUF\Convert;

use BrazilianDddToUF\AbstractBrazilianDddToUF;

class ConvertDDD extends AbstractBrazilianDddToUF{

    use \BrazilianDddToUF\TraitValidator;

    public static function getArrayDDDandStateName($ddd){

        self::validate(parent::getArrayDDDofUF(), $ddd);

        return [
            'UF' => parent::getArrayDDDofUF()[$ddd],
            'StateName' => parent::getArrayUFofStateName()[
                    parent::getArrayDDDofUF()[$ddd]
                ]
        ];
    }

} 