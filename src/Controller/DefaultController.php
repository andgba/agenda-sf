<?php
/**
 * Created by PhpStorm.
 * User: Andrés
 * Date: 26/06/2019
 * Time: 21:49
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    /**
     * @Route("/")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(){
        return $this->render('index.html.twig', array());
    }
}