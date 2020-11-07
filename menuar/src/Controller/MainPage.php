<?php

declare(strict_types=1);


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainPage extends AbstractController
{
    /**
     * @Route("/main", name="app_login")
     */
    public function main()
    {
        return new Response("MAIN");
    }

}