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

    #[Route('/martin-formanek', name: 'martinFormanek')]
    public function martinFormanek(): Response
    {
        return $this->render('static/persons/martin-formanek.html.twig', [
        ]);
    }

    #[Route('/ladislav-vraspir', name: 'ladislavVraspir')]
    public function ladislavVraspir(): Response
    {
        return $this->render('static/persons/ladislav-vraspir.html.twig', [
        ]);
    }

    #[Route('/petr-havlena', name: 'petrHavlena')]
    public function petrHavlena(): Response
    {
        return $this->render('static/persons/petr-havlena.html.twig', [
        ]);
    }

}
