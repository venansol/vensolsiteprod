<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class GenusController extends Controller
{
    /**
     *@Route("/genus/{genusname}")
     */
    public function showAction($genusname)
    {
        return $this-> render("genus/show.html.twig",[
            'name' => $genusname
        ]);


    }
}