<?php

namespace App\Controllers;
	
	use App\Models\Task;

	class TaskController extends BaseController {
		
		public function getAddJobAction($request){
			$responseMessage = null;

			return $this->renderHTML('addJob.twig', [
            	'responseMessage' => $responseMessage
        	]);
		}
	} 