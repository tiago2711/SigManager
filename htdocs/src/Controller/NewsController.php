<?php


class NewsController extends Controller
{

	public function __construct()
	{
		$this->view = new NewsView();
	}

	public function indexAction()
	{
		return;
	}
	
	public function createAction(){	
		$viewModel = array();
		$message = Message::singleton();
		if(array_key_exists('save',$_REQUEST)){
			$titulo = array_key_exists('title',$_REQUEST) ? $_REQUEST['title'] : '';
			$fonte = array_key_exists('autor',$_REQUEST) ? $_REQUEST['autor'] : '';
			$noticia = array_key_exists('noticia',$_REQUEST) ? $_REQUEST['noticia'] : '';
			$destaque = array_key_exists('destaque',$_REQUEST) ? $_REQUEST['destaque'] : 'f';
			$img = array_key_exists('imagem',$_REQUEST) ? $_REQUEST['imagem'] : '';
			try{
				if(empty($titulo)){
					throw new Exception('Preencha o campo Titulo!');
				}
				if(empty($fonte)){
					throw new Exception('Preencha o campo Fonte!');
				}
				if(empty($noticia)){
					throw new Exception('Preencha o campo Noticia!');
				}
				
				$news = new News();
				$news->setTitulo($titulo);
				$news->setAutor($fonte);
				$news->setTexto($noticia);
				$news->setImg($img);
				$news->setDestaque($destaque);
				
				echo ('TEstasdasdasdadsasde');
				$newDao = new NewsDao();
				if($newDao->insert($news)){
				}
				
				$viewModel = array(
					'news' => $newDao->getAll()
				);
				
				$this->setRoute($this->view->getListRoute());
			}catch(Exception $e){
				
				$this->setRoute($this->view->getCreateRoute());
				$message->addWarning($e->getMessage());
			}
			
		}else{
			$this->setRoute($this->view->getCreateRoute());
		}
		$this->showView($viewModel);
	}
	
	public function listAction(){
		$message = Message::singleton();		
		$viewModel = array();
		$newDao = new NewsDao();
		$viewModel = array(
			'news' => $newDao->getAll()
		);
		$this->setRoute($this->view->getListRoute());
		
		$this->showView($viewModel);
	}
	
	public function editAction(){	
		$viewModel = array();
		$newDao = new NewsDao();
		$message = Message::singleton();

			if(array_key_exists('save',$_REQUEST)){
				$titulo = array_key_exists('title',$_REQUEST) ? $_REQUEST['title']: '';
				$fonte = array_key_exists('autor',$_REQUEST) ? $_REQUEST['autor']: '';
				$noticia =array_key_exists('noticia',$_REQUEST) ? $_REQUEST['noticia']: '';
				$destaque = array_key_exists('destaque',$_REQUEST) ? $_REQUEST['destaque'] : 'f';
				$img = array_key_exists('imagem',$_REQUEST) ? $_REQUEST['imagem']: '';
				try{
					
					if(empty($titulo)){
						throw new Exception('Preencha o campo Titulo!');
					}		
					if(empty($fonte)){
						throw new Exception('Preencha o campo Fonte!');
					}
					if(empty($noticia)){
						throw new Exception('Preencha o campo Noticia!');
					}
					$new = new News();
					$new->setId($_REQUEST['id']);
					$new->setTitulo($titulo);
					$new->setTexto($noticia);
					$new->setAutor($fonte);
					$new->setDestaque($destaque);
					$new->setImg($img);
					
					if($newDao->update($new)){
					}
					$viewModel = array(
						'news' => $newDao->getAll()
					);
					
					$this->setRoute($this->view->getListRoute());	
				}catch(Exception $e){
					$viewModel = array(
						'news' => $newDao->getAll()
					);
					$this->setRoute($this->view->getEditRoute());
					$message->addWarning($e->getMessage());
					echo $e->getMessage();
					
				}
			}else{
				$viewModel = array(
					'news' => $newDao->getNews($_REQUEST['id'])
				);
				$this->setRoute($this->view->getEditRoute());
			}
			$this->showView($viewModel);
	}
	
	public function deleteAction(){
		$viewModel = array();
		$message = Message::singleton();
		if(array_key_exists('id',$_REQUEST)){
			$newDao = new NewsDao();
			if($newDao->delete($_REQUEST['id'])){
			}
		}
		$viewModel = array(
					'news' => $newDao->getAll()
				);
		$this->setRoute($this->view->getListRoute());
		$this->showView($viewModel);
	}
}