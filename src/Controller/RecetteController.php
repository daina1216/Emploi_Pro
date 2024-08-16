<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecetteController extends AbstractController
    {
        #[Route('/recette/create', name: 'create_recette')]
    public function create(): Response
    {
    return new Response('Recette cr´e´ee');
    }
        #[Route('/recette/read', name: 'read_recette')]
    public function read(): Response
    {
    return new Response('Affichage de la recette');
    }
        #[Route('/recette/update', name: 'update_recette')]
    public function update(): Response
    {
    return new Response('Recette mise `a jour');
    }
        #[Route('/recette/delete', name: 'delete_recette')]
    public function delete(): Response
    {
    return new Response('Recette supprim´ee');
    }
}
