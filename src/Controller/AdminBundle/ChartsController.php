<?php

namespace App\Controller\AdminBundle;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
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
