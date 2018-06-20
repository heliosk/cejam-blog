<?php

App::uses('AppModel', 'Model');

class Author extends AppModel{

    public $name = 'Author';

    public $hasMany = array('Post');

    public $validate = array(
        'name' => array('rule'=>'notBlank')
    );

}
