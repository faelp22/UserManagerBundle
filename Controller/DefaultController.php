<?php

namespace faelp22\UserManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UserManagerBundle:Default:index.html.twig');
    }
}
