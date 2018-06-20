<?php

App::uses('AppModel', 'Model');

class Post extends AppModel{

    public $name = 'Post';

    public $belongsTo = array('Author');

    var $hasAndBelongsToMany = array(
        'Tag' => array(
            'className' => 'Tag',
            'joinTable' => 'posts_tags',
            'foreignKey' => 'post_id',
            'associationForeignKey' => 'tag_id'
        ),
    );

    public $validate = array(
        'title' => array('rule'=>'notBlank'),
        'body'  => array('rule'=>'notBlank'),
        'author_id' => array('rule' => 'notBlank'),
    );

}
