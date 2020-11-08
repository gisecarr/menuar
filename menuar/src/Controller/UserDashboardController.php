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
        return $this->render("dashboard/comidas.html.twig");
    }

    /**
     * @Route("/dashboard/comidas", name="app_dashboard_comidas")
     */
    public function getItemsList()
    {
        return $this->render("dashboard/comidas.html.twig");
    }

    /**
     * @Route("/dashboard/info", name="app_dashboard_info")
     */
    public function getRestaurantIfo()
    {
        return $this->render("dashboard/informacion.html.twig");
    }
}