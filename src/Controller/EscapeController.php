<?php
namespace App\Controller;

use App\Controller\AppController;

class EscapeController extends AppController
{

    public function index()
    {

        $adminflg = $this->request->session()->read('adminflg');
        if($adminflg!='u1'){
            return $this->redirect(['controller'=>'Articles', 'action'=>'index']);
        }

        $this->viewBuilder()->autoLayout(false);

        if ($this->request->is('post')) {
            $pretext = $this->request->data['pretext'];
            //echo $pretext;

            $this->set('pretext', $pretext);

            $replace = str_replace('<', '&lt;', $pretext);
            $replace = str_replace('>', '&gt;', $replace);

            $escapetext = $replace;
            $this->set('escapetext', $escapetext);
            
        }
        
    }


}
