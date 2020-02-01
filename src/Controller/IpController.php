<?php
namespace App\Controller;

use App\Controller\AppController;

class IpController extends AppController
{

    public function index()
    {

        $this->viewBuilder()->autoLayout(false);

        $ip = $_SERVER["REMOTE_ADDR"] ;
        //$host = $_SERVER["REMOTE_HOST"] ;
        $host = gethostbyaddr ($ip) ;

        $this->set('ip', $ip);
        $this->set('host', $host);
            
        
    }


}
