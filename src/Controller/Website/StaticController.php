<?php


namespace App\Controller\Website;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StaticController extends AbstractController
{
    #[Route('/program/mesto-s-vizi', name: 'mestoSVizi')]
    public function mestoSVizi(): Response
    {
        return $this->render('static/program/mesto-s-vizi.html.twig', [
        ]);
    }

    #[Route('/program/vzdelane-mesto', name: 'vzdelaneMesto')]
    public function vzdelaneMesto(): Response
    {
        return $this->render('static/program/vzdelane-mesto.html.twig', [
        ]);
    }

    #[Route('/program/kulturni-a-sportovni-mesto', name: 'kulturniASportovniMesto')]
    public function kulturniASportovniMesto(): Response
    {
        return $this->render('static/program/kulturni-a-sportovni-mesto.html.twig', [
        ]);
    }

    #[Route('/program/nase-mesto', name: 'naseMesto')]
    public function naseMesto(): Response
    {
        return $this->render('static/program/nase-mesto.html.twig', [
        ]);
    }

    #[Route('/program/mesto-chodcu-a-ridicu', name: 'mestoChodcu')]
    public function mestoChodcu(): Response
    {
        return $this->render('static/program/mesto-chodcu-a-ridicu.html.twig', [
        ]);
    }

    #[Route('/program/zelene-mesto-mesto-zelene', name: 'zeleneMesto')]
    public function zeleneMesto(): Response
    {
        return $this->render('static/program/zelene-mesto-mesto-zelene.html.twig', [
        ]);
    }

    #[Route('/program/ciste-mesto', name: 'cisteMesto')]
    public function cisteMesto(): Response
    {
        return $this->render('static/program/ciste-mesto.html.twig', [
        ]);
    }

    #[Route('/program/energie-pro-mesto', name: 'energieProMesto')]
    public function energieProMesto(): Response
    {
        return $this->render('static/program/energie-pro-mesto.html.twig', [
        ]);
    }

    #[Route('/program/chytre-mesto', name: 'chytreMesto')]
    public function chytreMesto(): Response
    {
        return $this->render('static/program/chytre-mesto.html.twig', [
        ]);
    }

    #[Route('/program/transparentni-mesto', name: 'transpMesto')]
    public function transpMesto(): Response
    {
        return $this->render('static/program/transparentni-mesto.html.twig', [
        ]);
    }

}
