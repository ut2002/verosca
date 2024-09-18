<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Log\Log;
use Cake\Mailer\Mailer;

class ContactController extends AppController
{
    public function index()
    {
        $this->set(['is_contact_page' => true]);
        $text = Configure::read($this->getLanguage() . '.page.contact');
        $this->set(['text' => $text]);
        $this->set(['meta' => $text['meta']]);
    }

    public function store()
    {
        $this->autoRender = false;
        $data = [];
        if ($this->request->is('ajax')) {
            $data['name'] = $this->request->getData('name');
            $data['phone'] = $this->request->getData('phone');
            $data['email'] = $this->request->getData('email');
            $data['content'] = $this->request->getData('content');
            $data['text'] = Configure::read($this->getLanguage() . '.page.contact');
            $this->sendMail($data);
        }
        return $this->response->withType('application/json')
            ->withStatus(200)
            ->withStringBody(json_encode(['message' => 'success']));
    }

    private function sendMail($data)
    {
        try {
            $mailer = new Mailer('default');
            $mailer
                ->setEmailFormat('html')
                ->setFrom([env('EMAIL_TO', '') => $data['text']['config']['email_title']])
                ->setTo(env('EMAIL_TO', ''))
                ->setSubject($data['text']['config']['subject'])
                ->setViewVars(['data' => $data])
                ->viewBuilder()
                ->setTemplate('contact')
                ->setLayout('contact');

            $mailer->deliver();
        }
        catch (\Exception $e)
        {
            Log::error($e->getMessage());
        }
    }
}
