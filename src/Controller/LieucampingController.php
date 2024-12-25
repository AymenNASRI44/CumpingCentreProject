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
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\Exception\FileException;



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

    if ($form->isSubmitted() && $form->isValid()) {
        /** @var UploadedFile $photoFile */
        $photoFile = $form->get('photo')->getData();

        // Vérifiez si un fichier a été téléchargé
        if ($photoFile) {
            // Créez un nom unique pour le fichier
            $newFilename = uniqid().'.'.$photoFile->guessExtension();

            try {
                // Déplacez le fichier dans le répertoire configuré
                $photoFile->move(
                    $this->getParameter('assets_img'), // Paramètre à définir dans `services.yaml`
                    $newFilename
                );

                // Mettez à jour l'entité avec le nouveau nom de fichier
                $lieucamping->setPhoto($newFilename);
            } catch (FileException $e) {
                // Gérer les erreurs liées au téléchargement
                $this->addFlash('error', 'Erreur lors du téléchargement de la photo.');
                return $this->redirectToRoute('app_lieucamping_edit', ['id' => $lieucamping->getId()]);
            }
        }

        // Persister les modifications dans la base de données
        $entityManager->flush();

        // Message de confirmation
        $this->addFlash('success', 'Le camping a été mis à jour avec succès.');

        // Redirection après succès
        return $this->redirectToRoute('app_lieucamping_index');
    }

    // Rendre le formulaire en cas de non soumission ou d'erreur
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
