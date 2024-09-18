<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
class TopController extends AppController
{
    public function index()
    {
        $text = Configure::read($this->getLanguage() . '.page.top');
        $this->set(['text' => $text]);
        $this->set(['meta' => $text['meta']]);
    }
}
