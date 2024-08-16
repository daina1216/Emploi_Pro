<?php
// src/Controller/IngredientController.php
namespace App\Controller;
use App\Entity\Ingredient;
use App\Repository\IngredientRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class IngredientController extends AbstractController
{
/**
* @Route("/ingredients", name="ingredient_index")
*/
public function index(IngredientRepository $ingredientRepository): Response
{
$ingredients = $ingredientRepository->findAll();
return $this->render('ingredient/index.html.twig', [
'ingredients' => $ingredients,
]);
}
}