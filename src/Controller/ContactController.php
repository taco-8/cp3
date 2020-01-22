<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;

class ContactController extends AppController
{

    public function index()
    {
        $this->viewBuilder()->autoLayout(false);

        $this->set('submitflg', '');
        $this->set('reqcontent', '');
        if ($this->request->is('post')) {
            $name = $this->request->data['name'];
            $mailadd = $this->request->data['email'];
            $content = $this->request->data['content'];

            if($content==''){
                $this->set('reqcontent', 'コメントを入力してください');
                return;
            }

            $this->set('submitflg', 'post');

            //send mail start
            /*
            $email = new Email('default');
            $frommailadd = "info@taco-8.com";
            $tomailadd = "to@mailadd.com";
            $mailsubject = "taco-8.comへのコメントです";
            $message = "名前:\r\n".$name
                    ."\r\n"
                    ."\r\nメール:\r\n".$mailadd
                    ."\r\n"
                    ."\r\nコメント:\r\n".$content;
            $email->setFrom($frommailadd)
                ->setTo($tomailadd)
                ->setSubject($mailsubject)
                ->send($message);
                */
            //send mail end

        }

    }


}
