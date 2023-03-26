<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class WorkshopPhp extends AbstractController
{
    public function hello(): Response
    {
        return new Response('hello world');
    }
}
