<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Category;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/welcome", name="welcome")
     */
    public function index()
    {
        $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();
        return $this->render('welcome/index.html.twig', [
            'categories' => $categories,
        ]);
    }
}
