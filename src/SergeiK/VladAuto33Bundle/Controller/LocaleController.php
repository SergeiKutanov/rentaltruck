<?php

namespace SergeiK\VladAuto33Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SergeiK\VladAuto33Bundle\Form\BookingType;
use SergeiK\VladAuto33Bundle\Entity\Booking;
use Doctrine\ORM\EntityRepository;

class LocaleController extends Controller
{
    public function remapAction()
    {      
		$request = $this->getRequest();
		$locale = $request->getLocale();
		var_dump($locale);
		//die();        
		return $this->redirect($this->generateUrl('public_index'));
    }
}
