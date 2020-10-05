<?php

namespace App\Controller;

use App\Repository\SkillsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(SkillsRepository $skillsRepository)
    {
        $skills1 = $skillsRepository->findThree(1);
        $skills2 = $skillsRepository->findThree(2);
        $skills3 = $skillsRepository->findThree(3);

        return $this->render('home/index.html.twig', [
            'skills1' => $skills1,
            'skills2' => $skills2,
            'skills3' => $skills3,
        ]);
    }
}
