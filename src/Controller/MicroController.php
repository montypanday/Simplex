<?php

// src/Controller/MicroController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MicroController extends AbstractController
{
    public function randomNumber($limit)
    {
        $number = rand(0, $limit);

        return $this->render('micro/random.html.twig', array(
            'number' => $number
        ));
    }
}