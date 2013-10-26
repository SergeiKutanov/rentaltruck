<?php

namespace SergeiK\VladAuto33Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class VKController extends Controller
{
    const VK_APP_ID = 3955733;
    const VK_APP_SECRET = '2IzJIMNoLRujuLWWXthr';
    /**
     * @Route("/vkanswer/", name="vk_request")
     * @Template()
     */
    public function sendRequestAction(Request $request)
    {
        if($request->query->get('code') != ''){
            $code = $request->query->get('code');
            $redirect_url = $this->get('router')->generate('vk_request');
            $url = "https://oauth.vk.com/access_token?client_id=".$this::VK_APP_ID."&client_secret=".$this::VK_APP_SECRET."&code=".$code."&redirect_uri=".$redirect_url."&";
            die(var_dump($url));
        }
    }

}
