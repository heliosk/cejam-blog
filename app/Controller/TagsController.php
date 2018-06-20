<?php

class TagsController extends AppController{

    public $helpers = array('Html', 'Form');
    public $components = array('Session');

    public function index()
    {
        $this->set('tags', $this->Tag->find('all', array('order'=>array('id'=>'DESC'))));
    }

    public function view($id = null)
    {
        if(!$id){
            throw new NotFoundException(__('Tag inválida'));
        }
        $tag = $this->Tag->findById($id);

        if(!$tag){
            throw new NotFoundException(__('Tag inválida'));
        }

        $this->set('Tag', $tag);
    }

    public function add()
    {
        if($this->request->is('POST')){
            $this->Tag->create();
            if($this->Tag->save($this->request->data)){
                $this->Session->setFlash('Tag foi adicionada com sucesso', 'Flash\success_flash');
                return $this->redirect(array('action'=>'index'));
            }
            $this->Session->setFlash('Não foi possível adicionar a Tag', 'Flash\error_flash');
        }
    }

    public function edit($id = null)
    {
        if(!$id){
            throw new NotFoundException(__('Tag inválida'));
        }

        $tag = $this->Tag->findById($id);
        if(!$tag){
            throw new NotFoundException(__('Tag inválida'));
        }

        if($this->request->is(array('Tag', 'put'))){
            $this->Tag->id = $id;
            if($this->Tag->save($this->request->data)){
                $this->Session->setFlash(__('Tag %s foi atualizada', $id), 'Flash\success_flash');
                return $this->redirect(array('action'=>'index'));
            }
            $this->Session->setFlash('Não foi possível atualizar a Tag', 'Flash\error_flash');
        }

        if(!$this->request->data){
            $this->request->data = $tag;
        }
    }

    public function delete($id)
    {
        if($this->request->is('GET')){
            throw new MethodNotAllowedException();
        }

        if($this->Tag->delete($id)){
            $this->Session->setFlash(__('Tag %s foi removida', $id), 'Flash\success_flash');
            return $this->redirect(array('action'=>'index'));
        }
    }

}
