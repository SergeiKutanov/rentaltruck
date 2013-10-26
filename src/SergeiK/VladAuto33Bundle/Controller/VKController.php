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
            $redirect_url = $this->generateUrl('vk_request', array(), true);
            $url = "https://oauth.vk.com/access_token?client_id=".$this::VK_APP_ID."&client_secret=".$this::VK_APP_SECRET."&code=".$code."&redirect_uri=".$redirect_url."&";

            $resp = file_get_contents($url);
            $data = json_decode($resp, true);
            $vk_access_token = $data['access_token'];
            $vk_uid =  $data['user_id'];

            $res = file_get_contents("https://api.vk.com/method/users.get?uids=".$vk_uid."&access_token=".$vk_access_token."&fields=uid,first_name,last_name,nickname,photo");
            $data = json_decode($res, true);
            var_dump($data);
            $user_info = $data['response'][0];
        }
    }

}
