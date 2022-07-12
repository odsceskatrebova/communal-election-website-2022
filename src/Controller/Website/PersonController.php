<?php


namespace App\Controller\Website;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonController extends AbstractController
{

    #[Route('/borivoj-kvetinka', name: 'borivojKvetinka')]
    public function borivojKvetinka(): Response
    {
        return $this->render('static/persons/borivoj-kvetinka.html.twig', [
        ]);
    }

}
