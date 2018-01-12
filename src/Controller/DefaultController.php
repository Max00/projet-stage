<?php

	namespace App\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;

	class DefaultController extends Controller
	{
		public function methodeUtiliseeParAutreFonctionnalite()
		{
			// Je suis une méthode
		}

		/**
		 * @Route("/", name="homepage")
		 */
		public function index()
		{
			/**
			 * J'embête tout le monde, car j'existe déja dans une autre branche et mon contenu est différent
			 */
		}
	}