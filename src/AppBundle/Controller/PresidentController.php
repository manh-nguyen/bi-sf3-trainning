<?php
/**
 * Created by PhpStorm.
 * User: bach
 * Date: 08/09/2017
 * Time: 11:03
 */

namespace AppBundle\Controller;

use AppBundle\Entity\President;
use AppBundle\Form\Type\PresidentType;
use AppBundle\Form\Type\PresidentUploadType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PresidentController
 * @package AppBundle\Controller
 */
class PresidentController extends Controller
{

    /**
     * @Route("president",name="president")
     */
    public function createAction(Request $request){

        $user = $this->get("security.token_storage")->getToken()->getUser();

        $data = [];
        $president_repo = $this->getDoctrine()->getRepository('AppBundle:President');
        $id_president  = $user->getID();
        $president =  $president_repo->find($id_president);
        $president_data['birthday'] = $president->getBirthday();
        $data['form']  = [];
        $form = $this->createForm(PresidentUploadType::class,$president)
        ;
        $img = $user->getImages();
        $form ->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $form_data = $form->getData();
            $data['form'] = [];
            $data['form'] = $form_data;
            if($president->getImages()!=null){

                // $file stores the uploaded PDF file
                /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
                $file = $president->getImages();

                // Generate a unique name for the file before saving it
                $fileName = md5(uniqid()).'.'.$file->guessExtension();

                // Move the file to the directory where brochures are stored
                $file->move(
                    $this->getParameter('images_directory'),
                    $fileName
                );

                // Update the 'brochure' property to store the PDF file name
                // instead of its contents
                $president->setImages($fileName);
            }
            else
            $president->setImages($img);

            $em = $this->getDoctrine()->getManager();
            $em ->flush();
            $this->addFlash(
                'notice',
                'Update successfully!'
            );
            return $this->redirectToRoute('president');
        }
        return $this->render("president/form.html.twig",[
            "form" => $form->createView()
        ]);
    }
    /**
     * @Route("/register",name="register")
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \LogicException
     */
    public function registerAction(Request $request){
        $president = new President();
        $form = $this->createForm(PresidentType::class ,$president, [

        ]);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $password = $this->get('security.password_encoder')
                             ->encodePassword(
                                 $president,
                                 $president->getPlainPassword()
                             );
            $president->setPassword($password);
            $em =  $this->getDoctrine()->getManager();

            $em->persist($president);
            $em->flush();
            $this->addFlash(
                'notice',
                'Register successfully!'
            );
           return $this->redirectToRoute("login");
        }
        return $this->render("president/register.hmtl.twig",[
            "form" => $form->createView()
        ]);
    }



    
}