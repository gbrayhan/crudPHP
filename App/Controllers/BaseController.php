<?php 
	namespace App\Controllers;

	use Zend\Diactoros\Response\HtmlResponse;
	
	class BaseController {
		protected $templateEngine;

		public function __construct(){
			$loader = new \Twig_Loader_Filesystem('../Views');

			$this->templateEngine = new \Twig_Environment($loader, array(
				'debug' => true,
		    	'cache' => false,
			));
		}

		public function renderHTML($fileName, $data = []) {
			return new HtmlResponse ($this->templateEngine->render($fileName, $data));
		}
	}


 ?>