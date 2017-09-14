<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/login.html.twig', [

        ]);
    }
    /**
     * @Route("/logout", name="logout")
     *
     */
    public function logoutAction(){
        throw new \RuntimeException('Not Access');
    }
}
