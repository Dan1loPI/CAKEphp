<?php

namespace App\Controller;

use App\Controller\AppController;


class UsersController extends AppController
{

    public function index()
    {

        $usersList = $this->paginate($this->Users);
        $this->set(['users'=>$usersList]);


    }

    public function add()
    {
        $user = $this->Users->newEntity();

        if($this->request->is('post')){
            
            $user = $this->Users->patchEntity($user, $this->request->data);
            
            if($this->Users->save($user)){
                    $this->Flash->success('Salvo com sucesso');
                    
            }else {
                $this->Flash->error('Error ao cadastrar!');
            }
            $this->redirect(['action'=>'index']);
        }
        $this->set(compact('user'));

    }

    public function edit($id)
    {
        $user = $this->Users->get($id);

        if($this->request->is(['post', 'put'])){
            $user = $this->Users->patchEntity($user, $this->request->data);
            if($this->Users->save($user)){
                $this->Flash->success('Editado com sucesso');
            }else {
                $this->Flash->error('Error ao editar!');
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
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if($this->Users->delete($user)){
            $this->Flash->success('Excluido com sucesso');
        }else {
            $this->Flash->error('Error ao excluir!');
        }
        $this->redirect(['action'=>'index']);
    }


}