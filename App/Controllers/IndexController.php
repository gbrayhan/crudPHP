<?php 
namespace App\Controllers;

	use App\Models\Task;

	class IndexController extends BaseController {
		public function getIndex() {
			$tasks=Task::all();
	
			return  $this->renderHTML('index.twig', [
				'tasks' => $tasks;
			]);
		}



 ?>