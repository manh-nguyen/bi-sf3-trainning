<?php
/**
 * Created by PhpStorm.
 * User: intern1
 * Date: 9/7/17
 * Time: 9:04 AM
 */

namespace AppBundle\Controller;
use AppBundle\AppBundle;
use AppBundle\Entity\president_user;
use AppBundle\Form\ContactForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;




class PresidentController extends Controller
{
    /**
     * @Route("/president/create", name="create_president")
     */
    public function createAction(Request $request)
    {
        $president=new president_user;
        $form=$this->createForm(ContactForm::class,$president);
        $form->handleRequest($request);


        if ($form->isSubmitted()&& $form->isValid()){
            //get data
            $name=$form['name']->getData();
            $president_code=$form['president_code']->getData();
            $password=$this
                ->get('security.password_encoder')
                ->encodePassword(
                  $president,
                  $president->getPassword()
                );
            $image = $president->getImage();

            // Generate a unique name for the file before saving it
            $imageName = md5(uniqid()).'.'.$image->guessExtension();

            // Move the file to the directory where brochures are stored
            $image->move(
                $this->getParameter('brochures_directory'),
                $imageName
            );
            $birthday=$form['birthday']->getData();
            $took_office=$form['took_office']->getData();
            $left_office=$form['left_office']->getData();
            $party=$form['party']->getData();
            $party_color=$form['party_color']->getData();
            $term=$form['term']->getData();
            $vice_president=$form['vice_president']->getData();
            //set data
            $president->setName($name);
            $president->setPresidentCode($president_code);
            $president->setImage($imageName);
            $president->setPassword($password);
            $president->setBirthday($birthday);
            $president->setTookOffice($took_office);
            $president->setLeftOffice($left_office);
            $president->setParty($party);
            $president->setPartyColor($party_color);
            $president->setTerm($term);
            $president->setVicePresident($vice_president);
            $em=$this->getDoctrine()->getManager();
            $em->persist($president);
            $em->flush();
            $id=$president->getId();
            return $this->redirect('/president/detail');
        }
        return $this->render('president/create.html.twig',array(
            'form'=>$form->createView()
        ));
    }


    /**
     * @Route("/president/detail", name="detail_president")
     */
    public function detailAction()
    {

        return $this->render('president/detail.html.twig');
    }

}