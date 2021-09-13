<?php
    namespace App\Controller;


    use App\Controller\AppController;
    use Cake\Event\Event;
    

    class PagesController extends AppController
    {

        public function home()
    {

    }

    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
        $this->viewBuilder()->layout('site');
    }

    }