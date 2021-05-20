<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Modules\AboutMe\App\HobbieService;
use App\View\AboutMe\AboutMePageView;

class AboutMeController extends AbstractController
{
    public function AboutMePage(HobbieService $hs): Response
    {
        $pageView =  new AboutMePageView($hs->addHobbie());

        return $this->render('/about_me.html.twig', $pageView->buildParams());
    }
}