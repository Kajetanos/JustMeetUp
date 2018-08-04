<?php
namespace AppBundle\Controller;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \FOS\UserBundle\Model\User;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;



class MainPageController extends Controller{

/**
 *
 * 
 * @Route("/mainpage")
 */
    public function welcome()
    {    
      $welcome = "hello" ;
        return $this->render('mainPage/mainPage.html.twig' ,array('welcome' => $welcome));
    }
}
