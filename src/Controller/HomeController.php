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
        $skills1 = $skillsRepository->findProps('Programming Languages/Technologies');
        $skills2 = $skillsRepository->findProps('Frameworks/Libraries');
        $skills3 = $skillsRepository->findProps('Databases');

        return $this->render('home/index.html.twig', [
            'skills1' => $skills1,
            'skills2' => $skills2,
            'skills3' => $skills3,
        ]);
    }
}
