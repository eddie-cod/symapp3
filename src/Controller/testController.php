<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class testController extends AbstractController
{
    /**
     * Page Accueil
     * 
     * @Route("/", name="home")
     * @Route("/home", name="home")
     */
    public function home()
    {
        return new Response('<html><body><h1>Page D\'accueil</h1></body></html>');
    }
    
    /**
     * Page Admin
     * 
     * @Route("/admin", name="admin")
     */
    public function admin()
    {
        return $this->render('test/admin.html.twig', [
            'controller_name' => 'testController',
        ]);
    }
    
    /**
     * Page de Test
     * 
     * @Route("/test", name="test")
     */
    public function test(Request $request)
    {
        // définition des variables
        $name= $request->get('name');
        $nom= $request->get('nom');
        //$url= $request->getPathInfo();

        $response->setContent('<html><body><h1>Hello World! '.$name.' -> '.$nom.'</h1></body></html>');
        return $response;
    }
}