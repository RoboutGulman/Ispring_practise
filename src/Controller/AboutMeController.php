<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Modules\App\HobbieService;


class AboutMeController extends AbstractController
{
    public function index(): Response
    {
        $hobbies = new HobbieService();

        return $this->render('/about_me.html.twig',[
            'hobbies' => $hobbies->getData()
        ]);
    }
}