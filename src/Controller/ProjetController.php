<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Projet;
class ProjetController extends AbstractController
{
    /**
     * @Route("/projet", name="projet")
     */
    public function index()
    {
        /* on demande à doctrine de nous recuperé le repository de la classe Projet et le mettre
        à $repo */
        $repo = $this->getDoctrine()->getRepository(Projet :: class);
        /* on stock tous les instances projet à $projets */
        $projets = $repo->findAll();

        return $this->render('projet/index.html.twig', [
            'controller_name' => 'ProjetController',
            'projets' => $projets ,
         /* passer à twig l'ensemble des projets , ce qui va etres
         utilisé par la suite au template passer à twig l'ensemble des projets*/   
        ]);
    }
}
