<?php
// src/AppBundle/Controller/RedirectController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\RedirectResponse; //For redirect

class RedirectController extends Controller
{
     /**
     * Matches /redirect exactly
     *
     * @Route("/redit", name="redirect_show")
     */
    public function showAction()
    {	
		return $this->redirect('http://axo.cc');
 
    }
}