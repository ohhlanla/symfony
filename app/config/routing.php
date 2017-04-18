<?php
// app/config/routing.php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('blog_list', new Route('/blog/{page}', 
array(
    '_controller' => 'AppBundle:Blog:list',
	'page'        => 1,
),  array(
        'page' => '\d+'
    )

));

$collection->add('blog_show', new Route('/blog/{slug}', array(
    '_controller' => 'AppBundle:Blog:show',
)));

$collection->add(
    'article_show',
    new Route('/articles/{_locale}/{year}/{slug}.{_format}', array(
        '_controller' => 'AppBundle:Article:show',
        '_format'     => 'html',
    ), array(
        '_locale' => 'en|fr',
        '_format' => 'html|rss',
        'year'    => '\d+',
    ))
);

$collection->add('redirect_show', new Route('/redit', 
array(
    '_controller' => 'AppBundle:Redirect:show',
)
));

return $collection;