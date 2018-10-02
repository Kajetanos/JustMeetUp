<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{    
    private $googleApi = 'AIzaSyBUW4F2L2cHvINX7uaZrUhRW-0An7HDGKk';

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {   $welcome = "hello";
        $notafications = ["powiadomienie 1" , "powiadomienie 2 "];
        $places = ["placeOne", "placeTwo" , "placeThree"];
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR, 
            'googleApi' => $this->googleApi , 
            'notafications' => $notafications,
            'places'        => $places,
        ]);
    }
}
