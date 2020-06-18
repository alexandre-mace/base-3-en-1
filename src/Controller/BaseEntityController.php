<?php

namespace App\Controller;

use App\Entity\BaseEntity;
use App\Form\BaseEntityType;
use App\Repository\BaseEntityRepository;
use App\Uploader\FileUploader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("")
 */
class BaseEntityController extends AbstractController
{
    /**
     * @Route("/admin", name="base_entity_index", methods={"GET"})
     */
    public function index(BaseEntityRepository $baseEntityRepository): Response
    {
        return $this->render('base_entity/index.html.twig', [
            'base_entities' => $baseEntityRepository->findAll(),
        ]);
    }

    /**
     * @Route("/base/entity/new", name="base_entity_new", methods={"GET","POST"})
     */
    public function new(Request $request, FileUploader $fileUploader): Response
    {
        $baseEntity = new BaseEntity();
        $form = $this->createForm(BaseEntityType::class, $baseEntity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $brochureFile */
            $image = $form['mainImage']->getData();
            if ($image) {
                $imageFileName = $fileUploader->upload($image);
                $baseEntity->setBrochureFilename($imageFileName);
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($baseEntity);
            $entityManager->flush();

            return $this->redirectToRoute('base_entity_index');
        }

        return $this->render('base_entity/new.html.twig', [
            'base_entity' => $baseEntity,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/base/entity/{id}", name="base_entity_show", methods={"GET"})
     */
    public function show(BaseEntity $baseEntity): Response
    {
        return $this->render('base_entity/show.html.twig', [
            'base_entity' => $baseEntity,
        ]);
    }

    /**
     * @Route("/base/entity/{id}/edit", name="base_entity_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, BaseEntity $baseEntity): Response
    {
        $form = $this->createForm(BaseEntityType::class, $baseEntity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('base_entity_index');
        }

        return $this->render('base_entity/edit.html.twig', [
            'base_entity' => $baseEntity,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/base/entity/{id}", name="base_entity_delete", methods={"DELETE"})
     */
    public function delete(Request $request, BaseEntity $baseEntity): Response
    {
        if ($this->isCsrfTokenValid('delete'.$baseEntity->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($baseEntity);
            $entityManager->flush();
        }

        return $this->redirectToRoute('base_entity_index');
    }
}
