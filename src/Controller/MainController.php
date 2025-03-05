<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MainController extends AbstractController
{
    #[Route('/main3/{id}', name: 'app_main3')]
    public function main3($id): Response
    {
        
        return $this->render('main/main3.html.twig', ['id'=>$id]);
    }
    #[Route('/main4', name: 'app_main4')]
    public function main4(): Response
    {
        
        return $this->render('main/main4.html.twig', []);
    }
    #[Route('/main', name: 'app_main')]
    public function main(): Response
    {
        $nom = "Ali";
        $tab=['Mohamed','Ibrahim','Oumaima','Wissal'];
        return $this->render('main/main.html.twig', ['nom'=>$nom,'noms'=>$tab]);
    }
    #[Route('/main2', name: 'app_main2')]
    public function main2(): Response
    {
        return $this->render('main/main2.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

}
