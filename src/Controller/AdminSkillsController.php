<?php

namespace App\Controller;

use App\Entity\Skills;
use App\Form\SkillType;
use App\Repository\SkillsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminSkillsController extends AbstractController
{
    /**
     * @Route("/admin/skills", name="admin_skills")
     */
    public function index()
    {
        return $this->render('adminSkills.html.twig', [
            'controller_name' => 'AdminSkillsController',
        ]);
    }

    /**
     * @Route("/admin/skills/create", name="skill_create")
     */
    public function createSkill(Request $request)
    {
        $skill = new Skills();
        $form = $this->createForm(skillType::class, $skill);
        $form->handleRequest($request);

        // Validation + traitement
        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($skill);
            $manager->flush();
            
            $this->addFlash(
                'success',
                'La compétence a bien été ajouté'
            );
            return $this->redirectToRoute('admin_skills');
        }

        return $this->render('admin/adminSkillsForm.html.twig', [
            'formulaireSkill' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/skills/update-{id}", name="skill_update")
     */
    public function updateSkill(skillsRepository $skillsRepository, $id, Request $request)
    {
        $skill = $skillsRepository->find($id);

        $form = $this->createForm(SkillType::class, $skill);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($skill);
            $manager->flush();
            return $this->redirectToRoute('admin_skills');
        }

        return $this->render('admin/adminSkillsForm.html.twig', [
            'formulaireskill' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/skills/delete-{id}", name="skill_delete")
     */
    public function deleteskill(skillsRepository $skillsRepository, $id)
    {
        $skill = $skillsRepository->find($id);

        $manager = $this->getDoctrine()->getManager();
        $manager->remove($skill);
        $manager->flush();

        return $this->redirectToRoute('admin_skills');
    }
}