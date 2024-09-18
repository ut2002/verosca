<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
class AboutController extends AppController
{
    public function index()
    {
        $text = Configure::read($this->getLanguage() . '.page.about');
        $this->set(['text' => $text]);
        $this->set(['meta' => $text['meta']]);
    }
}
