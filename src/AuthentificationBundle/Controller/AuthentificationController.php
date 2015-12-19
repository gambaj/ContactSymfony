<?php

namespace AuthentificationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AuthentificationController extends Controller
{
    public function indexAction()
    {
        return $this->render('AuthentificationBundle:Authentification:index.html.twig');
    }
}
