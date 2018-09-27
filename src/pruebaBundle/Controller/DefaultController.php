<?php

namespace pruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('pruebaBundle:Default:index.html.twig');
    }
    public function createAction(Request $pro, Request $precio)
    {
      $product = new Product();
      $product->setName($pro);
      $product->setPrice($precio);

      $dm = $this->get('doctrine_mongodb')->getManager();
      $dm->persist($product);
      $dm->flush();

      return $this->render('pruebaBundle:Default:index.html.twig');
    }
    public function pruebaAction()
    {
        return $this->render('pruebaBundle:Default:prueba.html.twig');
    }
}
