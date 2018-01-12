<?php

	namespace App\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;

	class DefaultController extends Controller
	{

		/**
		 * @Route("/", name="homepage")
		 */
		public function index()
		{
			// Je fais des trucs
			/**
			 * J'embête tout le monde, car j'existe déja dans une autre branche et mon contenu est différent
			 */
		}

		/**
		 * @Route("/autre", name="autre")
		 */
		public function autreMethode()
		{
			// Une autre
		}

		/**
		 * @Route("/autre/methode", name="autre_methode")
		 */
		public function methodeUtiliseeParAutreFonctionnalite()
		{
			// Je suis une méthode
		}
	}