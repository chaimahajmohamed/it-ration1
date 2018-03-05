<?php

namespace Admin\FormationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdminFormationBundle:Default:index.html.twig');
    }
}
