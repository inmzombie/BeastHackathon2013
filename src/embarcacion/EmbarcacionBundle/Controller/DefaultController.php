<?php

namespace embarcacion\EmbarcacionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('embarcacionEmbarcacionBundle:Default:index.html.twig', array('name' => $name));
    }
}
