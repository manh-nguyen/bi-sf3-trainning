<?php
/**
 * Created by PhpStorm.
 * User: intern1
 * Date: 9/11/17
 * Time: 5:06 PM
 */

namespace AppBundle\Controller;
use AppBundle\AppBundle;
use AppBundle\Entity\president_user;
use AppBundle\Form\EditForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EditController extends Controller
{
    /**
     * @Route("/president/edit", name="edit_president")
     */
    public function editAction(Request $request)
    {
        $user = $this->get("security.token_storage")->getToken()->getUser();
        $id=$user->getID();
        $president = $this->getDoctrine()
            ->getRepository('AppBundle:president_user')
            ->find($id);
        $president->setName($president->getName());
        $president->setPresidentCode($president->getPresidentCode());
        $president->setBirthday($president->getBirthday());
        $president->setTookOffice($president->getTookOffice());
        $president->setLeftOffice($president->getLeftOffice());
        $president->setParty($president->getParty());
        $president->setPartyColor($president->getPartyColor());
        $president->setTerm($president->getTerm());
        $president->setVicePresident($president->getVicePresident());
        $form=$this->createForm(EditForm::class,$president);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
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
            $em = $this->getDoctrine()->getManager();
            $president = $em->getRepository('AppBundle:president_user')->find($id);
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

            $em->flush();
            return $this->redirect('/president/detail');
        }
        return $this->render('president/edit.html.twig', array('president' => $president,
            'form'=>$form->createView()
        ));
    }

}