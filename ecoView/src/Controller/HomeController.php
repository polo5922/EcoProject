<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(UserRepository $repo)
    {
        $users = $repo->findAllOrderByClics();
        $users_names = $repo->findAllNames();
        // dd($users);
        return $this->render('home/index.html.twig', compact('users', 'users_names'));
    }
}
