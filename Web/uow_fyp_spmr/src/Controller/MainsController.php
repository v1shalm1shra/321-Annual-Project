<?php
	namespace App\Controller;
	use App\Controller\AppController;
	use Cake\Event\Event;
	
	class MainsController extends AppController {
		public function beforeFilter(Event $event){
			$this->Auth->allow();
		}
		
		public function index(){
			if ($this->Auth->user()) {
				$this->set('newUser', "false");
			}
			else {
				$this->set('newUser', "true");
			}
		}
	}
?>