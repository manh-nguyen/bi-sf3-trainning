<?php
/**
 * Created by PhpStorm.
 * User: bach
 * Date: 08/09/2017
 * Time: 14:01
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends Controller
{
    /**
     * @Route("/login",name="login")
     */
    public function loginAction(){

        return $this->render("president/login.html.twig",[

        ]);
    }

    /**
     * @Route("/logout",name="logout")
     */
    public function logoutAction(){
        throw new \RuntimeException('Not Access');
    }
}