<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantController extends AbstractController
{
    /**
     * @Route("/etudiant", name="etudiant2")
     */
    public function index()
    {
     	/* Cette simple instruction permet d'envoyer des informations au navigateur sans passer par une vue.

 
namespace App\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
 
class EtudiantController extends AbstractController
{
    /*
     * @Route("/etudiant", name="etudiant")
     */
    public function index()
    {
        /* Cette simple instruction permet d'envoyer des informations au navigateur sans passer par une vue.

        return new Response('<html><body>Salut Les SIO</body></html>');
        */
 
         // initialise une variable qui sera exploitée dans la vue
         $annee = '2020';


         

         return $this->render('etudiant/vue_accueil.html.twig', ['pAnnee' => $annee]);                      
    }

    
}

