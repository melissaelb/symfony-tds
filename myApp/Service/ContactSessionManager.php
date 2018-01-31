<?php
namespace App\Service;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ContactSessionManager implements IModelManager{
	const KEY='contacts';
	/**
	 * @var SessionInterface
	 */
	private $session;
	private function updateSession($values){
		$this->session->set(self::KEY, $values);
	}
	public function	__construct(SessionInterface $session){
		$this->session=$session;
	}	
	public function getAll(){
		$this->session->get(self::KEY,[]);
	}	
	public function insert($object){
		$contacts=$this->getAll();
		$contacts[]=$object;
		$this->updateSession($contacts);
	}
	public function update($object,$values){
		
	}
	public function delete($indexes){
		
	}
	public function get($index){
		
	}
	public function filterBy($keyAndValues){
		
	}
	public function count(){
		
	}
	public function select($indexes){
		
	}
}