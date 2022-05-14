<?php

namespace App\Controller\AdminBundle;

use App\Entity\User;
use App\Services\parent_services\ApiServices;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\{JsonResponse, Request};
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\VarDumper\VarDumper;

/** INFORMATIONS :
 *      - Cette classe contiendra tous les éléments lié à l'API du Front-Office du site. Mais pas des applications
 * @Route("/admin")
 */
class ApiController extends AbstractController {
    /**
     * @Route("/api/users/lists")
     */
    public function index(Request $request, ApiServices $apiServices) {
        $response = new JsonResponse();
        $response->headers->set('Authorization', 'testToken');
        $response->headers->set('Content-Type', 'application/json');
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        $json = $serializer->serialize($users, 'json');
        $apiServices->sayIfBadHeaderOfRequest($request,$response, $json);
        return $response;
    }
}
