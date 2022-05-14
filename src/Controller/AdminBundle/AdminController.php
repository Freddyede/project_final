<?php

namespace App\Controller\AdminBundle;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/** INFORMATIONS :
 *   - Cette classe contiendra tous les éléments lié à la page Admin du site.
 * @Route("/admin", name="admin_")
 */
class AdminController extends AbstractController {
    /**
     * @Route("/", name="accueil")
     */
    public function index(): Response {
        return $this->render('ADMIN/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
}
