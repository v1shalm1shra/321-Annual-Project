<?php
	namespace App\Controller;
	use App\Controller\AppController;
	use Cake\Event\Event;
	
	use Cake\ORM\TableRegistry;
	use Cake\Datasource\ConnectionManager;
	use Cake\Auth\DefaultPasswordHasher;
	
	class UsersController extends AppController {
		
		public function beforeFilter(Event $event){
			$this->Auth->allow(['controller' => 'Users', 'action' => 'register', 'logout']);
		}
		
		public function register(){
			
			if ($this->Auth->user()) {
				return $this->redirect(
					['controller' => 'Users', 'action' => 'Home']
				);
			}
			else {
				$this->set('newUser', "true");
			}
			
			if($this->request->is('post')){
				
				$username = $this->request->data('username');
				$hashPswdObj = new DefaultPasswordHasher;
				$password = $hashPswdObj->hash($this->request->data('password'));
				
				$users_table = TableRegistry::get('spmr_users');
				$user = $users_table->newEntity();
				$user->username = $username;
				$user->password = $password;
			 
				if($users_table->save($user)) {
					echo "User is added.";
					
					$this->Auth->setUser($user->toArray());
					return $this->redirect([
						'controller' => 'Users',
						'action' => 'home'
					]);
				}
				
			}
		}
		
		public function login(){
			
			if ($this->Auth->user()) {
				return $this->redirect(
					['controller' => 'Users', 'action' => 'Home']
				);
			}
			else {
				$this->set('newUser', "true");
			}
			
			if($this->request->is('post')){
				
				$user = $this->Auth->identify();

				if ($user) {
					$this->Auth->setUser($user);
					return $this->redirect($this->Auth->redirectUrl());
				}
				$this->Flash->error('Your username or password is incorrect.');
				
			}
		}
		
		public function logout()
		{
			$this->Flash->success('You are now logged out.');
			return $this->redirect($this->Auth->logout());
		}

		public function home()
		{
			if ($this->Auth->user()) {
				$this->set('newUser', "false");
			}
			else {
				return $this->redirect(
					['controller' => 'Users', 'action' => 'Login']
				);
			}
			
			$this->set('testId', $this->Auth->user('username'));
		}		

	}
?>