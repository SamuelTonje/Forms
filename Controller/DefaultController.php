<?php

namespace Aphp\FormsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AphpFormsBundle:Default:index.html.twig');
    }
}
