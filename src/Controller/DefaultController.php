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
		}
	}