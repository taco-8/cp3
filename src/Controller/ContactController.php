<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;

class ContactController extends AppController
{

    public function index()
    {
        $this->viewBuilder()->autoLayout(false);

        //send mail start
        $email = new Email('default');
        $frommailadd = "info@xxxxx.com";
        $tomailadd = "to@mailadd.com";
        $mailsubject = "this is mail subject";
        $message = "Hello!\r\n"
                    ."This is TEST MAIL.";
		$email->setFrom($frommailadd)
			->setTo($tomailadd)
			->setSubject($mailsubject)
            ->send($message);
        //send mail end

    }


}
