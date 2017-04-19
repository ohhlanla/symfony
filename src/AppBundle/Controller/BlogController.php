<?php
// src/AppBundle/Controller/BlogController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BlogController extends Controller
{
    /**
     * Matches /blog exactly
     *
     * @Route("/blog/{page}", name="blog_list", requirements={"page": "\d+"})
     */
    public function listAction($page)
    {
		$text = $page;
		
		if($text==9)
			
		{return $this->redirectToRoute('homepage');} // redirect to the "homepage" route
	
        return $this->render('blog/blog.html.twig', array(
            'number' => $text,
        ));
    }
    /**
     * Matches /blog/*
     *
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function showAction($slug)
    {
        // $slug will equal the dynamic part of the URL
        // e.g. at /blog/yay-routing, then $slug='yay-routing'
		
        return $this->render('blog/blog.html.twig', array(
            'number' => $slug,
        ));
    }
	
	/**
     * Matches /blog
     *
     * @Route("/blog", name="blog_index")
     */
    public function indexAction()
    {
		
        return $this->render('blog/index.html.twig');
    }
   
}