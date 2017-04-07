<?php
// src/AppBundle/Controller/ArticleController.php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ArticleController extends Controller
{
    /**
     * @Route(
     *     "/articles/{_locale}/{year}/{slug}.{_format}",
     *     defaults={"_format": "html"},
     *     requirements={
     *         "_locale": "en|fr",
     *         "_format": "html|rss",
     *         "year": "\d+"
     *     }
     * )
     */
    public function showAction($_locale, $year, $slug)
    {
		$_locale = $_locale;
		$year = $year;
		$slug = $slug;
		
		return $this->render('article/article.html.twig',array('locale'=>$_locale,
		                                                        'year' =>$year,
																'slug' =>$slug));
    }
}