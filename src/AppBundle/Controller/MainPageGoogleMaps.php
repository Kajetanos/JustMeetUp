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

    private $googleApi = 'AIzaSyBUW4F2L2cHvINX7uaZrUhRW-0An7HDGKk';

    /**
     * @Route("/mainpageGoogleApi")
     */
    public function main() {

        $welcome = "hello";
        $notafications = ["powiadomienie 1" , "powiadomienie 2 "];
        return $this->render('mainPage/mainPageGoogleMaps.html.twig', array('googleApi' => $this->googleApi , 
            'notafications' => $notafications));
    }

}
