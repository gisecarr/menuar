<?php

declare(strict_types=1);


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserDashboardController extends AbstractController
{

    /**
     * @Route("/dashboard", name="app_dashboard")
     */
    public function getDashboard()
    {
        return new Response("hello");
    }

}