<?php

class AuthorsController extends AppController{

    public $helpers = array('Html', 'Form');
    public $components = array('Session');

    public function index()
    {
        $this->set('authors', $this->Author->find('all', array('order'=>array('id'=>'DESC'))));
    }

    public function view($id = null)
    {
        if(!$id){
            throw new NotFoundException(__('Autor inválido'));
        }
        $author = $this->Author->findById($id);

        if(!$author){
            throw new NotFoundException(__('Autor inválido'));
        }

        $this->set('author', $author);
    }

    public function add()
    {
        if($this->request->is('POST')){
            $this->Author->create();
            if($this->Author->save($this->request->data)){
                $this->Session->setFlash('Autor foi adicionado com sucesso', 'Flash\success_flash');
                return $this->redirect(array('action'=>'index'));
            }
            $this->Session->setFlash('Não foi possível adicionar o autor', 'Flash\error_flash');
        }
    }

    public function edit($id = null)
    {
        if(!$id){
            throw new NotFoundException(__('Autor inválido'));
        }

        $author = $this->Author->findById($id);
        if(!$author){
            throw new NotFoundException(__('Autor inválido'));
        }

        if($this->request->is(array('post', 'put'))){
            $this->Author->id = $id;
            if($this->Author->save($this->request->data)){
                $this->Session->setFlash(__('Autor %s foi atualizado', $id), 'Flash\success_flash');
                return $this->redirect(array('action'=>'index'));
            }
            $this->Session->setFlash('Não foi possível atualizar o autor', 'Flash\error_flash');
        }

        if(!$this->request->data){
            $this->request->data = $author;
        }
    }

    public function delete($id)
    {
        if($this->request->is('GET')){
            throw new MethodNotAllowedException();
        }

        if($this->Author->delete($id)){
            $this->Session->setFlash(__('Autor %s foi removido', $id), 'Flash\success_flash');
            return $this->redirect(array('action'=>'index'));
        }
    }

}
