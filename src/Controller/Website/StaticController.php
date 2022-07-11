<?php


namespace App\Controller\Website;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StaticController extends AbstractController
{
    public $done = [
        [
            'text' => [ 'MŠ U Stadionu','Rekonstrukce za 27.4m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 10000,
        ],
        [
            'text' => [ 'MŠ Habrmanova','Rekonstrukce za 26.5m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 500,
        ],
        [
            'text' => [ 'MŠ U Koupaliště','Dostavba za 14.5m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'MŠ Vinohrady','Rekonstrukce za 1.6m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'ZŠ Ústecká','Investice za 24.9m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'ZŠ Habrmanova','Rekonstrukce za 45.6.4m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 600,
        ],
        [
            'text' => [ 'ZŠ Nádražní','Rekonstrukce za 11.1m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'ZUŠ Česká Třebová a DDM Kamarád','Investice za 13.7m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Památky','Rekonstrukce za 6.8m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Městská knihovna','Investice za 4.7m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Městské muzeum','Investice za 2m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Kulturní centrum','Investice za 13.9m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Areál Peklák','Investice za 22.7m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Atletický stadion','Investice 33.3m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 600,
        ],
        [
            'text' => [ 'Zimní stadion','Investice .4m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Hokejbalový areál','Investice .4m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Fond rozvoje byldlení','Navýšen o 25m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Sociální služby a bydlení','Investováno 8.2m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Městské byty','Rekonstrukce za 8.2m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Chodníky, komunikace a parkoviště','Rekonstrukce za 81.8m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 800,
        ],
        [
            'text' => [ 'Veřejné osvětlení', 'Rekonstrukce za 37.2m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 200,
        ],
        [
            'text' => [ 'Dopravní terminál', 'Investice za 1.7m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Park Javorka', 'Investice za 3.5 m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Tyršovo náměstí', 'Sadové úpravy 37.2 m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 300,
        ],
        [
            'text' => [ 'park za DPS', 'Sadové úpravy za .5 m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'dětské a sportovní hřiště Trávník', 'Vybudováno za 5.4m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Kompostárny', 'Zřízení za 50m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Více kontejnerů', 'za 2m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'úprava koryta Třebovky', 'Investice 8m m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Retenční nádrž Benátky', 'Investice 2.7m m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Městské krematorium', 'patří městu' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Vodovody a kanalizace', 'patří městu' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Participační rozpočet - Skuhrov', 'Investice 1.2m m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Participační rozpočet - Kozlov', 'Investice 2.1m m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Participační rozpočet - Svinná', 'Investice 2.8m m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Participační rozpočet - Lhotka', 'Investice .8m m Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
    ];

    public function getRandomElementKey($array) {
        $cumulativeWeight = 0;
        foreach ($array as $key => $element ) {
            $cumulativeWeight += $element['weight'];
            $array[$key]['cumulativeWeight'] = $cumulativeWeight;
        }
        $rand = rand(0, $cumulativeWeight);
        $tested = null;
        foreach ($array as $key => $element) {
            $tested = $key;
            if ( $rand < $element['cumulativeWeight'] ) {
                break;
            }
        }
        return $tested;
    }

    public function getRandomArray($array, $amnt) {

        $selected= [];
        for ($i = 0; $i < $amnt; $i++) {
            $key = $this->getRandomElementKey($array);
            $array[$key]['key'] = $key;
            $selected[] = $array[$key];
            unset($array[$key]);
        }
        dump($selected);

        return $selected;
    }






    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('static/homepage.html.twig', [
            'randomDone' => $this->getRandomArray($this->done, 6),
        ]);
    }

    #[Route('/mesto-s-vizi', name: 'mestoSVizi')]
    public function mestoSVizi(): Response
    {
        return $this->render('static/program/mesto-s-vizi.html.twig', [
        ]);
    }

    #[Route('/vzdelane-mesto', name: 'vzdelaneMesto')]
    public function vzdelaneMesto(): Response
    {
        return $this->render('static/program/vzdelane-mesto.html.twig', [
        ]);
    }

    #[Route('/kulturni-a-sportovni-mesto', name: 'kulturniASportovniMesto')]
    public function kulturniASportovniMesto(): Response
    {
        return $this->render('static/program/kulturni-a-sportovni-mesto.html.twig', [
        ]);
    }

    #[Route('/nase-mesto', name: 'naseMesto')]
    public function naseMesto(): Response
    {
        return $this->render('static/program/nase-mesto.html.twig', [
        ]);
    }

    #[Route('/mesto-chodcu-a-ridicu', name: 'mestoChodcu')]
    public function mestoChodcu(): Response
    {
        return $this->render('static/program/mesto-chodcu-a-ridicu.html.twig', [
        ]);
    }

    #[Route('/zelene-mesto-mesto-zelene', name: 'zeleneMesto')]
    public function zeleneMesto(): Response
    {
        return $this->render('static/program/zelene-mesto-mesto-zelene.html.twig', [
        ]);
    }

    #[Route('/ciste-mesto', name: 'cisteMesto')]
    public function cisteMesto(): Response
    {
        return $this->render('static/program/ciste-mesto.html.twig', [
        ]);
    }

    #[Route('/energie-pro-mesto', name: 'energieProMesto')]
    public function energieProMesto(): Response
    {
        return $this->render('static/program/energie-pro-mesto.html.twig', [
        ]);
    }

    #[Route('/chytre-mesto', name: 'chytreMesto')]
    public function chytreMesto(): Response
    {
        return $this->render('static/program/chytre-mesto.html.twig', [
        ]);
    }

    #[Route('/transparentni-mesto', name: 'transpMesto')]
    public function transpMesto(): Response
    {
        return $this->render('static/program/transparentni-mesto.html.twig', [
        ]);
    }

}
