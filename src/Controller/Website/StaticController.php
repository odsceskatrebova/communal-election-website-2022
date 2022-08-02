<?php


namespace App\Controller\Website;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StaticController extends AbstractController
{
    public $done = [
        [
            'text' => [ 'MŠ U Stadionu','Rekonstrukce za&nbsp;27.4m&nbsp;Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/photos_done/DSC_8187.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'MŠ Habrmanova','Rekonstrukce za&nbsp;26.5m&nbsp;Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/photos_done/IMG_0256.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'MŠ U Koupaliště','Dostavba za&nbsp;14.5m&nbsp;Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/photos_done/DSC_8069.jpg',
            'weight' => 100,
        ],
//        [
//            'text' => [ 'MŠ Vinohrady','Rekonstrukce za&nbsp;1.6m&nbsp;Kč' ],
//            'path' => 'vzdelaneMesto',
//            'photo' => 'build/website/img/test.jpeg',
//            'weight' => 100,
//        ],
//        [
//            'text' => [ 'ZŠ Ústecká','Investice za&nbsp;24.9m&nbsp;Kč' ],
//            'path' => 'vzdelaneMesto',
//            'photo' => 'build/website/img/photos_done/IMG_0256.jpg',
//            'weight' => 100,
//        ],
        [
            'text' => [ 'ZŠ Habrmanova','Rekonstrukce za&nbsp;45.6.4m&nbsp;Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/photos_done/DSC_8169.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'ZŠ Nádražní','Rekonstrukce za&nbsp;11.1m&nbsp;Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/photos_done/DSC_8147.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'ZUŠ Česká Třebová a DDM Kamarád','Investice za&nbsp;13.7m&nbsp;Kč' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/photos_done/DSC_8239.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Památky','Rekonstrukce za&nbsp;6.8m&nbsp;Kč' ],
            'path' => 'kulturniASportovniMesto',
//            'photo' => 'build/website/img/photos_done/DSC_7960.jpg',
            'photo' => 'build/website/img/photos_done/DSC_8268.jpg',
            'weight' => 100,
        ],
//        [
//            'text' => [ 'Městská knihovna','Investice za&nbsp;4.7m&nbsp;Kč' ],
//            'path' => 'kulturniASportovniMesto',
//            'photo' => 'build/website/img/photos_done/DSC_8268.jpg',
//            'weight' => 100,
//        ],
//        [
//            'text' => [ 'Městské muzeum','Investice za&nbsp;2m&nbsp;Kč' ],
//            'path' => 'kulturniASportovniMesto',
//            'photo' => 'build/website/img/test.jpeg',
//            'weight' => 100,
//        ],
        [
            'text' => [ 'Kulturní centrum','Investice za&nbsp;13.9m&nbsp;Kč' ],
            'path' => 'kulturniASportovniMesto',
            'photo' => 'build/website/img/photos_done/DSC_8143.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Areál Peklák','Investice za&nbsp;22.7m&nbsp;Kč' ],
            'path' => 'kulturniASportovniMesto',
            'photo' => 'build/website/img/photos_done/DSC_7864.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Atletický stadion','Investice 33.3m&nbsp;Kč' ],
            'path' => 'kulturniASportovniMesto',
            'photo' => 'build/website/img/photos_done/DSC_7879.JPG',
            'weight' => 100,
        ],
//        [
//            'text' => [ 'Zimní stadion','Investice 0.4m&nbsp;Kč' ],
//            'path' => 'kulturniASportovniMesto',
//            'photo' => 'build/website/img/test.jpeg',
//            'weight' => 100,
//        ],
        [
            'text' => [ 'Hokejbalový areál','Investice .4m&nbsp;Kč' ],
            'path' => 'kulturniASportovniMesto',
            'photo' => 'build/website/img/photos_done/DSC_7895.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Fond rozvoje byldlení','Navýšen o&nbsp;25m&nbsp;Kč' ],
            'path' => 'naseMesto',
            'photo' => 'build/website/img/photos_done/DSC_8164.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Sociální služby a bydlení','Investováno 8.2m&nbsp;Kč' ],
            'path' => 'naseMesto',
            'photo' => 'build/website/img/photos_done/DSC_8054.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Městské byty','Rekonstrukce za&nbsp;8.2m&nbsp;Kč' ],
            'path' => 'naseMesto',
            'photo' => 'build/website/img/photos_done/DSC_8194.jpg',
            'weight' => 100,
        ],
//        [
//            'text' => [ 'Chodníky, komunikace a parkoviště','Rekonstrukce za&nbsp;81.8m&nbsp;Kč' ],
//            'path' => 'mestoChodcu',
//            'photo' => 'build/website/img/test.jpeg',
//            'weight' => 100,
//        ],
//        [
//            'text' => [ 'Veřejné osvětlení', 'Rekonstrukce za&nbsp;37.2m&nbsp;Kč' ],
//            'path' => 'mestoChodcu',
//            'photo' => 'build/website/img/test.jpeg',
//            'weight' => 100,
//        ],
        [
            'text' => [ 'Dopravní terminál', 'Investice za&nbsp;1.7m&nbsp;Kč' ],
            'path' => 'mestoChodcu',
            'photo' => 'build/website/img/photos_done/DSC_8155.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Park Javorka', 'Investice za&nbsp;3.5m&nbsp;Kč' ],
            'path' => 'zeleneMesto',
            'photo' => 'build/website/img/photos_done/DSC_8257.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Tyršovo náměstí', 'Sadové úpravy 37.2m&nbsp;Kč' ],
            'path' => 'zeleneMesto',
            'photo' => 'build/website/img/photos_done/DSC_8086.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'park za&nbsp;DPS', 'Sadové úpravy za&nbsp;.5m&nbsp;Kč' ],
            'path' => 'zeleneMesto',
            'photo' => 'build/website/img/photos_done/DSC_8064.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'dětské a sportovní hřiště Trávník', 'Vybudováno za&nbsp;5.4m&nbsp;Kč' ],
            'path' => 'zeleneMesto',
            'photo' => 'build/website/img/photos_done/DSC_8252.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Kompostárny', 'Zřízení za&nbsp;50m&nbsp;Kč' ],
            'path' => 'cisteMesto',
            'photo' => 'build/website/img/photos_done/DSC02018.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Více kontejnerů', 'za 2m&nbsp;Kč' ],
            'path' => 'cisteMesto',
            'photo' => 'build/website/img/photos_done/DSC_7910.jpg',
            'weight' => 100,
        ],
//        [
//            'text' => [ 'úprava koryta Třebovky', 'Investice 8m&nbsp;Kč' ],
//            'path' => 'cisteMesto',
//            'photo' => 'build/website/img/test.jpeg',
//            'weight' => 100,
//        ],
//        [
//            'text' => [ 'Retenční nádrž Benátky', 'Investice 2.7m&nbsp;Kč' ],
//            'path' => 'cisteMesto',
//            'photo' => 'build/website/img/test.jpeg',
//            'weight' => 100,
//        ],
        [
            'text' => [ 'Městské krematorium', 'patří městu' ],
            'path' => 'cisteMesto',
            'photo' => 'build/website/img/photos_done/DSC_7922.jpg',
            'weight' => 100,
        ],
//        [
//            'text' => [ 'Vodovody a kanalizace', 'patří městu' ],
//            'path' => 'cisteMesto',
//            'photo' => 'build/website/img/test.jpeg',
//            'weight' => 100,
//        ],
        [
            'text' => [ 'Participační rozpočet - Skuhrov a Kozlov', 'Investice 3.3m&nbsp;Kč' ],
            'path' => 'transpMesto',
            'photo' => 'build/website/img/photos_done/DSC_8217.jpg',
            'weight' => 100,
        ],
//        [
//            'text' => [ 'Participační rozpočet - Kozlov', 'Investice 2.1m&nbsp;Kč' ],
//            'path' => 'transpMesto',
//            'photo' => 'build/website/img/test.jpeg',
//            'weight' => 100,
//        ],
        [
            'text' => [ 'Participační rozpočet - Svinná a Lhotka', 'Investice 3.6m&nbsp;Kč' ],
            'path' => 'transpMesto',
            'photo' => 'build/website/img/photos_done/DSC_8199.jpg',
            'weight' => 100,
        ],
//        [
//            'text' => [ 'Participační rozpočet - Lhotka', 'Investice .8m&nbsp;Kč' ],
//            'path' => 'transpMesto',
//            'photo' => 'build/website/img/test.jpeg',
//            'weight' => 100,
//        ],
    ];


    public $willBeDone = [
        [
            'text' => [ 'ZŠ ÚSTECKÁ', 'Rekonstrukci budovy a sportovního areálu' ],
            'path' => 'transpMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'ZŠ HARMANOVA', 'Rekonstrukci vstupního prostoru' ],
            'path' => 'transpMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Venkovní učebny', 'Prosadíme zřízení' ],
            'path' => 'transpMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Moderní knihovna', 'v areálu Svářečské školy' ],
            'path' => 'transpMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Rozšíříme', 'Muzeum VELOREXu' ],
            'path' => 'transpMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Opravíme', 'Malou scénu' ],
            'path' => 'transpMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Kulturní centrum', 's klimatizací' ],
            'path' => 'transpMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Rekonstrukci', 'plaveckého bazénu' ],
            'path' => 'transpMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Zázemí', 'hokejbalového stadionu' ],
            'path' => 'transpMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Zázemí', 'atletického stadionu' ],
            'path' => 'transpMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'modernizaci zázemí', 'areálu peklák' ],
            'path' => 'transpMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'podporu', 'smysluplných developerských projektů' ],
            'path' => 'transpMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'podporu', 'Individuální výstavby' ],
            'path' => 'transpMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'rekonstrukci', 'ulice Semanínské' ],
            'path' => 'transpMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'rekonstukci', 'Kubelkovy ulice' ],
            'path' => 'transpMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'rozšíření', 'parkování na trávniku' ],
            'path' => 'transpMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'rozšíření', 'parkování na novém náměstí' ],
            'path' => 'transpMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ '', 'Obchvat města' ],
            'path' => 'transpMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'úpravu', 'parku u krematoria' ],
            'path' => 'transpMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'revitalizaci', 'parků' ],
            'path' => 'transpMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'výstavbu', 'pavilonu v javorce' ],
            'path' => 'transpMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'výsadbu', 'Sadu novorozeňat' ],
            'path' => 'transpMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'výstavbu', 'dotřiďovací linky Třebovice' ],
            'path' => 'transpMesto',
            'photo' => 'build/website/img/test.jpeg',
            'weight' => 100,
        ],
        [
            'text' => [ 'výstavbu', 'ZEVO' ],
            'path' => 'transpMesto',
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
//        dump($selected);

        return $selected;
    }






    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('static/homepage.html.twig', [
            'randomDone' => $this->getRandomArray($this->done, 6),
            'randomWillBeDone' => $this->getRandomArray($this->willBeDone, 9),
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
