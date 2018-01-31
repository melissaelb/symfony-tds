<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Service\ContactSessionManager;
use App\Model\Contact;

class UsersController extends Controller
{
    /**
     * @Route("/users", name="users")
     */
    public function index(ContactSessionManager $contactSessionManager)
    {
    	$contactSessionManager->insert(new Contact());
    	$contacts=$contactSessionManager->getAll();
    	return $this->render('users/index.html.twig',["contacts"=>$contacts]);
    }
    
}
