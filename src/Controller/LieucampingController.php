<?php

namespace App\Controller;

use App\Entity\Lieucamping;
use App\Form\LieucampingType;
use App\Repository\LieucampingRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\String\Slugger\AsciiSlugger;
use Symfony\Component\HttpFoundation\File\Exception\IOExceptionInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;


#[Route('/lieucamping')]
class LieucampingController extends AbstractController
{
    #[Route('/', name: 'app_lieucamping_index', methods: ['GET'])]
    public function index(LieucampingRepository $lieucampingRepository): Response
    {
        return $this->render('lieucamping/index.html.twig', [
            'lieucampings' => $lieucampingRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_lieucamping_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $lieucamping = new Lieucamping();
        $form = $this->createForm(LieucampingType::class, $lieucamping);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($lieucamping);
            $entityManager->flush();

            return $this->redirectToRoute('app_lieucamping_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('lieucamping/new.html.twig', [
            'lieucamping' => $lieucamping,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_lieucamping_show', methods: ['GET'])]
    public function show(Lieucamping $lieucamping): Response
    {
        return $this->render('lieucamping/show.html.twig', [
            'lieucamping' => $lieucamping,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_lieucamping_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Lieucamping $lieucamping, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(LieucampingType::class, $lieucamping);
        $form->handleRequest($request);

        // Si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $photoFile */
            $photoFile = $form->get('photo')->getData(); // Récupère le fichier téléchargé

            // Si un fichier photo a été téléchargé
            if ($photoFile) {
                // Créez un nom unique pour l'image téléchargée
                $newFilename = uniqid().'.'.$photoFile->guessExtension();

                // Déplacez le fichier dans le répertoire 'uploads/photos'
               
                    $photoFile->move(
                        $this->getParameter('assets/img'), // Chemin du répertoire pour stocker les photos
                        $newFilename
                    );
                    // Mettez à jour la propriété "photo" de l'entité avec le nom du fichier
                    $lieucamping->setPhoto($newFilename);
                 
                    $this->addFlash('error', 'Erreur lors du téléchargement de la photo.');
                    return $this->redirectToRoute('app_lieucamping_edit', ['id' => $lieucamping->getId()]);
                
            }

            // Sauvegardez les changements dans la base de données
            $entityManager->flush();

            // Redirigez vers la liste des Lieucamping après la mise à jour
            $this->addFlash('success', 'Le camping a été mis à jour avec succès.');
            return $this->redirectToRoute('app_lieucamping_index');
        }

        // Si le formulaire n'a pas encore été soumis ou s'il y a une erreur
        return $this->renderForm('lieucamping/edit.html.twig', [
            'lieucamping' => $lieucamping,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_lieucamping_delete', methods: ['POST'])]
    public function delete(Request $request, Lieucamping $lieucamping, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$lieucamping->getId(), $request->request->get('_token'))) {
            $entityManager->remove($lieucamping);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_lieucamping_index', [], Response::HTTP_SEE_OTHER);
    }
}
