<?php

namespace App\Modules\AboutMe\Infrastructure;

class ConstHobbyConfiguration
{
    public static function getHobbiesMap(): array 
    {
        return [
            'warhammer40k', 
            'lord_of_the_rings', 
            'JudgeDredd',
        ];
    }
}