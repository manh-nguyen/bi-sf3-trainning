<?php
/**
 * Created by PhpStorm.
 * User: administrator
 * Date: 9/13/17
 * Time: 11:02 AM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\President;
use AppBundle\Form\PresidentType;
use AppBundle\Form\PresidentUploadType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class PresidentController extends Controller
{
    /**
     * @Route("/president", name="president")
     */
    public function showAction(Request $request)
    {

        $user = $this->get("security.token_storage")->getToken()->getUser();
        $id=$user->getID();
        $president = $this->getDoctrine()
            ->getRepository('AppBundle:President')
            ->find($id);
        // replace this example code with whatever you need
        $img = $user->getImage();
       $form = $this->createForm(PresidentType::class,$president);

       $form->handleRequest($request);
       if($form->isSubmitted()&&$form->isValid()){
           if($president->getImage()!=null){

               // $file stores the uploaded PDF file
               /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
               $file = $president->getImage();

               // Generate a unique name for the file before saving it
               $fileName = md5(uniqid()).'.'.$file->guessExtension();

               // Move the file to the directory where brochures are stored
               $file->move(
                   $this->getParameter('images_directory'),
                   $fileName
               );

               // Update the 'brochure' property to store the PDF file name
               // instead of its contents
               $president->setImage($fileName);
           }
           else
               $president->setImage($img);
           $em = $this->getDoctrine()->getManager();
           $em->flush();
           return $this->redirectToRoute("president");
       }
       return $this->render(":default:home.html.twig",[
           "form" => $form->createView()
       ]);
    }

    /**
     * @Route("/register", name="create_president")
     */
    public function registerAction(Request $request){
        $president1 = new President();
        $form = $this->createForm(PresidentUploadType::class,$president1);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $password = $this->get('security.password_encoder')
                ->encodePassword(
                    $president1,
                    $president1->getPlainPassword()
                );
            $president1->setPassword($password);
            $em =  $this->getDoctrine()->getManager();

            $em->persist($president1);
            $em->flush();
            $this->addFlash(
                'notice',
                'Register successfully!'
            );
            return $this->redirectToRoute("login");
        }
        return $this->render(':default:register.html.twig',array(
            'form'=>$form->createView()
        ));
    }
}