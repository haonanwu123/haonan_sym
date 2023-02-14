<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/', name:'home')]
class LuckyController extends AbstractController
{
    public function number(): Response
    {
        $number = random_int(0, 100);
        return $this->render('bezoker/number.html.twig',['number'=>$number]);
    }

    #[Route('lucky/number/{max}', name:'random_number')]
    public function numbers(int $max):response
    {
        $dagen=["maandag", "dinsdag", "woensdag", "donderdag", "vrijdag"];
        $number = random_int(0,$max);
        return $this->render('bezoker/random_number.html.twig',['number'=>$number],['days'=>$dagen]);
    }

}