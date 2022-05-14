<?php

namespace App\Controller\AdminBundle;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/** INFORMATIONS :
 *      - Cette classe contiendra tous les éléments lié à la page Graphiques du site.
 * @Route("/admin")
 */
class ChartsController extends AbstractController
{
    /**
     * @Route("/charts", name="admin_charts")
     */
    public function index(): Response
    {
        return $this->render('charts/index.html.twig', [
            'controller_name' => 'Dashboard - Charts',
        ]);
    }
    /**
     * @Route("/charts/pie", name="charts_pie")
     */
    public function pieChart(): Response
    {
        return $this->render('charts/pie.html.twig', [
            'controller_name' => 'Dashboard - Charts/Pie',
        ]);
    }
}
