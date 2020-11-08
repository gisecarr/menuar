<?php

declare(strict_types=1);


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController
{
    /**
     * @Route("/menu/card", name="app_menu")
     */
    public function showMenu()
    {
        $data = [
            "menuItems" => [
                "pizzas" => [
                    [
                        "nombre" => "pizza napo",
                        "description" => "Napo clasica mucho ajo",
                        "precio" => 200
                    ],
                    [
                        "nombre" => "Muzza",
                        "description" => "Muzza",
                        "precio" => 200
                    ],
                    [
                        "nombre" => "pizza napo",
                        "description" => "Napo clasica mucho ajo",
                        "precio" => 200
                    ],
                    [
                        "nombre" => "Muzza",
                        "description" => "Muzza",
                        "precio" => 200
                    ],
                    [
                        "nombre" => "pizza napo",
                        "description" => "Napo clasica mucho ajo",
                        "precio" => 200
                    ],
                    [
                        "nombre" => "Muzza",
                        "description" => "Muzza",
                        "precio" => 200
                    ],
                    [
                        "nombre" => "pizza napo",
                        "description" => "Napo clasica mucho ajo",
                        "precio" => 200
                    ],
                    [
                        "nombre" => "Muzza",
                        "description" => "Muzza",
                        "precio" => 200
                    ],
                ],
                "pastas" => [
                    [
                        "nombre" => "pizza napo",
                        "description" => "Napo clasica mucho ajo",
                        "precio" => 200
                    ],
                    [
                        "nombre" => "Muzza",
                        "description" => "Muzza",
                        "precio" => 200
                    ],
                    [
                        "nombre" => "pizza napo",
                        "description" => "Napo clasica mucho ajo",
                        "precio" => 200
                    ],
                    [
                        "nombre" => "Muzza",
                        "description" => "Muzza",
                        "precio" => 200
                    ],
                ],
            ]
        ];
        return $this->render('menu/menu.html.twig', $data);
    }

}