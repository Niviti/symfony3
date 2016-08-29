<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller; 

/**
 * Description of MainController
 *
 * @author Rafał Niewiński
 */
class MainController extends Controller {
  
    public function homepageAction()
    {
        return $this->render('main/homepage.html.twig');
    }
    
    
}
