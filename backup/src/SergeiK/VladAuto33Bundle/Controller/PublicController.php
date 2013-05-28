<?php

namespace SergeiK\VladAuto33Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PublicController extends Controller
{
    /*
     * index page routing
     */
    public function indexAction()
    {
        return $this->render("SergeiKVladAuto33Bundle:Public:index.html.twig");
    }

    /*
     * no dirver article
     */
    public function nodriverAction()
    {
        return $this->render("SergeiKVladAuto33Bundle:Public:nodriver.html.twig");
    }

    /*
     * with driver article
     */

    public function withdriverAction()
    {
        return $this->render("SergeiKVladAuto33Bundle:Public:withdriver.html.twig");
    }

    /*
     * cars article
     */
    public function carsAction()
    {
        return $this->render("SergeiKVladAuto33Bundle:Public:cars.html.twig");
    }

    /*
     * procession article
     */
    public function processionAction()
    {
        return $this->render("SergeiKVladAuto33Bundle:Public:procession.html.twig");
    }

    /*
     * rent conditions article
     */
    public function conditionsAction()
    {
        return $this->render("SergeiKVladAuto33Bundle:Public:conditions.html.twig");
    }

    /*
     * contacts article
     */
    public function contactsAction()
    {
        return $this->render("SergeiKVladAuto33Bundle:Public:contacts.html.twig");
    }
}
