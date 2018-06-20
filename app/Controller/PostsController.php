<?php

class PostsController extends AppController{

    public $helpers = array('Html', 'Form');
    public $components = array('Session');
    public $uses = array('Post', 'Tag');

    public function index()
    {
        $this->set('posts', $this->Post->find('all', array('order'=>array('Post__id'=>'DESC'))));
    }

    public function view($id = null)
    {
        self::getAuthors();

        $tags = $this->Tag->find('list', array('fields' => array('name')));
        $this->set('tags', $tags);

        if(!$id){
            throw new NotFoundException(__('Post inválido'));
        }
        $post = $this->Post->findById($id);

        if(!$post){
            throw new NotFoundException(__('Post inválido'));
        }

        $this->set('post', $post);
    }

    public function add()
    {
        //ref. autores
        self::getAuthors();

        //ref. HABTM
        $tags = $this->Tag->find('list', array('fields' => array('name')));
        $this->set('tags', $tags);

        if($this->request->is('POST')){
            $this->Post->create();
            if($this->Post->save($this->request->data)){
                $this->Session->setFlash('Post foi adicionado com sucesso', 'Flash\success_flash');
                return $this->redirect(array('action'=>'index'));
            }
            $this->Session->setFlash('Não foi possível adicionar o post', 'Flash\error_flash');
        }
    }

    public function edit($id = null)
    {
        self::getAuthors();

        $tags = $this->Tag->find('list', array('fields' => array('name')));
        $this->set('tags', $tags);

        if(!$id){
            throw new NotFoundException(__('Post inválido'));
        }

        $post = $this->Post->findById($id);
        if(!$post){
            throw new NotFoundException(__('Post inválido'));
        }

        if($this->request->is(array('post', 'put'))){
            $this->Post->id = $id;
            if($this->Post->save($this->request->data)){
                $this->Session->setFlash(__('Post %s foi atualizado', $id), 'Flash\success_flash');
                return $this->redirect(array('action'=>'index'));
            }
            $this->Session->setFlash('Não foi possível atualizar o post', 'Flash\error_flash');
        }

        if(!$this->request->data){
            $this->request->data = $post;
        }
    }

    public function delete($id)
    {
        if($this->request->is('GET')){
            throw new MethodNotAllowedException();
        }

        if($this->Post->delete($id)){
            $this->Session->setFlash(__('Post %s foi removido', $id), 'Flash\success_flash');
            return $this->redirect(array('action'=>'index'));
        }
    }

    public function getAuthors()
    {
        $author = $this->Post->Author->find('list', array('fields' => array('id', 'name')));
        $this->set(compact(author));
    }

}
