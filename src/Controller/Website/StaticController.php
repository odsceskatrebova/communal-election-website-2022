<?php


namespace App\Controller\Website;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StaticController extends AbstractController
{
    public $done = [
        [
            'text' => [ 'MŠ U Stadionu','Investovali jsme <span>27,4&nbsp;mil.&nbsp;Kč</span><br>do zateplení budov, vybudování nové třídy, osazení vzduchotechniky s rekuperací a úprav interiérů i exteriérů.' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/photos_done/DSC_8187.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'MŠ Habrmanova','Investovali jsme <span>26,5 mil. Kč</span><br>do zateplení budov, osazení vzduchotechniky, rekonstrukcí podlah, úprav zahrady a dalších.' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/photos_done/IMG_0256.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'MŠ U Koupaliště','Investovali jsme <span>14,5 mil. Kč</span><br>do kontejnerové dostavby a rekonstrukce sociálních zařízení, vzduchotechniky, zahrad, dětského hřiště a dalších.' ],
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
            'text' => [ 'ZŠ Habrmanova','Investovali jsme <span>45,6 mil. Kč</span><br>do zateplení budov, rekonstrukce soc. zařízení, vytápění tělocvičny, vzduchotechniky jídelny a dalších.' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/photos_done/DSC_8169.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'ZŠ Nádražní','Investovali jsme <span>11,1 mil. Kč</span><br>do rekonstrukce střechy, učeben, soc. zařízení, kotelny, knihovny a dalších, osazení klimatizace a úprav školní tělocvičny.' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/photos_done/DSC_8147.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'ZUŠ Česká Třebová a DDM Kamarád','Investovali jsme <span>13,7 mil. Kč</span><br>do stavebních úprav.' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/photos_done/DSC_8239.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Památky','Investovali jsme <span>6,8 mil. Kč</span><br>do rekonstrukce chaloupky Maxe Švabinského, kostela sv. Jakuba, kaple na Horách, hrobů, hrobek, soch, pomníků a křížů.' ],
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
            'text' => [ 'Kulturní centrum','Investovali jsme <span>4 mil. Kč</span><br>do modernizace kina, a stavebních úprav objektů.' ],
            'path' => 'kulturniASportovniMesto',
            'photo' => 'build/website/img/photos_done/DSC_8143.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Areál Peklák','Investovali jsme <span>22,7 mil. Kč</span><br>do vybudování tras Single track Glacensis a Bike resortu. ' ],
            'path' => 'kulturniASportovniMesto',
            'photo' => 'build/website/img/photos_done/DSC_7864.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Atletický stadion','Investovali jsme <span>20,1 mil. Kč</span><br>do vybudování atletického stadionu na Skalce a jeho okolí.' ],
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
            'text' => [ 'Hokejbalový areál','Investovali jsme <span>400 tis. Kč</span><br> do oplocení areálu.' ],
            'path' => 'kulturniASportovniMesto',
            'photo' => 'build/website/img/photos_done/DSC_7895.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Fond rozvoje bydlení','Vytvořili jsme fond s počátečním vkladem <span>25 mil. Kč</span>. ' ],
            'path' => 'naseMesto',
            'photo' => 'build/website/img/photos_done/DSC_8164.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Sociální služby a bydlení','Investovali jsme přes <span>8,2 mil. Kč</span><br>do domu s pečovatelskou službou, stacionáře na Lhotce a domova důchodců.' ],
            'path' => 'naseMesto',
            'photo' => 'build/website/img/photos_done/DSC_8054.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Městské byty','Investovali jsme přes <span>4,7 mil. Kč</span><br> do opravy tzv. Domu služeb na Parníku.' ],
            'path' => 'naseMesto',
            'photo' => 'build/website/img/photos_done/DSC_8194.jpg',
            'weight' => 100,
        ],
//        [
//            'text' => [ 'Chodníky, komunikace a parkoviště','Do plánovaných oprav chodníků a komunikací, ale i vynucených investic spojených s akcemi ŘSD a ČEZu, jsme investovali přes <span>81,8 mil. Kč.</span>' ],
//            'path' => 'mestoChodcu',
//            'photo' => 'build/website/img/test.jpeg',
//            'weight' => 100,
//        ],
//        [
//            'text' => [ 'Veřejné osvětlení', 'Investovali jsme přes <span>37,2 mil. Kč</span><br> do osvětlení ulic Kozlovská, Husova, Podbranská, Lhotka a mnoha dalších.' ],
//            'path' => 'mestoChodcu',
//            'photo' => 'build/website/img/test.jpeg',
//            'weight' => 100,
//        ],
        [
            'text' => [ 'Dopravní terminál', 'Investovali jsme přes <span>1,7 mil. Kč</span> do osvětlení, opravy kiosku a modernizce parkování.' ],
            'path' => 'mestoChodcu',
            'photo' => 'build/website/img/photos_done/DSC_8155.jpg',
            'weight' => 100,
        ],

        [
            'text' => [ 'Parky a veřejná prostranství', 'Investovali jsme přes <span>12,2 mil. Kč</span><br> do údržby a výměn mobiliáře.' ],
            'path' => 'zeleneMesto',
            'photo' => 'build/website/img/photos_done/DSC_8682.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Park u krematoria', 'Prosadili jsme úpravy parku, <span>jak jsme slíbili</span> v našem programu 2018.' ],
            'path' => 'zeleneMesto',
            'photo' => 'build/website/img/photos_done/DSC_8669.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Park Javorka', 'Investovali jsme <span>3,5 mil. Kč</span><br> do zpevnění cest, veřejných grilovišť a veřejného WC.' ],
            'path' => 'zeleneMesto',
            'photo' => 'build/website/img/photos_done/DSC_8257.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Tyršovo náměstí', 'Investovali jsme <span>1,1 mil. Kč</span> <br>do sadových úprav.' ],
            'path' => 'zeleneMesto',
            'photo' => 'build/website/img/photos_done/DSC_8086.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Park za&nbsp;DPS', 'Investovali jsme <span>500 tis. Kč</span><br> do sadových úprav.' ],
            'path' => 'zeleneMesto',
            'photo' => 'build/website/img/photos_done/DSC_8064.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Dětské a sportovní hřiště Trávník', 'Investovali jsme <span>5,4 mil. Kč</span><br> do vybudování nového hřiště.' ],
            'path' => 'zeleneMesto',
            'photo' => 'build/website/img/photos_done/DSC_8252.jpg',
            'weight' => 100,
        ],



        // CISTE MESTO
        [
            'text' => [ 'Kompostárna', 'Vybudovali jsme kompostárnu za bezmála <span>50 mil. Kč</span><br> a zavedli sběr tříděného odpadu z domácností.' ],
            'path' => 'cisteMesto',
            'photo' => 'build/website/img/photos_done/DSC02018.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Více kontejnerů', 'V roce 2022 se ve městě realizovaly úpravy a rozšíření kontejnerových stání za <span>2 mil. Kč.</span>' ],
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
            'text' => [ 'Městské krematorium', 'Po letech soukromého provozu krematorium převzala společnost EkoBi. Upravili jsme jeho provoz. Do objektu jsme investovali <span>18,7 mil. Kč</span>' ],
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




        // TRANSPARENTNI MESTO
        [
            'text' => [ 'Skuhrov', 'Investice <span>1,2 mil. Kč</span> <br>do zázemí sportovního areálu.' ],
            'path' => 'transpMesto',
            'photo' => 'build/website/img/photos_done/DSC_8514.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Kozlov', 'Investice <span>2,1 mil. Kč</span> do sálu hospody a opravy komunikace.' ],
            'path' => 'transpMesto',
            'photo' => 'build/website/img/photos_done/DSC_8217.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Svinná a Lhotka', 'Investice <span>3,6 mil. Kč</span><br> do oprav hřbitovních zdí, vybudování přístřešku s kioskem a do opravy komunikace.' ],
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
            'text' => [ 'ZŠ ÚSTECKÁ', 'Připravena je dokumentace k rekonstrukci sportovního areálu školy, ale i interiérů budov ve výši <span>35,2 mil. Kč</span>.' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/photos_plans/dsc-8006.jpg',
            // DSC_8006.jpg
            'weight' => 100,
        ],
//        [
//            'text' => [ 'ZŠ HABRMANOVA', 'Rekonstrukci vstupního prostoru' ],
//            'path' => 'vzdelaneMesto',
//            'photo' => 'build/website/img/photos_plans/.jpg',
//            'weight' => 100,
//        ],
        [
            'text' => [ 'Venkovní učebny', 'Zasadíme se o zřízení <span>venkovních učeben</span>.' ],
            'path' => 'vzdelaneMesto',
            'photo' => 'build/website/img/photos_plans/venkovni-ucebna.jpg',
            // venkovni ucebna
            'weight' => 100,
        ],
        [
            'text' => [ 'Moderní knihovna', 'Prosadíme investici do nových prostor v očekávané výši <span>87,1 mil. Kč</span>' ],
            'path' => 'kulturniASportovniMesto',
            'photo' => 'build/website/img/photos_plans/knihovna.png',
            'weight' => 300,
        ],
        [
            'text' => [ 'Muzeum VELOREXu', 'Chceme investovat <span>19,9 mil. Kč</span><br> do rozšíření expozice Velorex. Navrhujeme přemístit depozitář do krytu CO Javorka.' ],
            'path' => 'kulturniASportovniMesto',
            'photo' => 'build/website/img/photos_plans/velorex.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Malá scéna', 'Budeme investovat do stavebních úprav Malé scény. Připraven je projekt ve výši <span>12 mil. Kč</span>.' ],
            'path' => 'kulturniASportovniMesto',
            'photo' => 'build/website/img/photos_plans/mala-scena.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Kulturní centrum', 'Budeme investovat do klimatizace Kulturního centra za <span>10 mil. Kč</span>. ' ],
            'path' => 'kulturniASportovniMesto',
            'photo' => 'build/website/img/photos_plans/kc-klimatizace.jpg',
            'weight' => 100,
        ],
//        [
//            'text' => [ 'Rekonstrukci', 'plaveckého bazénu' ],
//            'path' => 'kulturniASportovniMesto',
//            'photo' => 'build/website/img/photos_plans/.jpg',
//            'weight' => 100,
//        ],
        [
            'text' => [ 'Hokejbalový stadion', 'Postavíme zázemí za <span>24,3 mil. Kč.</span> ' ],
            'path' => 'kulturniASportovniMesto',
            'photo' => 'build/website/img/photos_plans/dsc-7903.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Atletický stadion', 'Podpoříme výstavbu zázemí a tribun za <span>15 mil. Kč.</span> ' ],
            'path' => 'kulturniASportovniMesto',
            'photo' => 'build/website/img/photos_plans/dsc-7878.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Areál Peklák', 'Zmodernizujeme zázemí. Studie počítá s&nbsp;náklady ve výši <span>22,8 mil. Kč.</span>' ],
            'path' => 'kulturniASportovniMesto',
            'photo' => 'build/website/img/photos_plans/zazemi-peklak.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Podpoříme', '<span>smysluplné developerské projekty</span> <br>(areál Primony, ul. Husova, lokalita Orlík a Rudoltičky…)' ],
            'path' => 'naseMesto',
            'photo' => 'build/website/img/photos_plans/indivindi-2.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Budeme partnery ', '<span>Individuální výstavbě rodinných domů</span> <br> (areál Letního kina, bývalého zahradnictví, lokality Pod Březinou…)' ],
            'path' => 'naseMesto',
            'photo' => 'build/website/img/photos_plans/indivindi-1.jpg',
            'weight' => 100,
        ],
//        [
//            'text' => [ 'rekonstrukci', 'ulice Semanínské' ],
//            'path' => 'mestoChodcu',
//            'photo' => 'build/website/img/photos_plans/.jpg',
//            'weight' => 100,
//        ],
//        [
//            'text' => [ 'rekonstukci', 'Kubelkovy ulice' ],
//            'path' => 'mestoChodcu',
//            'photo' => 'build/website/img/photos_plans/.jpg',
//            'weight' => 100,
//        ],
        [
            'text' => [ 'Sídliště Trávník', 'Rozšíříme počty <span>parkovacích míst</span> <br>na sídlišti Trávník.' ],
            'path' => 'mestoChodcu',
            'photo' => 'build/website/img/photos_plans/dsc-8158.jpg',
            // DSC_8158.jpg
            'weight' => 100,
        ],
//        [
//            'text' => [ 'rozšíření', 'parkování na novém náměstí' ],
//            'path' => 'mestoChodcu',
//            'photo' => 'build/website/img/photos_plans/.jpg',
//            'weight' => 100,
//        ],
        [
            'text' => [ 'Obchvat města', 'Trváme na stavbě <span>obchvatu města</span> ve spojení s přivaděčem R35.' ],
            'path' => 'mestoChodcu',
            'photo' => 'build/website/img/photos_plans/obchvat.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Park u krematoria', '<span>Dokončíme úpravy</span> parku u krematoria.' ],
            'path' => 'zeleneMesto',
            'photo' => 'build/website/img/photos_done/DSC_8682.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Revitalizujeme parky', 'Na Zámostí, Kobylí důl, Bezděkov i oblast Hlubočku.' ],
            'path' => 'zeleneMesto',
            'photo' => 'build/website/img/photos_plans/altan-zamosti-2.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'Park Javorka', 'V Javorce vybudujeme nový veřejně přístupný <span>pavilon</span>. <br>Na louce v Javorce pod horním vodárenským objektem vytvoříme dle zájmu rodičů <span>Sad novorozeňat</span> z okrasných ovocných stromů.' ],
            'path' => 'zeleneMesto',
            'photo' => 'build/website/img/photos_plans/javorka-altan-svetla.jpg',
            'weight' => 100,
        ],
//        [
//            'text' => [ 'výsadbu', 'Sadu novorozeňat' ],
//            'path' => 'transpMesto',
//            'photo' => 'build/website/img/photos_plans/.jpg',
//            'weight' => 100,
//        ],



        // CISTE MESTO
        [
            'text' => [ 'Tříděný odpad', 'Podporujeme výstavbu dotřiďovací linky za <span>92,9 mil. Kč.</span>' ],
            'path' => 'cisteMesto',
            'photo' => 'build/website/img/photos_plans/tridic.jpg',
            'weight' => 100,
        ],
        [
            'text' => [ 'ZEVO', 'Ve výstavbě zařízení chceme i nadále pokračovat, abychom směsný komunální odpad energeticky využili.' ],
            'path' => 'cisteMesto',
            'photo' => 'build/website/img/photos_plans/zevo.jpg',
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

//    #[Route('/mesto-s-vizi', name: 'mestoSVizi')]
//    public function mestoSVizi(): Response
//    {
//        return $this->render('static/program/mesto-s-vizi.html.twig', [
//        ]);
//    }

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

    #[Route('/dokazali-jsme', name: 'done')]
    public function done(): Response
    {
        return $this->render('static/program/done.html.twig', [
            'done' => $this->done,
        ]);
    }

    #[Route('/prosadime', name: 'willBeDone')]
    public function willBeDone(): Response
    {
        return $this->render('static/program/willBeDone.html.twig', [
            'willBeDone' => $this->willBeDone,
        ]);
    }

}
