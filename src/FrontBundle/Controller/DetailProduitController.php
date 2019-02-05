<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DetailProduitController extends Controller
{
    public function readAction()
    {
        return $this->render('@Front/pages/detailProduit.html.twig');
    }

}
