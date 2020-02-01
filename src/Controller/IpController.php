<?php
namespace App\Controller;

use App\Controller\AppController;

class IpController extends AppController
{

    public function index()
    {

        $this->viewBuilder()->autoLayout(false);

        $ip = $_SERVER["REMOTE_ADDR"] ;

        $this->set('ip', $ip);
            
        
    }


}
