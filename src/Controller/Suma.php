<?php
// src/Controller/SorteoController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Suma extends AbstractController
{
 	public function numero($minimo, $maximo)
 	{
 		$numero = $minimo + $maximo;

 		     return $this->render('suma/suma.html.twig', [
                     'numero' => $numero,
           ]);
	 }
}
