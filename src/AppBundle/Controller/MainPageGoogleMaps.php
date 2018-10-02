<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Description of MainPageGoogleMaps
 *
 * @author kajetanos
 */
class MainPageGoogleMaps extends Controller{


    /**
     * @Route("/")
     */
    public function main() {

        $welcome = "hello";
        $notafications = ["powiadomienie 1" , "powiadomienie 2 "];
        $places = ["placeOne", "placeTwo" , "placeThree"];
        return $this->render('default/index.html.twig', array('googleApi' => $this->googleApi , 
            'notafications' => $notafications,
            'places'        => $places,));
    }

}
