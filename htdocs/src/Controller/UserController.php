<?php

class UserController extends Controller
{
	public function __construct()
	{
		$this->view = new UserView();
	}
	public function indexAction()
	{
		return;
	}
	public function createAction(){	
		$message = Message::singleton();
		
		$viewModel = array();
		
		if(array_key_exists ('save', $_REQUEST))
		{
			$name =  array_key_exists ('name', $_REQUEST) ? $_REQUEST['name'] : '';
			
			$email =  array_key_exists ('email', $_REQUEST) ? $_REQUEST['email'] : '';
			
			$password =  array_key_exists ('password', $_REQUEST) ? $_REQUEST['password'] : '';
				  
		  	try
			{
				if(empty($name))
					throw new Exception('Preencha o campo Nome!');

				if(empty($email))
					throw new Exception('Preencha o campo Email!');

				if(empty($password))
					throw new Exception('Preencha o campo Senha!');
			
				$user = new User();
				$user->setName($name);
				$user->setEmail($email);
				$user->setPassword(md5($password));
				
				$userDao = new UserDao();	
			
				if ($userDao->authenticateEmail( $email )) {
					
					$this->setRoute($this->view->getAddRoute());
				
					throw new Exception('Usuário com o e-mail [' . $email . '] já está cadastrado no sistema');
				}
			
				if($userDao->insert($user))
				
				$viewModel = array(
					'users' => $userDao->getAll()
				);
				
				$this->setRoute($this->view->getListRoute());
		
			}
			catch(Exception $e)
			{
				$this->setRoute($this->view->getAddRoute()); 
				
				$message->addWarning($e->getMessage());
			}
		}else $this->setRoute($this->view->getAddRoute()); 
		
		$this->showView($viewModel);

		return;
	}
	
	
	public function editAction(){	
	
		$message = Message::singleton();
		
		$id = array_key_exists('id', $_REQUEST) ? $_REQUEST['id'] : false;
		
		if(array_key_exists('save', $_REQUEST)){
			try{
				$name =  array_key_exists ('name', $_REQUEST) ? $_REQUEST['name'] : '';
				
				$email =  array_key_exists ('email', $_REQUEST) ? $_REQUEST['email'] : '';
							
				$active =  array_key_exists ('active', $_REQUEST) ? 1 : 0;
				
				if(empty($name))throw new Exception('Preencha o campo Nome!');

				if(empty($email))throw new Exception('Preencha o campo Email!');
					
					
					$user = new User();
					$user->setId($id);
					$user->setName($name);
					$user->setEmail($email);
					$user->setActive($active);
					
					$userDao = new UserDao();	
				
				if($userDao->update($user))	
					
				$viewModel = array('users' => $userDao->getAll());
				$this -> setRoute($this -> view -> getListRoute());

			}catch(Exception $e){
				
				$message->addWarning($e->getMessage());
			}
		}else{
			$userDao = new UserDao();
				
			$viewModel = array('user' => $userDao->getUser($id));
				
			$this -> setRoute($this -> view-> getEditRoute());
		}
				
		$this->showView($viewModel);
		
		return;
	}
	
	public function passwordAction(){
		
			
		$message = Message::singleton();
		
		$id = array_key_exists('id', $_REQUEST) ? $_REQUEST['id'] : false;

		if(array_key_exists('save', $_REQUEST)){
			try{
				
				$password =  array_key_exists ('password', $_REQUEST) ? $_REQUEST['password'] : '';

				$passwordNew =  array_key_exists ('new_password', $_REQUEST) ? $_REQUEST['new_password'] : '';
									
				if(empty($password))throw new Exception('Preencha o campo Senha Atual!');

				if(empty($passwordNew))throw new Exception('Preencha o campo Nova Senha!');
				
				$userDao = new UserDao();
				
				$user = $userDao->getUser($id);
	
				if(strcmp($user->getPassword(),md5($password))=== 0){
					$user = new User();
					$user->setId($id);
					$user->setPassword(md5($passwordNew));
					
					
					$userDao = new UserDao();	
					if($userDao->passUpdate($user))	
					
					$viewModel = array('users' => $userDao->getAll());
					
					$this -> setRoute($this -> view -> getListRoute());
					
					
					
				}else{
					
					$userDao = new UserDao();	
				
					$viewModel = array('user' => $userDao->getUser($id));
				
					$this -> setRoute($this -> view-> getPasswordRoute());
					
				
				} 

			}catch(Exception $e){
				$message->addWarning($e->getMessage());
				
				$userDao = new UserDao();	
				
				$viewModel = array('user' => $userDao->getUser($id));
				
				$this -> setRoute($this -> view-> getPasswordRoute());
			}
		}else{
			$userDao = new UserDao();

			$viewModel = array('user' => $userDao->getUser($id));
				
			$this -> setRoute($this -> view-> getPasswordRoute());
		}
				
		$this->showView($viewModel);
		return;
	}
	
	public function listAction(){	
		$userDao = new UserDao();	
	
		$this->setRoute($this->view->getListRoute());
		
		$viewModel = array(
			'users' => $userDao->getAll()
		);
		
		
		
		$this->showView($viewModel);
		
		return;
	}
	
	public function deleteAction(){
		
	}
}