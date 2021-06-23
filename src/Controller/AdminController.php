<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Form\RecruteType;
use App\Entity\TgRecrute;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\UserRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
/**
 * @Route("/admin")
 */

class AdminController extends AbstractController
{
    /**
     * @Route("/Formulaire_Recrutement", name="adm_recrut")
     */
    public function created(Request $request): Response
    {
        $TgRecrute = new TgRecrute();
    
        $form = $this->createForm(RecruteType::class, $TgRecrute);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($TgRecrute);
            $entityManager->flush();
            return $this->redirectToRoute('recrutement');
        }
    
        return $this->render('Admin/recrut.html.twig', [
            'recrut' => $form->createView()
        ]);
    }

    /**
     * @Route("/Nos_utilisateurs", name="adm_user_index", methods={"GET"})
     */
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('Admin/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }
    /**
     * @Route("/{id}/Modifier_user", name="adm_user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, User $user): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $role = $request->request->get('role_change');
            $user->setRoles([$role]);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_index');
        }

        return $this->render('Admin/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{id}", name="adm_user_show", methods={"GET"})
     */
    public function show(User $user): Response
    {
        return $this->render('Admin/show.html.twig', [
            'user' => $user,
        ]);
    }
    /**
     * @Route("/{id}", name="adm_user_delete", methods={"POST"})
     */
    public function delete(Request $request, User $user): Response
    {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_index');
    }
}