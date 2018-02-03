<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use App\Entity\Anomalie;

class AnomalieController extends Controller
{
    /**
     * @Route("/anomalie", name="anomalie")
     */
    public function index(Request $request)
    {
      $em = $this->getDoctrine()->getManager();

      $anomalie = new Anomalie();

      $form = $this->createFormBuilder($anomalie)
          ->add('dateCreation', DateType::class,array('label' => 'Date de creation','widget' => 'single_text','format' => 'dd-MM-yyyy'))
          ->add('numShp', TextType::class)
          ->add('numOceane', TextType::class)
          ->add('description', TextareaType::class)
          ->add('versionAno', ChoiceType::class)
          ->add('garantieVSR', ChoiceType::class,array('choices' => array('garantie' => true, 'VSR' => 'false')))
          ->add('valReformulation', ChoiceType::class,array('choices' => array('OUI' => true, 'NON' => false)))
          ->add('dateReformulation', DateType::class,array('label' => 'Date de reformulation','widget' => 'single_text','format' => 'dd-MM-yyyy'))
          ->add('developpeur', ChoiceType::class)
          ->add('versionCorrectif', TextType::class)
          ->add('dateQualMOA', DateType::class,array('label' => 'Date de qualif MOA','widget' => 'single_text','format' => 'dd-MM-yyyy'))
          ->add('dateResolution', DateType::class,array('label' => 'Date de resolution','widget' => 'single_text','format' => 'dd-MM-yyyy'))
          ->add('commentaire', TextareaType::class)
          ->getForm();

          $form->handleRequest($request);
          if ($form->isSubmitted() && $form->isValid()) {
            $anomalie->setDateCreation($form->get('dateCreation'));
            $anomalie->setnumShp($form->get('numShp'));
            $anomalie->setNumOceane($form->get('numOceane'));
            $anomalie->setDescription($form->get('description'));
            $anomalie->setVersionAno($form->get('versionAno'));
            $anomalie->setGarantieVSR($form->get('garantieVSR'));
            $anomalie->setValReformulation($form->get('valReformulation'));
            $anomalie->setDateReformulation($form->get('dateReformulation'));
            $anomalie->setDeveloppeur($form->get('developpeur'));
            $anomalie->setVersionCorrectif($form->get('versionCorrectif'));
            $anomalie->setDateQualMOA($form->get('dateQualMOA'));
            $anomalie->setCommentaire($form->get('commentaire'));
            $em->persist($anomalie);
            //$em->flush();

          return new Response('Anomalie enregistree avec l\'id '.$anomalie->getId());
        }

      return $this->render('Anomalie/index.html.twig', array(
        'form' => $form->createView(),
      ));
    }
}
