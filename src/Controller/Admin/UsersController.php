<?php

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;


class UsersController extends AppController
{
 
   public function beforeFilter(Event $event){
    parent::beforeFilter($event);
    $this->Auth->allow('add');

   }

   public function login()
    {
        if($this->request->is('post')){
            $user = $this->Auth->identify();
            if($user){
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
        }
    }

    public function logout(){
        $this->Auth->logout();
        return $this->redirect(['action'=>'login']);
    }

    public function index()
    {

        $usersList = $this->paginate($this->Users);
        $this->set(['users'=>$usersList]);


    }

    public function add()
        {
        $user = $this->Users->newEntity();
        if($this->request->is('post')){
            
        $user = $this->Users->patchEntity($user,$this->request->data);
            if($this->Users->save($user)){
                $this->Flash->success('salvo com sucesso');
            } else {
                $this->Flash->error('Nao pode ser salvo');
            }
            $this->redirect(['action'=>'index']);
        }
        $this->set(compact('user'));
        
    }

    public function edit($id)
    {
        $user = $this->Users->get($id);
        if($this->request->is(['post' , 'put'])){
            
        $user = $this->Users->patchEntity($user,$this->request->data);
            if($this->Users->save($user)){
                $this->Flash->success('salvo com sucesso');
            } else {
                $this->Flash->error('Nao pode ser salvo');
            }
                  
        }
        $this->set(compact('user'));
    }


    public function view($id)
    {
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

    public function delete($id)
    {
        $this->request->allowMethod(['post','delete']);
        $user = $this->Users->get($id);
        if($this->Users->delete($user)){
            $this->Flash->success('Removido com sucesso');
        } else {
            $this->Flash->error('Nao pode ser removido');
        }
        $this->redirect(['action'=>'index']);
    }


}