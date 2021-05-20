<?php

namespace App\Modules\AboutMe\Infrastructure;

use App\Modules\AboutMe\App\HobbieConfigurationInterface;

class ConstHobbyConfiguration implements HobbieConfigurationInterface
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