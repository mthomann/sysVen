<?php

namespace AppBundle\Controller;

use AppBundle\Entity\sysventury;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        $sysventorys = $this->getDoctrine()
                        ->getRepository('AppBundle:sysventury')
                        ->findAll();
        return $this->render('sysVenturyClient/index.html.twig', array(
                'sysventorys' => $sysventorys ));
    }
}
