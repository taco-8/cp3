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
        if ($this->request->is('post')) {
            $name = $this->request->data['name'];
            $mailadd = $this->request->data['email'];
            $content = $this->request->data['content'];
            $this->set('submitflg', 'post');

            //send mail start
            /*
            $email = new Email('default');
            $frommailadd = "info@xxxxx.com";
            $tomailadd = "to@mailadd.com";
            $mailsubject = "this is mail subject";
            $message = "name:\r\n".$name
                    ."\r\n"
                    ."\r\nemail:\r\n".$mailadd
                    ."\r\n"
                    ."\r\ncontent:\r\n".$content;
            $email->setFrom($frommailadd)
                ->setTo($tomailadd)
                ->setSubject($mailsubject)
                ->send($message);
                */
            //send mail end
        }

    }


}
