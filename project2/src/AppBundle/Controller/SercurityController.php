<?php
/**
 * Created by PhpStorm.
 * User: intern1
 * Date: 9/11/17
 * Time: 2:01 PM
 */

namespace AppBundle\Controller;
 use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
 use Symfony\Component\HttpFoundation\Request;
class SercurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction()
    {
        return $this->render('sercurity/login.html.twig');
    }
    /**
     * @Route("logout",name="logout")
     */
    public  function logoutAction(){
        return $this->redirect($this->generateUrl('/president'));
    }
}