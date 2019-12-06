<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Projet;
class Projetfixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        /* ici on cree nos projets */

        $projet1 = new Projet();
        $projet1->setNom('Projet Java EE, porte sur la description de monuments
        localisés dans des communes')
                ->setDescription('➡ Organisation et stockage des données du domaine cible au sein d’une
                base de données relationelle.
                ➡ Mapping relationnel-objet.
                ➡ La couche présentation ( Vue ).
                ➡ Les couches contrôle et métier.')
                ->setLien('https://github.com/Nidal-bak/Jee-test');
        $manager->persist($projet1);

        $projet2 = new Projet();
        $projet2->setNom('Développement d’une (mini-)application web de e-
        commerce reposant sur l architecture MEAN')
                ->setDescription('Coté Serveur :
                ➡ Création de la base de données MongoDB , Serveur Nodejs , Express.
                Coté client :
                ➡ Angular , services Web , Bootstrap et templates.')
                ->setLien('https://github.com/Nidal-bak/Projet-Angular');
        $manager->persist($projet2);

        $projet3 = new Projet();
        $projet3->setNom('site Web de présentation sous Symfony version 4')
                ->setDescription('sites de deux pages : une avec une presentation général et la deusieme contient mes projets informatique ,
                utilisation des Controller , base de données , fixtures , webpack ... ')
                ->setLien('https://github.com/Nidal-bak/Projetsymfony');
        $manager->persist($projet3);

        $projet4 = new Projet();
        $projet4->setNom('Symfony Tp 2 et Tp3')
                ->setDescription('Sites de deux pages , une page d acceuil et une deusieme
                page avec presentation de plusieurs theses appartenant à des ecoles doctorals ,
                avec utilisation de base de données , vues tablette et desktop , webpack ... ')
                ->setLien('https://github.com/Nidal-bak/Tp2');
        $manager->persist($projet4);

        /* balancer les projets crées dans la base de donnée */
        $manager->flush();
    }
}
 /* ce n est pas encore fini , pour remplir la base de donnée il faut passer pa la comande load */