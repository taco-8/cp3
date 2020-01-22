<?php
namespace App\Controller;

use App\Controller\AppController;

class EscapeController extends AppController
{

    public function index()
    {
        $this->viewBuilder()->autoLayout(false);

        if ($this->request->is('post')) {
            $pretext = $this->request->data['pretext'];
            
        }
        
    }


}
