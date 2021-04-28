<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Module\ImageProvider;


class AboutMeController extends AbstractController
{
    public function index()
    {
        $hobbies = new ImageProvider();
        $themes = ['warhammer40k', 'lord_of_the_rings', 'JudgeDredd'];
        foreach ($themes as $theme)
        {
            $hobbies->addTopic($theme);  
        }

        return $this->render('/about_me.html.twig',[
            'hobbies' => $hobbies->getData()
        ]);
    }
}