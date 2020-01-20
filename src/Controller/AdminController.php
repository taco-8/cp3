<?php
namespace App\Controller;

use App\Controller\AppController;

class AdminController extends AppController
{

    public function index()
    {
        $this->viewBuilder()->autoLayout(false);

        if ($this->request->is('post')) {
            $pw = $this->request->data['pw'];
            if($pw=="test"){
                $this->request->session()->write('adminflg', 'u1');
                return $this->redirect(['controller'=>'Articles', 'action'=>'index']);
            }
        }
    }


}
