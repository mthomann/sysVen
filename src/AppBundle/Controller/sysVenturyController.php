<?php

namespace AppBundle\Controller;

use AppBundle\Entity\sysventury;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class sysVenturyController extends Controller
{
    /**
     * @Route("/sysVenturyClient/index", name="sysVentury_list")
     */
    public function listAction()
    {
        $sysventorys = $this->getDoctrine()
                        ->getRepository('AppBundle:sysventury')
                        ->findAll();
        return $this->render('sysVenturyClient/index.html.twig', array(
                'sysventorys' => $sysventorys ));
    }
    /**
     * @Route("/sysVenturyClient/create", name="sysVentury_create")
     */
    public function createAction(Request $request)
    {
        $sysy = new sysventury;

        $form = $this->createFormBuilder($sysy)
            ->add('name', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('lastname', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))     
            ->add('date', DateTimeType::class, array('attr' => array('class' => 'formcontrol', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'create user', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))           
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            // get data
            $name = $form['name']->getData();
            $lastname = $form['lastname']->getData();
            $date = $form['date']->getData();

            //$now = new\DateTime('now');
            $sysy->setName($name);
            $sysy->setCategory('user');
            $sysy->setLastname($lastname);
            $sysy->setDate($date);     

            $em = $this->getDoctrine()->getManager();
            $em->persist($sysy);     
            $em->flush();   

            $this->addFlash(
                'notice',
                'user added');  

            return $this->redirectToRoute('sysVentury_list');
        }
        return $this->render('sysVenturyClient/create.html.twig', array('form' => $form->createView()));
    }
    /**
     * @Route("/sysVenturyClient/edit/{id}", name="sysVentury_edit")
     */
    public function editAction($id, Request $request)
    {
        $sysy = $this->getDoctrine()
                        ->getRepository('AppBundle:sysventury')
                        ->find($id);

        $sysy->setName($sysy->getName());
        $sysy->setCategory($sysy->getCategory());
        $sysy->setLastname($sysy->getLastname());
        $sysy->setDate($sysy->GetDate());   

        $form = $this->createFormBuilder($sysy)
            ->add('name', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('lastname', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))     
            ->add('date', DateTimeType::class, array('attr' => array('class' => 'formcontrol', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'update user', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))           
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            // get data
            $name = $form['name']->getData();
            $lastname = $form['lastname']->getData();
            $date = $form['date']->getData();

            //$now = new\DateTime('now');

            $em = $this->getDoctrine()->getManager();    
            $sysy = $em->getRepository('AppBundle:sysventury')->find($id);

            $sysy->setName($name);
            $sysy->setCategory('user');
            $sysy->setLastname($lastname);
            $sysy->setDate($date);     

            $em->flush();   

            $this->addFlash(
                'notice',
                'user updated');  

            return $this->redirectToRoute('sysVentury_list');
        }

        return $this->render('sysVenturyClient/edit.html.twig', array(
                'sysventory' => $sysy,
                'form' => $form->createView() ));
    }      /**
     * @Route("/sysVenturyClient/details/{id}", name="sysVentury_details")
     */
    public function detailsAction($id)
    {
       $sys = $this->getDoctrine()
                        ->getRepository('AppBundle:sysventury')
                        ->find($id);

        return $this->render('sysVenturyClient/details.html.twig', array(
                'sysventory' => $sys ));
    }
    /**
     * @Route("/sysVenturyClient/delete/{id}", name="sysVentury_delete")
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();    
        $sysy = $em->getRepository('AppBundle:sysventury')->find($id);

        $em->remove($sysy);
        $em->flush();

        $this->addFlash(
            'notice',
            'user removed');  

        return $this->redirectToRoute('sysVentury_list');

    }    
}
