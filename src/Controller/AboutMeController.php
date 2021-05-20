<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Modules\AboutMe\App\HobbieService;

class AboutMeController extends AbstractController
{
    public function index(HobbieService $hs): Response
    {
        $hobbieService =  $hs->addHobbie();

        return $this->render('/about_me.html.twig',[
            'hobbies' => $hobbieService
        ]);
    }
}