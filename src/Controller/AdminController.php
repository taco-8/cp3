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
            
            /* パスワードハッシュの生成
            $op = array('cost' => 12);
            $hashpw = password_hash( $pw, PASSWORD_DEFAULT, $op);
            echo $hashpw;
            */

            if(password_verify($pw, '$2y$12$TIJx83iUZeqnr2sFIN5ANO6/79arZj2qTbbT1bkC2MwgxUGnLa9aO')){
                $this->request->session()->write('adminflg', 'u1');
                return $this->redirect(['controller'=>'Articles', 'action'=>'index']);
            }
        }
    }


}
